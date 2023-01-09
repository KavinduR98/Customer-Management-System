<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
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
// Route::resource('customers',CustomerController::class);
Route::get('/', function () {
    return view('customer.cus_signin');
});

Route::get('/register', [AdminController::class, 'signup']);
Route::get('/login', [AdminController::class, 'signin']);
Route::post('/user_login', [AdminController::class, 'check_login']);
Route::post('/user_create', [AdminController::class, 'user_create']);
Route::get('/customer_dashboard', [CustomerController::class, 'index']);
Route::get('/customer_register', [CustomerController::class, 'create']);
Route::get('/get_all_cus_data', [CustomerController::class, 'get_all_cus_data']);
Route::post('/save_cus_det', [CustomerController::class, 'store']);
// Route::post('/store_customer_info', [CustomerController::class, 'store']);

// Route::get('get_all_cus_data', 'CustomerController@get_all_cus_data');
// Route::get('/get_sample', [CustomerController::class, 'get_sample']);