<?php
namespace Bondmedia\Footballticket\ShortCode;

use Bond\Abstracts\BaseShortCodeAbstract;
use Bond\Interfaces\BaseShortCodeInterface;
use View;

class RegistrationForm extends BaseShortCodeAbstract implements BaseShortCodeInterface{
    private $url = '/ticket/registration';
    protected $params = array('reload'  => 'none');
    public function __construct() {
        $this->setTemplate("footballticket::registration");
        return $this;
    }

    /**
     * @return mixed
     */
    public function render() {
        return View::make($this->getTemplate(), $this->params)
            ->with('url', $this->url)
            ->render();
    }
}



