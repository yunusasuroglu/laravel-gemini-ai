<?php

namespace yunusasuroglu\Gemini;

use Illuminate\Support\ServiceProvider;

class GeminiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GeminiService::class, function ($app) {
            return new GeminiService();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/gemini.php' => config_path('gemini.php'),
        ], 'config');
    }
}