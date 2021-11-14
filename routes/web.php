<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightCotroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

// Route::get('/', function () {
//     return view('index');
// });

//Route::resource('products', 'ProductController');

// Route::get('/insert', function () {
//     return view('create');
// });


Route::get('/', [StudentController::class, 'index']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::post('/update/{id}', [StudentController::class, 'update']);


// Route::get('/create', [FlightCotroller::class, 'create']);
// Route::post('/store', [FlightCotroller::class, 'store']);
// Route::post('/show', [FlightCotroller::class, 'show']);
// Route::get('/edit/{id}', [FlightCotroller::class, 'edit']);
// Route::post('/update/{id}', [FlightCotroller::class, 'update']);
// Route::post('/delete/{id}', [FlightCotroller::class, 'delete']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);





Route::get('/logout', [RegisterController::class, 'logout']);



Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);


Route::post('/login', [SessionController::class, 'login']);


Route::get('/dashboard', [SessionController::class, 'admin']);
