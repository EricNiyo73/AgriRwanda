<?php

use App\Http\Controllers\PagesController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::resource('alluser', 'UserController');
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/service', [PagesController::class, 'service'])->name('service');
// Route::get('/product', [PagesController::class, 'product'])->name('product');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/register', [PagesController::class, 'register'])->name('register');


Route::post('/registeruser',[AuthController::class,'storeuser']) ->name('user.storeuser');
Route::post('/loginuser', [AuthController::class,'loginuser'])->name('user.loginuser');
Route::get('/alluser', [UserController::class,'showAll'])->name('user.showAll');

// Route::get('/showform', [UserController::class,'showEdit'])->name('user.editing');
Route::get('/users/edit/{user}', [UserController::class ,'showEdit'])->name('user.editing');
Route::put('/updateuser/{user}', [UserController::class,'update'])->name('user.update');
Route::delete('/destroyUser/{user}', [UserController::class,'destroyUser'])->name('user.destroyUser');






// In web.php
Route::get('/farmerform', [PagesController::class, 'farmerForm'])->name('farmerform')->middleware('guest');
Route::post('/farmerform', [PagesController::class, 'submitFarmerForm'])->name('farmerform.submit')->middleware('guest');


// routes/web.php


Route::get('/farmerform/update/{productId}', [FarmerController::class, 'showUpdateForm'])->name('farmerform.update')->middleware('guest');
Route::post('/farmerform/update/{productId}', [FarmerController::class, 'updateProduct'])->middleware('guest');