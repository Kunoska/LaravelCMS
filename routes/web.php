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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['web', 'auth'])->prefix('dashboard')->group(function () {

    // Users
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}',[App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

    //Settings
    Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('settings.index');
    Route::get('/settings/create', [App\Http\Controllers\SettingController::class, 'create'])->name('settings.create');
    Route::post('/settings', [App\Http\Controllers\SettingController::class, 'store'])->name('settings.store');
    Route::get('/settings/{setting}/edit', [App\Http\Controllers\SettingController::class, 'edit'])->name('settings.edit');
    Route::put('/settings/{setting}', [App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');
    Route::delete('/settings/{setting}', [App\Http\Controllers\SettingController::class, 'destroy'])->name('settings.destroy');





// GET /users - to UserController - index [name users.index]
// GET /users/create - to UserController - create [name users.create]
// POST /users - to UserController - store [name users.store]
// GET /users/{user} - to UserController - show [name users.show]
// GET /users/{user}/edit - to UserController - edit [name users.edit]
// PUT /users/{user} - to UserController - update [name users.update]
// DELETE /users/{user} - to UserController - destroy [name users.destroy]

});

