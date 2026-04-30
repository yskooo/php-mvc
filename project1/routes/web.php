<?php

use App\Http\Controllers\CalculateController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

    Route::get('/', [PageController::class, 'welcome']);
    Route::view('/assignment', 'assignment');

    Route::get('/home/{id}/{name}', [PageController::class, 'home'])->name('home');

    Route::get('/aboutMe/{id}/{name}', [PageController::class, 'about'])->name('about');

    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

    Route::get('compute', [CalculateController::class, 'index']);


    Route::group(['prefix' => 'user'], function(){
        Route::get(uri: '/{id}', action: [UserController::class, 'indexUserById']);

        Route::get(uri: '/add/{id}', action: [UserController::class, 'addUserById']);

        Route::get(uri: '/delete/{id}', action: [UserController::class, 'deleteUserById']);

        Route::get('/edit/{id}', action: [UserController::class, 'editUserById']);
    });

    Route::fallback([PageController::class, 'fallback']);

    Route::get('compute/{num1}/{num2}', [CalculateController::class, 'index'])->name('compute');
