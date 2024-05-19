<?php

use Illuminate\Support\Facades\Route;
use JfBiswajit\TranslaFlex\Controllers\CreateTranslationController;

Route::middleware(config('translaflex.is_auth_required') ? ['web', 'auth'] : ['web'])
    ->prefix('translaflex')
    ->group(function () {
        Route::get('create', CreateTranslationController::class);
    });
