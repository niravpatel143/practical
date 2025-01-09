<?php

use Illuminate\Support\Facades\Route;
use App\Models\Page;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/{slug?}', function ($slug = null) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('welcome', ['page' => $page]);
});

