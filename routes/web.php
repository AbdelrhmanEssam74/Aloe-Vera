<?php

use App\Controllers\CategoriesController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\UserController;
use App\Controllers\SignupController;
use PROJECT\HTTP\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/store', [SignupController::class, 'store']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/aboutUs', [HomeController::class, 'aboutUs']);
Route::get('/contactUs', [HomeController::class, 'contactUs']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/settings', [UserController::class, 'settings']);
Route::get('/categories/aloe-vera-farmers', [CategoriesController::class, 'aloe_vera_farmers']);