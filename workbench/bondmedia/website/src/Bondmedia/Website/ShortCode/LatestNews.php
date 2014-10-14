<?php
namespace Bondmedia\Website\ShortCode;

use Bond\Abstracts\BaseShortCodeAbstract;
use Bond\Interfaces\BaseShortCodeInterface;
use View;
use Article;
class LatestNews extends BaseShortCodeAbstract implements BaseShortCodeInterface{
    protected $params = array();
    public function __construct() {
        $this->setTemplate("website::news.latest-news");
        return $this;
    }

    /**
     * @return mixed
     */
    public function render() {
        $latestNews = Article::where('is_published', '=', '1')
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();
        View::share('latestNews', $latestNews);
        return View::make($this->getTemplate(), $this->params)
            ->render();
    }
}



