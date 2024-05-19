<?php

namespace JfBiswajit\TranslaFlex;

use Illuminate\Support\ServiceProvider;
use JfBiswajit\TranslaFlex\Console\Command\PublishTranslaFlex;
use JfBiswajit\TranslaFlex\Livewire\Translations\CreateTranslationComponent;
use Livewire\Livewire;
use Illuminate\Support\Facades\App;


class TranslaFlexServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        Livewire::component('tanslaflex::create-translation', CreateTranslationComponent::class);
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'translaflex');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'translaflex');


        if ($this->app->runningInConsole()) {
            // !REQUIRED
            $this->commands(PublishTranslaFlex::class);

            // !PUBLISH PACKAGE CONFIG - OPTIONAL
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('translaflex.php'),
            ], 'config');
        }
    }
}
