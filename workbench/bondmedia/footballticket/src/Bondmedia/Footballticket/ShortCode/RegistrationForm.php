<?php
namespace Bondmedia\Footballticket\ShortCode;

use View;

class RegistrationForm {
    private $url = '/ticket/registration';
    private $template = "footballticket::registration";

    public function __construct() {
        return $this;
    }

    /**
     * @return mixed
     */
    public function render() {
        return View::make($this->template)
            ->with('url', $this->url)
            ->render();
    }
}



