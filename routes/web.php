<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('localization')
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])
            ->name('client.home');

        Route::view('/about-us', 'client.about')
            ->name('client.about');

        Route::view('/services', 'client.services')
            ->name('client.services');

        Route::view('/projects', 'client.projects')
            ->name('client.projects');

        Route::view('/blog', 'client.blog')
            ->name('client.blog');

        Route::view('/blog/{slug}', 'client.blog-show')
            ->name('client.blog.show');

        Route::view('/contact', 'client.contact')
            ->name('client.contact');
    });
