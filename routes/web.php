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
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
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


//LOGIN ROUTES
Route::get('/', function () { return view('welcome' );})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])
->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');
Route::get('/login', [SessionsController::class, 'create'])
->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');
Route::get('/logout', [essionsController::class, 'destroy'])
->name('login.destroy');


Route::post('/register',[UsuariosController::class,'validar'])->name('validar');
Route::get('principal',[UsuariosController::class,'principal'])->name('principal');

Route::get('/inicio', [\App\Http\Controllers\inicio::class, 'index']);

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
Route::post('/store', [UsuarioController::class, 'store'])->name('store');
Route::get('/fetch-all', [UsuarioController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [UsuarioController::class, 'edit'])->name('edit');
Route::post('/update', [UsuarioController::class, 'update'])->name('update');
Route::post('/delete', [UsuarioController::class, 'delete'])->name('delete');