<?php
namespace Bondmedia\Admin\ShortCode;

use Bond\Abstracts\BaseShortCodeAbstract;
use Bond\Interfaces\BaseShortCodeInterface;
use Faqs;
use Bond\Repositories\Faq\FaqRepository;
use View;

class FAQ extends BaseShortCodeAbstract implements BaseShortCodeInterface{

    public function __construct() {
        $this->setTemplate("admin::faq");
        return $this;
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