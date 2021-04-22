<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\planController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\CartController;





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



Route::get('/toy' , function()
{
  return view('toys.toy');
});
Route::get('/' , function()
{
  return view('home');
});

Route::get('/sucess' , function()
{
  return view('toys.sucess');
});
// Route::get('/plans' , function()
// {
//   return view('exampleplan');
// });

Route::resource('/plans' , planController::class);




// Route::get('/details/{id}' , [detailsController::class , 'show2']);

Route::resource('/details' , detailsController::class);


Route::resource('/details/cart' , CartController::class );



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();
//
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
// Auth::routes();
//
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
