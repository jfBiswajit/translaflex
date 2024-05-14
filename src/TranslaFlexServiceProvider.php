<?php

namespace JfBiswajit\TranslaFlex;

use Illuminate\Support\ServiceProvider;
use JfBiswajit\TranslaFlex\Console\Command\PublishTranslaFlex;
use JfBiswajit\TranslaFlex\Livewire\Translations\CreateTranslationComponent;
use Livewire\Livewire;

class TranslaFlexServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'translaflex');
        Livewire::component('tanslaflex::create-translation', CreateTranslationComponent::class);

        if ($this->app->runningInConsole()) {
            $this->commands(PublishTranslaFlex::class);
        }
    }
}
