<?php

use App\Controllers\CartController;
use App\Controllers\CategoriesController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\ProductsController;
use App\Controllers\UserController;
use App\Controllers\SignupController;
use PROJECT\HTTP\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/store', [SignupController::class, 'store']);
Route::get('/verify', [SignupController::class, 'verification']);
Route::post('/check-auth-code', [SignupController::class, 'checkAuthCode']);
Route::post('/resend-auth-code', [SignupController::class, 'resendAuthCode']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/aboutUs', [HomeController::class, 'aboutUs']);
Route::get('/contactUs', [HomeController::class, 'contactUs']);
Route::get('/user/profile', [UserController::class, 'profile']);
Route::get('/user/settings', [UserController::class, 'settings']);
Route::get('/categories/aloe-vera-farmers', [CategoriesController::class, 'aloe_vera_farmers']);
Route::get('/categories/buy-aloe-vera-leaves', [CategoriesController::class, 'buy_aloe_vera']);
Route::get('/categories/buy-aloe-vera-extract', [CategoriesController::class, 'buy_aloe_vera_extract']);
Route::get('/categories/aloe-vera-benefits', [CategoriesController::class, 'aloe_vera_benefits']);
// Route::get('/categories/aloe-vera-applications', [CategoriesController::class, 'aloe_vera_applications']);
Route::post('/categories/farmers-upload', [CategoriesController::class, 'farmers_upload']);
Route::get('/products/page', [ProductsController::class, 'page']);
Route::post('/cart/add', [CartController::class, 'add']);
Route::get('/cart/items', [CartController::class, 'items']);
Route::get('/cart/count', [CartController::class, 'count']);
Route::get('/cart/delete', [CartController::class, 'delete']);
Route::get('/ar', [HomeController::class, 'ar']);
