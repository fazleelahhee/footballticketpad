<?php namespace Bond\Repositories\Faq;

use Config;
use Faqs;
use Response;
use Bond\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Bond\Exceptions\Validation\ValidationException;
use Bond\Repositories\AbstractValidator as Validator;

class FaqRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $news;

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

    public function __construct(Faqs $news) {

        $config = Config::get('bondcms');
        $this->perPage = $config['modules']['per_page'];
        if ($news) {
            $this->news = $news;
        } else {
            $this->news = new Faqs();
        }

    }

    public function all() {

        return $this->news->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->news->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->news->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->news->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {

        return $this->news->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->news->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('News validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->news = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->news->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('News validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $news = $this->news->find($id)->delete();
    }

    public function togglePublish($id) {

        $news = $this->news->find($id);
        $news->is_published = ($news->is_published) ? false : true;
        $news->save();

        return Response::json(array('result' => 'success', 'changed' => ($news->is_published) ? 1 : 0));
    }
}
