<?php

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

Route::get('/home', [\App\Http\Controllers\TheController::class, 'showHomePage']);
Route::get('/search',[\App\Http\Controllers\TheController::class,'viewPageSearch']);
Route::get('/layout', [\App\Http\Controllers\TheController::class, 'showLayoutPage']);
Route::get('/edituser', [\App\Http\Controllers\TheController::class, 'edituser'])->middleware('auth');
Route::put('/updateuser', [\App\Http\Controllers\TheController::class, 'updateuser'])->middleware('auth');;

Route::get('/managegame', [\App\Http\Controllers\TheController::class, 'showManageGamePage'])->middleware('secure');
Route::get('/editgenre{editgenre}',[\App\Http\Controllers\ManageGameController::class,'editgenre'])->name('genres.edit')->middleware('secure');
Route::put('/updategenre{updategenre}',[\App\Http\Controllers\ManageGameController::class, 'updategenre'])->name('genres.update')->middleware('secure');
Route::get('/addgame', [\App\Http\Controllers\ManageGameController::class, 'showAddGame'])->name('games.add')->middleware('secure');
Route::post('/addgame',[\App\Http\Controllers\ManageGameController::class, 'create'])->name('games.create')->middleware('secure');
Route::get('/edit{editgame}',[\App\Http\Controllers\ManageGameController::class, 'editgame'])->name('games.edit')->middleware('secure');
Route::put('/{updategame}',[\App\Http\Controllers\ManageGameController::class, 'updategame'])->name('games.update')->middleware('secure');
Route::delete('/delete{deletegame}',[\App\Http\Controllers\ManageGameController::class,'deletegame'])->name('games.delete')->middleware('secure');
Route::get('/managegenre', [\App\Http\Controllers\TheController::class, 'showManageGenrePage'])->middleware('secure');
Route::get('/login',[\App\Http\Controllers\UserController::class, 'showLoginPage'])->middleware('guest');
Route::post('/login',[\App\Http\Controllers\UserController::class, 'login']);
Route::get('/logout',[\App\Http\Controllers\UserController::class, 'logout']);
Route::get('/registration',[\App\Http\Controllers\RegisterController::class, 'showRegistrationPage'])->middleware('guest');
Route::post('/registration',[\App\Http\Controllers\RegisterController::class, 'store']);
Route::get('{detailgame}',[\App\Http\Controllers\TheController::class,'detail'])->name('games.detail');


