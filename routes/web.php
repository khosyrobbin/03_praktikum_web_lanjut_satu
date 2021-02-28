<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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
//     return view('welcome');
// });

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //1. Route biasa
// Route::get('/', function() {
//     return view('home');
// });
// //2. Route prefix
// Route::prefix('product')->group(function(){
//     Route::get('/product', [HomeController::class, 'product']);
// });
// //3. Route param
// Route::get('/news/{tittle}', [HomeController::class, 'news']);
// //4. route prefix
// Route::prefix('program')->group(function(){
//     Route::get('/program',[HomeController::class, 'program']);
// });
// //5. Route Biasa
// Route::get('/about-us', [HomeController::class, 'about']);
// //6. Route resource
// Route::resource('/contact-us', HomeController::class, [
//     'only' => ['contact']
// ]);

//Praktikum 2
Route::get('/', [HomeController::class, 'index']);

