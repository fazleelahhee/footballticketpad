<?php
namespace Bondmedia\Admin\ShortCode;

use Bond\Abstracts\BaseShortCodeAbstract;
use Bond\Interfaces\BaseShortCodeInterface;
use Slider;
use Photo;
use View;

class Block extends BaseShortCodeAbstract implements BaseShortCodeInterface{

    protected $params = array(
        'images' => ''
    );

    public function __construct() {
        $this->setTemplate("admin::block");
        return $this;
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
        return View::make($this->getTemplate())
            ->with('images', $images)
            ->render();
    }
}