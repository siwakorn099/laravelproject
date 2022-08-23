<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backendController;

Route::get('/', [HomeController::class,'home']);
Route::get('about', [HomeController::class,'about']);
Route::get('service', [HomeController::class,'service']);
Route::get('contact', [HomeController::class,'contact']);
Route::get('login', [HomeController::class,'login']);
Route::get('product', function(){
    return"product page";
});
// backend route  
Route::get('backend/dashbord', [backendController::class,'dashbord']);