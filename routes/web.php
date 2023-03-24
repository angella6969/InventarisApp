<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardInventarisController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\userController;

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

Route::resource('/dashboard/kategori',KategoriController::class)->middleware('auth');

Route::resource('/dashboard/users',userController::class)->middleware('auth');

Route::resource('/dashboard/role',RoleController::class)->middleware('auth');

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


