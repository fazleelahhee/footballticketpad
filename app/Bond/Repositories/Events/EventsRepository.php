<?php namespace Bond\Repositories\Events;

use Config;
use FootBallEvent;
use Response;
use Bond\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Bond\Exceptions\Validation\ValidationException;
use Bond\Repositories\AbstractValidator as Validator;

class EventsRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $events;

    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
        'title'    => 'required',
        'content'  => 'required',
        'datetime' => 'required|date',
    ];

    public function __construct(FootBallEvent $events) {

        $config = Config::get('bondcms');
        $this->perPage = $config['modules']['per_page'];
        $this->events = $events;
    }

    public function all() {

        return $this->news->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->events->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {
        if($all)
            return $this->events->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->events->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {

        return $this->events->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->events->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('Events validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->events = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->events->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('Events validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $events = $this->events->find($id)->delete();
    }

    public function togglePublish($id) {

        $events = $this->events->find($id);
        $events->is_published = ($events->is_published) ? false : true;
        $events->save();

        return Response::json(array('result' => 'success', 'changed' => ($events->is_published) ? 1 : 0));
    }
}
