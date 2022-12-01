<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AuthController;

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
    return view('welcome');
});



Route::group(['prefix' => 'home/'], function () {
    Route::get('/homepage', [HomeController::class, 'homepageView'])->name('homepageView'); 
    Route::get('/detail', [HomeController::class, 'detailView'])->name('detailView'); 
});

Route::prefix('/admin')->middleware('usermiddle')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'dashboardView'])->name('dashboardView'); 
    Route::get('/view_document', [AdminController::class, 'documentView'])->name('documentView');
    Route::get('/view_roles', [RoleController::class, 'viewRole'])->name('roleView');
});

Route::group(['prefix' => 'auth/'], function () {
    Route::get('/login',[AuthController::class, 'loginView'])->name('loginView')->middleware('notusermiddle'); 
    Route::post('/loginPost',[AuthController::class, 'authenticate'])->name('loginPost');
});

Route::get('/logout', [AuthController::class, 'logout']);

