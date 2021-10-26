<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    //
    public function inicio()
    {
        $ventasList = App\Models\Ventas::All();
        return view('pages.inicio_ventas', compact('ventasList'));
    }
    public function fotos()
    {
        return view('fotos');
    }

    public function home()
    {
        $users = App\Models\Login::All(); //Obtiene todos los datos en la base de datos
        return view('home', compact('users'));
    }

    public function detalle($id)
    {
        //return view('pages.detalle');
        $detail = App\Models\Login::findOrFail($id); //Obtiene solo los datos del id en la bd
        return view('pages.detalle', compact('detail'));
    }

    public function nosotros($nombre = null)
    {
        $equipo = ['Jose Alfredo', 'Damian'];
        return view('nosotros', compact('equipo', 'nombre'));
    }


    ///Todo lo relacionado con las ventas

    public function inicioVentas()
    {
        $ventasList = App\Models\Ventas::All();

        return view('pages.inicio_ventas', compact('ventasList'));
    }

    public function ventaDetalle($id)
    {
        $ventaD = App\Models\Ventas::findOrFail($id);
        return view('pages.venta_detalle', compact('ventaD'));
    }

    public function formulario()
    {
        return view('pages.form');
    }

    public function insertVenta(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'product' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'fecha' => 'required',
        ]);

        $newVenta = new App\Models\Ventas;
        $newVenta->id_user = $request->id_user;
        $newVenta->producto = $request->product;
        $newVenta->cantidad = $request->cantidad;
        $newVenta->precio = $request->precio;
        $newVenta->fecha = $request->fecha;
        $newVenta->save();

        return back();
    }

    public function ventaEliminar($id)
    {
        $ventaElim = App\Models\Ventas::find($id);
        $ventaElim->delete();

        return back();
    }
}
