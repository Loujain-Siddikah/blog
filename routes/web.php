<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Front\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/land2', function () {
    return view('land');
});

Route::get('/lol', function () {
    return view('hello');
});

// Route::get('/pass', function () {
//     // $date = [];
//     $date=['id' => 5, 'name' => 'lol'];
//     return view('hello',$date);
// });

// Route::get('/lolo{name}', [UserController::class, 'showUserName']);
Route::get('/lolo', [FirstController::class, 'myLove']);
Route::get('/lolooff', [FirstController::class, 'myOff']);

Route::group(['middleware' => 'auth'] ,function(){
    Route::get('show',[UserController::class, 'showUserName']);
    Route::get('del',[UserController::class, 'showUserName']);
    Route::get('exp',[UserController::class, 'showUserName']);
    Route::get('need',[UserController::class, 'showUserName']);
});
Route::resource('news',NewsController::class);




// Route::get('/',[PagesController::class, 'index']);
// Route::view("/lolo",'hello');
Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');