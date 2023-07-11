<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumnoController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::put("Usuarios/{id}", [UserController::class, 'update'])->name("update");



Route::middleware('permission:ver dashboard')->group(function(){
Route::resource('Usuarios', UserController::class)->names('Usuarios');
Route::resource('maestro', App\Http\Controllers\MaestroController::class);
Route::resource('clase', App\Http\Controllers\ClaseController::class);
Route::resource('alumno', App\Http\Controllers\AlumnoController::class);
});
Route::middleware('permission:ver dashboard')->group(function(){

    Route::resource('maestro', App\Http\Controllers\MaestroController::class);
    Route::resource('clase', App\Http\Controllers\ClaseController::class);
    Route::resource('alumno', App\Http\Controllers\AlumnoController::class);

    });
Route::middleware('permission:ver dashboard')->group(function(){

        Route::resource('maestro', App\Http\Controllers\MaestroController::class);
        Route::resource('clase', App\Http\Controllers\ClaseController::class);

        });




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
