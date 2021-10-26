<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



Route::get('/', [PagesController::class, 'inicio'])->name('inicio');

//Route::get('fotos')   Es el nombre del archivo que se encuentra en la carpeta vista
//[PagesController::class, 'fotos']   Este el nombre de la funcion que se encuentra en el controlador
//name('nombre)   Es para poder utilzarlo en el href

Route::get('fotos', [PagesController::class, 'fotos'])->name('foto');

//Route::get('home', [PagesController::class, 'home'])->name('principal');

Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('about');

Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name('pages.detalle');


///Rutas para las ventas
Route::get('inicio_ventas', [PagesController::class, 'inicioVentas'])->name('ventas');

Route::get('form', [PagesController::class, 'formulario'])->name('formulario.venta');

Route::post('form', [PagesController::class, 'insertVenta'])->name('venta.insertar');
