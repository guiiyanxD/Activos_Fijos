<?php

use App\Http\Controllers\RubroController;
use App\Http\Controllers\ProveedoreController;
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
/*Esta funcion retorna la ruta de la vista de la pagina welcom*/
//llama a la pagina index principal pero usando controldores

//Route::post('rubros',[RubroController::class,'store'])->name('rubros.store');
//Route::get('/', HomeController::class ); 

//Route::get('rubros',[RubroController::class,'index']);



//esto me crea todas las rutas necesarias para rubro automaticamente
Route::resource('rubros',RubroController::class);
//esto me crea todas las rutas necesarias para proveedores automaticamente
Route::resource('proveedores',ProveedoreController::class);
 
//php artisan r:l   para ver todas las rutas creadas