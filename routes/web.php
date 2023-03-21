<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardInventarisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\StatusController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class, 'index' ])->middleware('auth');
Route::resource('/dashboard/inventarisasi',DashboardInventarisController::class)->middleware('auth');

Route::resource('/status',StatusController::class)->middleware('auth');

Route::get('/',function(){
    return view('template.halamanUtama.index');
});

Route::post('/logout',[LoginController::class, 'logout' ]);

Route::post('/login',[LoginController::class, 'authenticate' ]);
Route::get('/login',[LoginController::class, 'index' ])
            ->name('login')
            ->middleware('guest');

Route::post('/registrasi',[RegisController::class, 'store' ]);
Route::get('/registrasi',[RegisController::class, 'index' ])->middleware('guest');


