<?php

use App\Http\Controllers\Admincontroller;
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




//admin
Route::get('/',[Admincontroller::class,'/']);

Route::get('dashboard', [Admincontroller::class, 'dashboard']);

Route::get('admin/login', [Admincontroller::class, 'adminlogin']);
Route::post('admin/login', [Admincontroller::class, 'cekadminlogin']);
Route::post('idk', [Admincontroller::class, 'cekadminlogin']);

Route::get('admin/datasiswa', [Admincontroller::class, 'datasiswa']);
Route::post('admin/datasiswa', [Admincontroller::class, 'cekdatasiswa']);

Route::get('admin/datapetugas', [Admincontroller::class, 'petugas']);
Route::post('admin/datapetuigas', [Admincontroller::class, 'cekpetugas']);

Route::get('admin/datakelas', [Admincontroller::class, 'kelas']);
Route::post('admin/datakelas', [Admincontroller::class, 'cekkelas']);

Route::get('admin/dataspp', [Admincontroller::class, 'spp']);
Route::post('admin/dataspp', [Admincontroller::class, 'cekspp']);





