<?php

use App\Http\Controllers\TypeUserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\MaquinaController;
use App\Http\Controllers\TypeMaquinaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProduccionController;
use App\Http\Controllers\ProductoProduccioneController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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


//REGISTER 
Route::get('/registro',  [RegisterController::class, 'show'])->name('registro.show');
Route::post('/registro', [RegisterController::class, 'registro'])->name('registro.registro');


//LOGIN 
Route::get('/',  [LoginController::class, 'show'])->name('login.show');
 Route::post('valida', [LoginController::class, 'valida'])->name('valida');


//LOGOUT
Route::get('/logout',  [LogoutController::class,'perform'])->name('logout.perform');




//

Route::get('/inicio', [\App\Http\Controllers\inicio::class, 'index'])->name('inicio');
Route::post('/inicio', [\App\Http\Controllers\inicio::class, 'index'])->name('inicio');

Route::resource('typeuser', TypeUserController::class);
Route::resource('empresa', EmpresaController::class);
Route::resource('subcategoria', SubcategoriaController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('typemaquina', TypeMaquinaController::class);
Route::resource('usuario', UsuarioController::class);
Route::resource('maquina', MaquinaController::class);
Route::resource('producto', ProductoController::class);
Route::resource('produccion', ProduccionController::class);
Route::resource('productoproduccion', ProductoProduccioneController::class);
 


//AJAX-CRUD ROUTES
