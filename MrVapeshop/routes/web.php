<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\userController;


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
//route for retrieving data
Route::get('/products',[productsController::class,'prod']);

//route for inserting record
Route::post('/products',[productsController::class,'insertProduct']);

//route for delete record
Route::get('/products/{prod_id}',[productsController::class,'deleteProduct']);

Route::get('/home', function () {
    return view('home');
});

//route for retrieving salesdata
Route::get('/sales',[salesController::class,'sales']);


//route for delete salesrecord
Route::get('/sales/{sales_id}',[salesController::class,'deleteSales']);


//route for retrieving data
Route::get('/register',[userController::class,'register']);

//route for inserting user record
Route::post('/register',[userController::class,'insertUser']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

