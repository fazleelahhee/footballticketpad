<?php
namespace Bondmedia\Admin\ShortCode;

use Faqs;
use Bond\Repositories\Faq\FaqRepository;
use View;

class FAQ {
    private $template = "admin::faq";
    private $params = array();

    public function __construct() {
        return $this;
    }

    public function setParams($options) {
        parse_str(urldecode($options), $this->params);
    }

    /**
     * @return mixed
     */
    public function render() {
        $faq = new FaqRepository(new Faqs());
        return View::make($this->template)
            ->with('faqs', $faq->all())
            ->render();
    }
}