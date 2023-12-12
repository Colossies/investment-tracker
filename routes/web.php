<?php

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

Route::get('/', [App\Http\Controllers\Controller::class, 'loginPage']);

Route::get('/login', [App\Http\Controllers\Controller::class, 'loginPage'])->name('login');
Route::get('/login/fail', [App\Http\Controllers\Controller::class, 'loginPageFail'])->name('login_fail');
Route::get('/register', [App\Http\Controllers\Controller::class, 'registerPage'])->name('register');
Route::get('/register/fail', [App\Http\Controllers\Controller::class, 'registerPageFail'])->name('register_fail');
Route::get('/logout', [App\Http\Controllers\login::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\Controller::class, 'home'])->name('home');
Route::get('/log/{page?}', [App\Http\Controllers\Controller::class, 'log'])->name('log');
Route::get('/summary/{page?}', [App\Http\Controllers\Controller::class, 'summary'])->name('summary');
Route::get('/invest', [App\Http\Controllers\Controller::class, 'invest'])->name('invest');

Route::post('/invest/post', [App\Http\Controllers\investment_controller::class,'post'])->name('post_invest');
Route::post('/login/post', [App\Http\Controllers\login::class,'checkLogin'])->name('login_submit');
Route::post('/register/post', [App\Http\Controllers\login::class,'register'])->name('register_submit');






/*
Archive
============
Route::get('/train', [App\Http\Controllers\web_controller::class,'home']);
Route::get('/train/{page}', [App\Http\Controllers\web_controller::class,'traffic'])
    ->where('page','home|publishers|game_companies|games')
    ->name('train.page');

Route::get('/train/{page}/{pagination}', [App\Http\Controllers\web_controller::class,'table_pagination'])
    ->where('page','home|publishers|game_companies|games')
    ->name('paginator');
Route::get('/form', [App\Http\Controllers\form_controller::class,'index']);
Route::post('/add', [App\Http\Controllers\form_controller::class,'add']);
*/