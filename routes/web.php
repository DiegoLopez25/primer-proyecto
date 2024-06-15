<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer/create',[CustomerController::class,'create']);
Route::get('/customer/edit',[CustomerController::class,'edit']);
Route::get('/customer/show/{id}',[CustomerController::class,'show']);


