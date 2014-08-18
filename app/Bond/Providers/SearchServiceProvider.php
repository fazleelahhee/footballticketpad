<?php namespace Bond\Providers;

use Illuminate\Support\ServiceProvider;

class SearchServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('search', 'Bond\Search\Search');
    }
}
