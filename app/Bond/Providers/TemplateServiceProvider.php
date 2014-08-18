<?php namespace Bond\Providers;

use Illuminate\Support\ServiceProvider;


class TemplateServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Template', 'Bond\Facades\Template');
        });
    }
}
