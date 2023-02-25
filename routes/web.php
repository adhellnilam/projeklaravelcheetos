<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\landingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home',[landingController::class, 'landingpage'])->name('landingpage');
Route::get('/home',[landingController::class, 'home'])->name('home');
Route::get('/about',[landingController::class, 'about'])->name('about');
Route::get('/contact',[landingController::class, 'contact'])->name('contact');
Route::get('/product',[landingController::class, 'product'])->name('product');
Route::get('/transaction',[landingController::class, 'transaction'])->name('transaction');
Route::post('/transaction',[landingController::class, 'transactionStore'])->name('transactionStore');

Route::get('/dashboard',[dashboardcontroller::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard',[dashboardcontroller::class, 'home'])->name('dashboard');

//product
Route::get('/dashboard/product',[productcontroller::class, 'index']);
Route::get('/dashboard/product/add_data',[productcontroller::class, 'create']);
Route::post('/dashboard/product/add_data',[productcontroller::class,'store']);
Route::get('/dashboard/product/detail/{id}',[productcontroller::class,'show']);
Route::delete('/dashboard/product/destroy/{id}',[productcontroller::class,'destroy']);
Route::get('/dashboard/product/update_data/{id}',[productcontroller::class,'edit']);
Route::put('/dashboard/product/update_data/{id}',[productcontroller::class,'update']);

//useradmin
Route::get('/dashboard/useradmin',[UserController::class, 'index']);
Route::get('/dashboard/useradmin/add_data',[UserController::class, 'create']);
Route::post('/dashboard/useradmin/add_data',[UserController::class,'store']);
Route::get('/dashboard/useradmin/detail/{id}',[UserController::class,'show']);
Route::delete('/dashboard/useradmin/destroy/{id}',[UserController::class,'destroy']);
Route::get('/dashboard/useradmin/update_data/{id}',[UserController::class,'edit']);
Route::post('/dashboard/useradmin/update_data/{id}',[UserController::class,'update']);

//contact
Route::get('/dashboard/contact',[contactcontroller::class, 'index']);
Route::post('/dashboard/contact/add_data',[contactcontroller::class,'store']);
Route::get('/dashboard/contact/detail/{id}',[contactcontroller::class,'show']);
Route::delete('/dashboard/contact/destroy/{id}',[contactcontroller::class,'destroy']);

//transaction
Route::get('/dashboard/transaction',[transactionController::class, 'index']);
Route::get('/dashboard/transaction/add_data',[transactionController::class, 'create']);
Route::post('/dashboard/transaction/add_data',[transactionController::class,'store']);
Route::get('/dashboard/transaction/detail/{id}',[transactionController::class,'show']);
Route::delete('/dashboard/transaction/destroy/{id}',[transactionController::class,'destroy']);
Route::get('/dashboard/transaction/update_data/{id}',[transactionController::class,'edit']);
Route::put('/dashboard/transaction/update_data/{id}',[transactionController::class,'update']);

//login register admin
Route::get('/loginAdmin', [AuthController::class, 'login'])->name('loginAdmin');
Route::get('/registerAdmin', [AuthController::class, 'register'])->name('registerAdmin');
Route::post('/registerAdmin', [AuthController::class, 'registerStore'])->name('registerPost');
Route::post('/loginAdmin', [AuthController::class, 'loginStore'])->name('loginPost');
Route::get('/logoutAdmin', [AuthController::class, 'logoutAdmin'])->name('logoutAdmin');

//login register user
Route::get('/', [LoginController::class, 'loginUser'])->name('loginUser');
Route::get('/registerUser', [LoginController::class, 'registerUser'])->name('registerUser');
Route::post('/registerUser', [LoginController::class, 'registerUserStore'])->name('registerUserPost');
Route::post('/', [LoginController::class, 'loginUserStore'])->name('loginUserPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('auth/{provider}', [LoginController::class,'redirectToProvider']);
Route::get('auth/{provider}/callback', [LoginController::class,'handleProviderCallback']);

//export
Route::get('/product/export_excel',[productcontroller::class, 'export_excel']);
Route::get('/transaction/export_excel',[transactionController::class, 'exportexcel']);
Route::get('/transaction/export_excel',[UserController::class, 'export']);
Route::get('/contact/export_excel',[contactcontroller::class, 'excel']);