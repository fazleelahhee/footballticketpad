<?php
namespace Bondmedia\Website\ShortCode;

use Bond\Abstracts\BaseShortCodeAbstract;
use Bond\Interfaces\BaseShortCodeInterface;
use View;

class MailChimp extends BaseShortCodeAbstract implements BaseShortCodeInterface{
    protected $params = array();
    public function __construct() {
        $this->setTemplate("website::news.latest-news");
        return $this;
    }

    /**
     * @return mixed
     */
    public function render() {
        return View::make($this->getTemplate(), $this->params)
            ->render();
    }
}