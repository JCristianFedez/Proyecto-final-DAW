<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SugerenciasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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
// Route::pattern('user', '\d+');


Route::get("/", HomeController::class)->name("home");

// Administracion de usuarios

// Route::get("users", [UserController::class, "index"])->name("users.index");

// Route::get("users/create", [UserController::class, "create"])->name("users.create");

// // Ruta para almacenar nuevos usuarios
// Route::post("users", [UserController::class, "store"])->name("users.store");

// Route::get('users/{user}', [UserController::class, "show"])->name("users.show");

// Route::get("users/{user}/edit", [UserController::class, "edit"])->name("users.edit");

// Route::put("users/{user}", [UserController::class, "update"])->name("users.update");

// Route::delete('users/{user}', [UserController::class, "destroy"])->name("users.destroy");

// Todas las lineas superiores son iguales a esta
Route::resource('users', UserController::class)->parameters(["users" => "user"])->names("users");


Route::view('nosotros', 'nosotros')->name("nosotros");

Route::get("sugerencias", [SugerenciasController::class, "index"])->name("sugerencias.index");

Route::post("sugerencias",[SugerenciasController::class, "store"])->name("sugerencias.store");