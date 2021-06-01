<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SpotlightController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminDoctorController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\HomeController;
use Faker\Guesser\Name;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/register',[OtentikasiController::class,'register'])->name('register');
Route::post('/register',[OtentikasiController::class,'pastregister']);
Route::get('/login',[OtentikasiController::class,'login'])->name('login');
Route::post('/login',[OtentikasiController::class,'pastlogin']);
Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/admin',[AdminIndexController::class,'dashboard'])->name('admin');
    // Route::get('home', [HomeController::class, 'index'])->name('home');
    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('user', AdminUserController::class);
    Route::resource('doctor', AdminDoctorController::class);
    
});

Route::get('/payment',[PaymentController::class,'index']);
Route::get('/spotlight',[SpotlightController::class,'index']);
Route::get('/story',[StoryController::class,'index']);
// Route::get('/user',[AdminUserController::class,'index']);
// Route::post('/user/create',[AdminUserController::class,'create']);
// Route::post('/user',[AdminUserController::class,'store']);
// Route::get('/user/{user}',[AdminUserController::class,'show']);
// Route::delete('/user/{user}',[AdminUserController::class,'destroy']);
// Route::patch('/user/{user}/edit',[AdminUserController::class,'edit']);
// Route::patch('/user/{user}',[AdminUserController::class,'update']);
Route::get('/article',[AdminArticleController::class,'index']);


