<?php namespace Bond\Composers;

class AdminMenuComposer {
    public function compose($view) {
        $view->with('type', strip_tags(filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS)));
    }
}

