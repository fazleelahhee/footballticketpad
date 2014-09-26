<?php namespace Bond\Repositories\FootballTicket;

use Input;
use Config;
use FootballTickets;
use Response;
use Bond\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Bond\Exceptions\Validation\ValidationException;
use Bond\Repositories\AbstractValidator as Validator;

class FootballTicketRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $footballTicket;
    protected $slug_prefix = 'club';
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
        'title'    => 'required',
        'content'  => 'required'
    ];

    public function __construct(FootballTickets $footballTicket) {

        $config = Config::get('bondcms');
        $this->perPage = $config['modules']['per_page'];
        $this->footballTicket= $footballTicket;

        $type = Input::get('action_type');
        if(!empty($type)) {
            $this->slug_prefix =  $type;
        }
    }

    public function all() {

        return $this->footballTicket->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->footballTicket->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->footballTicket
                ->where('type', '=',$this->slug_prefix)
                ->orderBy('created_at', 'DESC')
                ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->footballTicket
            ->where('type', '=',$this->slug_prefix)
            ->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {
        return $this->footballTicket->findOrFail($id);
    }

    public function create($attributes) {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes)) {
            $this->footballTicket->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('Football Ticket validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->footballTicket = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->footballTicket->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('Football Ticket validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $footballTicket = $this->footballTicket->find($id)->delete();
    }

    public function togglePublish($id) {

        $footballTicket = $this->footballTicket->find($id);
        $footballTicket->is_published = ($footballTicket->is_published) ? false : true;
        $footballTicket->save();

        return Response::json(array('result' => 'success', 'changed' => ($footballTicket->is_published) ? 1 : 0));
    }
}
