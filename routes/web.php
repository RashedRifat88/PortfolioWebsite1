<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', 'PagesController@index');

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/admin/dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');
//Route::get('/admin/main', [PagesController::class, 'main'])->name('admin.main');
Route::get('/admin/main', [MainPagesController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [MainPagesController::class, 'update'])->name('admin.main.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
