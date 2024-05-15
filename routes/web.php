<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Admin";
//     return view('about',['nama' => $nama]);
// });



Route::get('/',[PagesController::class,'home']);
Route::get('/about',[PagesController::class,'about']);

Route::get('/mahasiswa',[MahasiswaController::class,'index']);

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'pastlogin']);

Route::get('/register', [AuthController::class,'register']);
Route::post('/register', [AuthController::class,'pastregister'])->name('register');