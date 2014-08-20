<?php
namespace Bondmedia\Admin\ShortCode;

use Slider;
use Photo;
use View;

class BMSlider {
    private $template = "admin::slider";
    private $params = array(
        'images' => ''
    );

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
        try {
            $slider = Slider::with('images')->findOrFail($this->params['id']);
        } catch(\Exception $e) {
            //do nothing
        }

        $images = isset($slider['relations']['images'])? $slider['relations']['images'] : array();

        return View::make($this->template)
            ->with('images', $images)
            ->render();
    }
}


