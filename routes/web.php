<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminDoctorController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SpotlightController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\KonsultasiController;

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
Route::get('/', function () {
    return view('user.index');
});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'pastregister']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'pastlogin']);


Route::group(['prefix'=>'doctor','middleware' => 'auth:doctor'],function () {
    Route::get('/konsultasi',[KonsultasiController::class,'index']);
    Route::get('/profile',[DoctorController::class,'index'])->name('profile');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

});
Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::group(['prefix'=>'admin','middleware' => 'admin'],function () {
        Route::get('/',[AdminIndexController::class,'dashboard'])->name('admin');
        Route::resource('user', AdminUserController::class);
        Route::resource('doctor', AdminDoctorController::class);
        Route::get('/article',[AdminArticleController::class,'index']);
        
    });
    Route::group(['prefix'=>'user','middleware' => 'user'],function () {
        // Route::get('user', [UserController::class, 'index'])->name('user'));
        Route::get('/profile',[UserController::class,'index']);
        Route::post('/profile',[UserController::class,'update']);
        Route::get('/payment',[PaymentController::class,'index']);
        Route::get('/spotlight',[SpotlightController::class,'index']);
        Route::get('/story',[StoryController::class,'index']);
    });
    
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
});

// Route::get('/user',[AdminUserController::class,'index']);
// Route::post('/user/create',[AdminUserController::class,'create']);
// Route::post('/user',[AdminUserController::class,'store']);
// Route::get('/user/{user}',[AdminUserController::class,'show']);
// Route::delete('/user/{user}',[AdminUserController::class,'destroy']);
// Route::patch('/user/{user}/edit',[AdminUserController::class,'edit']);
// Route::patch('/user/{user}',[AdminUserController::class,'update']);


