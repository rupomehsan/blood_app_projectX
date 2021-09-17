<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;


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
Route::redirect('/', '/login', 301);

Route::middleware('guest')->group(function () {
    Route::get('/login',[AuthController::class,'loginView'])->name('login');
    Route::post('/login',[AuthController::class,'login'])->name('login.create');
    Route::get('/registration',[AuthController::class,'registerView'])->name('registration.index');
    Route::post('/registration',[AuthController::class,'register'])->name('registration.store');
    Route::get('/recovery-password',[AuthController::class,'passwordRecover'])->name('password.recover');
});

Route::middleware('auth')->group(function () {

    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/admin/post/{id}',[DashboardController::class,'post'])->name('dashboard.post');
    Route::post('/admin/post/apply',[PostController::class,'postapply'])->name('dashboard.post.apply');
    Route::get('/admin/history',[DashboardController::class,'history'])->name('dashboard.history');
    Route::get('/admin/profile',[DashboardController::class,'profile'])->name('dashboard.profile');
    Route::get('/admin/post',[DashboardController::class,'postCreate'])->name('dashboard.post.create');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   

});
