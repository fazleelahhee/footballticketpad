<?php namespace Bond\Composers\Admin;

use FormPost;

class MenuComposer {
    public function compose($view) {
        $view->with('formPostCount', FormPost::where('is_answered', 0)->count());
        $type = strip_tags(filter_input(INPUT_GET, 'type', FILTER_SANITIZE_SPECIAL_CHARS));
        $view->with('type', $type);
    }
}

