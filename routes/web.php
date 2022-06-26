<?php

use App\Http\Controllers\Admin\CategoryController;
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
Route::get('/', function () {
    return view('log_in');
});


Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin');
    Route::resource('category', CategoryController::class);

});
