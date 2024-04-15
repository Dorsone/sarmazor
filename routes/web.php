<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'client.home')
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
