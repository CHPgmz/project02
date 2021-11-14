<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;


class InventarioController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only('inventario', 'insertIventario', 'invRegistradas', 'invEliminar');

    }

    public function inventForm(){
            return view('inventario.inventario_form');
    }

    public function insertIventario(Request $request)
    {
        $request->validate([
            //'id_user' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'fecha' => 'required',
            //'fecha' => 'required',
        ]);

        $newIn = new App\Models\Inventarios;
        $newIn->descripcion = $request->descripcion;
        $newIn->cantidad = $request->cantidad;
        $newIn->fecha = $request->fecha;
        $newIn->save();

        return back();
    }

    public function invRegistradas()
    {
        $invList = App\Models\Inventarios::paginate(10);

        return view('inventario.inventario_todo', compact('invList'));
    }

    public function invEliminar($id)
    {
        $invElim = App\Models\Inventarios::find($id);
        $invElim->delete();

        return back();
    }
}
