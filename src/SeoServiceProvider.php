<?php
namespace DevbShrestha\Seo;

use DevbShrestha\Seo\Facades\Seo;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/views', 'seo');

    }

    public function register()
    {
        $this->app->bind('seo', function () {
            return new Seo;
        });

    }
}
