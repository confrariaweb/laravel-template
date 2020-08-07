<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\Template\Controllers')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::resource('templates', 'TemplateController');

    });