<?php

class BMFaq extends \Fbf\LaravelSimpleFaqs\Faq {
    function saveFaq() {
        $this->save();

        $categories = Input::get('categories');

        if(!empty($categories)) {

        }
    }
}