<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'index']);

Route::get('/customers',[CustomerController::class,'index']);
Route::get('/customers/create',[CustomerController::class,'create']);
Route::get('/customers/edit',[CustomerController::class,'edit']);
Route::get('/customers/show/{id}',[CustomerController::class,'show']);
Route::post('/customers/store',[CustomerController::class,'store']);


