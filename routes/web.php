<?php

use App\Models\Employee;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;

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

// dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth','hakakses:admin']], function(){
    

    Route::get('/tambahpegawai', [EmployeeController::class,'tambahpegawai'])->name('tambahpegawai');
    Route::post('/insertdata', [EmployeeController::class,'insertdata'])->name('insertdata');
    Route::get('/editdata/{id}', [EmployeeController::class,'editdata'])->name('editdata');
    // Route::post('/updatedata/{id}', [EmployeeController::class,'updatedata'])->name('updatedata');
    Route::put('/updatedata/{id}', [EmployeeController::class,'updatedata'])->name('updatedata');
    Route::get('/deletedata/{id}', [EmployeeController::class,'deletedata'])->name('deletedata');
    Route::get('/user', [UserController::class,'user'])->name('user');
    Route::get('/deleteuser/{id}', [UserController::class,'deleteuser'])->name('deleteuser');
});

Route::get('/pegawai', [EmployeeController::class,'pegawai'])->name('pegawai');
Route::get('/detaildata/{id}', [EmployeeController::class,'detaildata'])->name('detaildata');

// export pdf
Route::get('/exportpdf', [EmployeeController::class,'exportpdf'])->name('exportpdf');

Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('/proseslogin', [LoginController::class,'proseslogin'])->name('proseslogin');
Route::get('/register', [LoginController::class,'register'])->name('register');

// buat nyimpan di database
Route::post('/registeruser', [LoginController::class,'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

