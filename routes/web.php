<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;
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



// admin
Route::get('/login' , [AdminController::class , 'login'])->name('login');
Route::middleware('auth')->get('/administrator' , [AdminController::class , 'show']);
Route::get('/administrator/blog' , [BlogController::class , 'index']);
Route::get('/administrator/blog/create' , [BlogController::class , 'create']);
Route::post('/administrator/blog/store' , [BlogController::class , 'store']);
Route::get('/blog/{blog}/edit' , [BlogController::class , 'edit']);
Route::patch('/blog/{blog}/update' , [BlogController::class , 'update']);








// main
Route::get('/',[HomeController::class , 'show']);
Route::get('/blog' ,[BlogController::class , 'show']);
Route::get('/blog/{blog}' , [BlogController::class , 'post']);

