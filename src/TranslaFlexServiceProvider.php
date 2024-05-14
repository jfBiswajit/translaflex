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
        if (App::isLocal()) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
            Livewire::component('tanslaflex::create-translation', CreateTranslationComponent::class);
            $this->loadViewsFrom(__DIR__ . '/../resources/views', 'translaflex');

            if ($this->app->runningInConsole()) {
                $this->commands(PublishTranslaFlex::class);
            }
        }
    }
}
