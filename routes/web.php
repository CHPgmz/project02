<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InventarioController;
use Dompdf\Dompdf;



Route::get('/', [PagesController::class, 'homePage'])->name('inicio');
Route::get('home', [PagesController::class, 'homePage'])->name('home');

//
//Detalle de la venta
//Route::get('/venta_detalle/{id}', [PagesController::class, 'ventaDetalle'])->name('ventas.detalle');

//eliminar venta
Route::delete('/delete/{id}', [PagesController::class, 'ventaEliminar'])->name('eliminar.venta');

//lista de todas las ventas
Route::get('ventas', [PagesController::class, 'ventasRegistradas'])->name('ventas');

//editar venta
Route::get('/editar/{id}', [PagesController::class, 'editarVenta'])->name('editar.venta');
Route::post('/editar/{id}', [PagesController::class, 'updateVenta'])->name('venta.update');

//Formualario de la venta
Route::get('form', [PagesController::class, 'formulario'])->name('formulario.venta');

Route::post('/form', [PagesController::class, 'insertVenta'])->name('venta.insertar');

Auth::routes();

Route::get('profile', [PagesController::class, 'profileUser'])->name('perfil.user');

//Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



///Inventaio
//
//
Route::get('inventario', [InventarioController::class, 'invRegistradas'])->name('inventario.home');

Route::get('invForm', [InventarioController::class, 'inventForm'])->name('inventario.form');

Route::delete('/eliminar/{id}', [InventarioController::class, 'invEliminar'])->name('inv.eliminar');

Route::post('/invent', [InventarioController::class, 'insertIventario'])->name('inv.insert');

////Reportes

Route::get('reporte', [PagesController::class, 'reporteV'])->name('reporte.venta');

Route::get('reporteIn', [InventarioController::class, 'reporteIvt'])->name('reporte.inventario');





//Route::get('fotos')   Es el nombre del archivo que se encuentra en la carpeta vista
//[PagesController::class, 'fotos']   Este el nombre de la funcion que se encuentra en el controlador
//name('nombre)   Es para poder utilzarlo en el href

// Route::get('fotos', [PagesController::class, 'fotos'])->name('foto');

// //Route::get('home', [PagesController::class, 'home'])->name('principal');

// Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('about');

// Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name('pages.detalle');


///Rutas para las ventas
