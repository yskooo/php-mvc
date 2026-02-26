<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}/{name}', function ($id, $name) {
    return "<marquee><h1>Home pagers " . $id .  " " . $name ." </h1></marquee>";
});

Route::get('aboutMe', function () {
    return "About";
})->name('about');

Route::get('contact', function () {
    return "<a href = '". route('about') ."' > Go to About </a>";
});