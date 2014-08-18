<?php namespace Bond\Providers;

use Illuminate\Support\ServiceProvider;
use Bond\Feeder\Feeder;

class FeederServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('feeder', 'Bond\Feeder\Feeder');
    }
}
