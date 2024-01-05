<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AgronomyController;

Route::resource('alluser', 'UserController');
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/service', [PagesController::class, 'service'])->name('service');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/register', [PagesController::class, 'register'])->name('register');

Route::post('/registeruser', [AuthController::class, 'storeuser'])->name('user.storeuser');
Route::post('/loginuser', [AuthController::class, 'loginuser'])->name('user.loginuser');
Route::get('/alluser', [UserController::class, 'showAll'])->name('user.showAll');

Route::get('/users/edit/{user}', [UserController::class, 'showEdit'])->name('user.editing');
Route::put('/updateuser/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/destroyUser/{user}', [UserController::class, 'destroyUser'])->name('user.destroyUser');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/farmerform', [PagesController::class, 'farmerForm'])->name('farmerform');
    Route::post('/farmerform', [PagesController::class, 'submitFarmerForm'])->name('farmerform.submit');
    Route::get('/farmerform/update/{productId}', [FarmerController::class, 'showUpdateForm'])->name('farmerform.update');
    Route::post('/farmerform/update/{productId}', [FarmerController::class, 'updateProduct']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

   Route::get('/agronomyform', [AgronomyController::class, 'Agronomy'])->name('auth.agronomyform');

// Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/all-users', [AdminDashboardController::class, 'allUsers'])->name('admin.allUsers');
    Route::get('/admin/Productlist', [AdminDashboardController::class, 'Productlist'])->name('admin.Productlist');
    Route::get('/admin/message', [AdminDashboardController::class, 'message'])->name('admin.message');
    Route::get('/admin/rabuser', [AdminDashboardController::class, 'rabuser'])->name('admin.rabuser');
    Route::get('/admin/agronomy', [AdminDashboardController::class, 'agronomy'])->name('admin.agronomy');
    Route::get('/admin/team', [AdminDashboardController::class, 'team'])->name('admin.team');
    Route::get('/admin/settings', [AdminDashboardController::class, 'settings'])->name('admin.settings');
// });


