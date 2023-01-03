<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthenticationController;
use App\Models\Product;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('navbar');
// });

Route::get('/',[HomeController::class , 'index']);
Route::get('/add',[HomeController::class , 'showAddPage']);
Route::post('/add',[ProductController::class , 'addMovie']);
Route::get('/update/{id}',[HomeController::class , 'showUpdatePage']);
Route::post('/update/{id}',[ProductController::class , 'updateProduct']);
Route::get('/detail/{id}',[HomeController::class , 'showDetailPage']);

Route::get('/profile',[HomeController::class , 'showProfilePage']);
Route::get('/category',[HomeController::class , 'showCategory']);
// Route::post('/profile',[ProductController::class , 'updateProfile']);
// Route::get('/profile',[HomeController::class , 'showProfilePage']);

Route::get('/login', [HomeController::class, 'showLoginPage']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::get('/register', [HomeController::class, 'showRegisterPage']);
Route::post('/register', [AuthenticationController::class, 'register']);

Route::get('/delete/{id}', [ProductController::class, 'deleteProduct']);

Route::get('/history',[ProductController::class , 'history']);
Route::get('/cart',[ProductController::class , 'cart']);
// Route::post('/admin', [HomeController::class, 'showAdminPage'])->middleware('Authorization');
