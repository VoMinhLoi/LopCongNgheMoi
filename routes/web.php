<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('form-login',[AuthController::class,'getFormLogin'])->name('get_form_login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('form-register',[AuthController::class,'getFormRegister'])->name('get_form_register');
Route::post('register',[AuthController::class,'register'])->name('register');

Route::group(['prefix'=>'customers'],function(){
    Route::get('/create',[CustomerController::class,'create']);
    Route::get('',[CustomerController::class,'index'])->name('customers.index');
    Route::post('',[CustomerController::class,'insert'])->name('customers.insert');
    Route::get('/{customer}',[CustomerController::class,'show'])->name('customer.show');
    Route::get('/edit/{customer}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/update/{customer}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/delete/{customer}',[CustomerController::class,'delete'])->name('customer.delete');
});