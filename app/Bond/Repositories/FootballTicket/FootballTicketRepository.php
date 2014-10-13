<?php namespace Bond\Repositories\FootballTicket;

use Input;
use Config;
use FootballTickets;
use FootballTicketMeta;
use Response;
use Bond\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Bond\Exceptions\Validation\ValidationException;
use Bond\Repositories\AbstractValidator as Validator;

class FootballTicketRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $footballTicket;
    protected $slug_prefix = 'club';
    protected $meta_data = array('club_logo', 'nickname', 'founded', 'rivals','recorded_goal_scorer', 'record_signing', '');

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

    /**
     * @param string $slug_prefix
     */
    public function setSlugPrefix($slug_prefix)
    {
        $this->slug_prefix = $slug_prefix;
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

    public function findByUri($type, $slug) {
        return $this->footballTicket->where('type', '=', $type)
                                    ->where('slug', '=', $slug)
                                    ->first();
    }

    public function findByType($type = '') {
        return $this->footballTicket->where('type', '=', $type)
            ->orderBy('created_at', 'ASC')
            ->groupBy('slug')
            ->get();
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes)) {
            $this->footballTicket->fill($attributes)->save();
            if(in_array($this->footballTicket->type, array('club', 'league'))) {
                $footballTicketMeta = new FootballTicketMeta();
                if(isset($attributes['country']) && $attributes['country'] != '') {
                    $footballTicketMeta->fill(
                        array(
                            'football_ticket_id' => $this->footballTicket->id,
                            'key'                => 'country',
                            'value'              => $attributes['country']
                        )
                    )->save();
                }

                foreach($this->meta_data as $_val) {
                    if(isset($attributes[$_val])) {
                        $footballTicketMeta = new FootballTicketMeta();
                        $footballTicketMeta->fill(
                            array(
                                'football_ticket_id' => $this->footballTicket->id,
                                'key'                => $_val,
                                'value'              => $attributes[$_val]
                            )
                        )->save();
                    }
                }

            }
            return true;
        }

        throw new ValidationException('Football Ticket validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->footballTicket = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->footballTicket->fill($attributes)->save();
            $footballTicketMeta = new FootballTicketMeta();
            if(in_array($this->footballTicket->type, array('club', 'league'))) {
            $countryMeta = $footballTicketMeta->where('football_ticket_id', '=', $this->footballTicket->id)
                ->where('key', '=', 'country')
                ->first();

                if($countryMeta == null) {
                    $countryMeta = new FootballTicketMeta();
                }

                if(isset($attributes['country']) && $attributes['country'] != '') {
                    $countryMeta->fill(
                        array(
                            'football_ticket_id' => $this->footballTicket->id,
                            'key'                => 'country',
                            'value'              => $attributes['country']
                        )
                    )->save();
                }

                foreach($this->meta_data as $_val) {
                    if(isset($attributes[$_val])) {
                        $footballTicketMeta = $footballTicketMeta->where('football_ticket_id', '=', $this->footballTicket->id)
                            ->where('key', '=', $_val)
                            ->first();

                        if($countryMeta == null) {
                            $footballTicketMeta = new FootballTicketMeta();
                        }
                        $footballTicketMeta = new FootballTicketMeta();
                        $footballTicketMeta->fill(
                            array(
                                'football_ticket_id' => $this->footballTicket->id,
                                'key'                => $_val,
                                'value'              => $attributes[$_val]
                            )
                        )->save();
                    }
                }

            }

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

