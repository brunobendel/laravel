<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TestController;


Route::get('/',[EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test',[TestController::class,'index']); //Controller de teste