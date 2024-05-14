<?php

use Illuminate\Support\Facades\Route;
use JfBiswajit\TranslaFlex\Controllers\CreateTranslationController;

Route::middleware(['web'])
    ->prefix('translaflex')
    ->group(function () {
        Route::get('create', CreateTranslationController::class);
    });
