<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/building',[testController::class,'index']);
Route::get('/building/{room}',[TestController::class,'test']);