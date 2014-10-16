<?php namespace Bond\Repositories\Page;

use DB;
use Pages;
use PagesMeta;
use Config;
use Response;
use Bond\Traits\GridPagination;
use Bond\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Bond\Exceptions\Validation\ValidationException;
use Bond\Repositories\AbstractValidator as Validator;

class PageRepository extends Validator implements BaseRepositoryInterface
{

    use GridPagination;

    protected $perPage;
    protected $page;

    protected $pageMeta = ['feature_image', 'template'];
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
        'title'   => 'required|min:3',
        'content' => 'required|min:5'
    ];

    public function __construct(Pages $page = null)
    {

        if (empty($page))
            $page = new Pages();

        $config        = Config::get('bondcms');
        $this->perPage = $config['modules']['per_page'];
        $this->page    = $page;
    }

    public function all()
    {

        return $this->page->orderBy('created_at', 'DESC')->get();
    }

    public function lists()
    {

        return $this->page->get()->lists('title', 'slug');
    }

    public function paginate($perPage = null)
    {

        if ($this->page instanceof Page) {
            return $this->page->paginate(($perPage) ? $perPage : $this->perPage);
        }
        return $perPage;
    }

    public function find($id)
    {
        // return DB::table('pages')->where('id', $id)->first();
        return $this->page->findOrFail($id);
    }

    public function create($attributes)
    {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {
            $this->page->fill($attributes)->save();
            $this->savePageMeta($this->page->id, $attributes);
            return;
            //save page meta
        }

        throw new ValidationException('Page validation failed', $this->getErrors());
    }

    public function update($id, $attributes)
    {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->page = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->page->fill($attributes)->save();
            $this->savePageMeta($this->page->id, $attributes);
            return true;
        }

        throw new ValidationException('Category validation failed', $this->getErrors());
    }

    public function destroy($id)
    {

        $this->page->findOrFail($id)->delete();
    }

    public function togglePublish($id)
    {

        $page               = $this->page->find($id);
        $page->is_published = ($page->is_published) ? false : true;
        $page->save();
        return Response::json(array('result' => 'success', 'changed' => ($page->is_published) ? 1 : 0));
    }

    public function savePageMeta($id, $attributes)
    {
        foreach ($this->pageMeta as $meta) {
            if (isset($attributes[$meta])) {
                $pagesMeta   = new PagesMeta();
                $metaOptions = [
                    'page_id'      => $id,
                    'meta_keyword' => $meta,
                    'meta_content' => $attributes[$meta]
                ];

                $pagesMeta->setMetaKey($metaOptions);
            }
        }
    }
}
