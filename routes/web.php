<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('auth.adminLogin');
// });

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login/user', 'loginCheck')->name('login.post');
    Route::post('/logout', 'logout')->name('logout');

});


Route::middleware('auth')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('home');
    Route::get('/view-users',[UserController::class,'ViewUsers'])->name('view-users');
    Route::get('/view-create-user',[UserController::class,'ViewCreateUser'])->name('view-create-user');
    Route::post('/create-user',[UserController::class,'CreateUser'])->name('create-user');

});
