<?php

use App\Http\Controllers\PagesController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FarmerController;

Route::resource('alluser', 'UserController');
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/service', [PagesController::class, 'service'])->name('service');
// Route::get('/products', [PagesController::class, 'products'])->name('service');

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
Route::get('/farmerDashboard', [FarmerController::class, 'farmerForm'])->name('farmerform');
Route::post('/farmerform', [FarmerController::class, 'submitForm'])->name('farmerform.submit');
// Route::get('/allproducts', [PagesController::class, 'showAllProducts'])->name('allproducts');

Route::get('/products/filter', [FarmerController::class, 'filterCategory'])->name('products.filter');
Route::get('/products/search', [FarmerController::class,'searchFilter'])->name('products.search');
Route::get('/farmerContact/{products}', [FarmerController::class, 'showContactDetails'])->name('products.contacting');

// routes/web.php

Route::delete('/farmerform/delete/{product}', [FarmerController::class, 'destroyProduct'])->name('product.deleting');
Route::get('/farmerform/getupdate/{product}', [FarmerController::class, 'showUpdateForm'])->name('farmer.editing');
Route::put('/farmerform/update/{product}', [FarmerController::class, 'updateProduct'])->name('product.updateProduct');
// routes/web.php
