<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Ruta raiz y GeneralController
|--------------------------------------------------------------------------
|
| Ruta Raiz
|
*/

Route::get('/', [GeneralController::class, 'raiz'])->name('raiz');

/*
|--------------------------------------------------------------------------
| Rutas de Login y Registro
|--------------------------------------------------------------------------
|
| Rutas para generar el login y registro de usuarios.
|
*/

Route::post('/registro', [UsuariosController::class, 'guardar'])->name('registro.guardar');

Route::post('/login', [UsuariosController::class, 'ingresar'])->name('login.ingresar');

Route::get('/registro', [UsuariosController::class, 'create'])->middleware('guest')->name('registro');

Route::get('/login', [UsuariosController::class, 'view'])->middleware('guest')->name('login');

Route::get('/logout', [UsuariosController::class, 'destroy'])->middleware('auth')->name('login.destroy');

/*
|--------------------------------------------------------------------------
| Routes GeneralController
|--------------------------------------------------------------------------
|
| Rutas del controlador general para las vistas
|
*/

Route::get('/index', [GeneralController::class, 'index'])->middleware('auth')->name('index');

Route::get('/contacto', [GeneralController::class, 'contacto'])->middleware('auth')->name('contacto');

Route::get('/acerca', [GeneralController::class, 'acerca'])->middleware('auth')->name('acerca');

/*
|--------------------------------------------------------------------------
| Rutas del correo
|--------------------------------------------------------------------------
|
| Rutas para enviar correos a los usuarios.
|
*/

Route::post('/mail', [MailController::class, 'getMail'])->name('mail');
