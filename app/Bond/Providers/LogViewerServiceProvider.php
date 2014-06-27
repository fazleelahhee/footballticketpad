<?php namespace Bond\Providers;

use Illuminate\Support\ServiceProvider;

class LogViewerServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('logviewer', 'Bond\LogViewer\LogViewer');
    }
}
