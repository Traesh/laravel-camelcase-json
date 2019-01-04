<?php
namespace Traesh\LaravelUpperCamelCaseJson;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class UpperCamelCaseJsonResponseServiceProvider extends ServiceProvider
{
    /**
     * register()
     */
    public function register()
    {
        $view = $this->app->make('view');
        $redirect = $this->app->make('redirect');
        $this->app->singleton(ResponseFactory::class, function () use ($view, $redirect) {
            return new UpperCamelCaseJsonResponseFactory($view, $redirect);
        });
    }
}
