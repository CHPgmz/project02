<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('auth')->only('ventaDetalle', 'inicioVentas', 'homePage', 'updateVenta');
    }


    ///Todo lo relacionado con las ventas

    public function ventasRegistradas()
    {
        $ventasList = App\Models\Ventas::paginate(10);

        return view('pages.ventas', compact('ventasList'));
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
           
            'product' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
           
        ]);

        $fechaA = Carbon::now();

        $newVenta = new App\Models\Ventas;
        //$newVenta->id_user = $request->id_user;
        $userId = Auth::user()->id;
        $newVenta->id_user =  $userId;
        $newVenta->producto = $request->product;
        $newVenta->cantidad = $request->cantidad;
        $newVenta->precio = $request->precio;
        $newVenta->fecha = $fechaA->format('Y-m-d');
        $newVenta->save();

        return back();
    }

    public function ventaEliminar($id)
    {
        $ventaElim = App\Models\Ventas::find($id);
        $ventaElim->delete();

        return back();
    }

    public function editarVenta($id)
    {
        $venta = App\Models\Ventas::findOrFail($id);
        return view('pages.editar_venta', compact('venta'));
    }

    public function updateVenta(Request $request, $id)
    {

        $ventaUpd = App\Models\Ventas::findOrFail($id);
        $ventaUpd->id_user = $request->id_user;
        $ventaUpd->producto = $request->product;
        $ventaUpd->cantidad = $request->cantidad;
        $ventaUpd->precio = $request->precio;
        $ventaUpd->fecha = $request->fecha;
        $ventaUpd->save();

        return back();
    }

    public function homePage()
    {
        $ventasList = App\Models\Ventas::paginate(3);
        $fechaA = Carbon::now();
        //$fecha = $fechaA->format('d-m-Y');

        $venT = App\Models\Ventas::count('id');
        $ventS = App\Models\Ventas::sum('precio');
        return view('pages.home_page', compact('venT', 'ventS', 'fechaA', 'ventasList'));
    }
}





// public function fotos()
    // {
    //     return view('fotos');
    // }

    // // public function home()
    // // {
    // //     $users = App\Models\Login::All(); //Obtiene todos los datos en la base de datos
    // //     return view('home', compact('users'));
    // // }

    // public function detalle($id)
    // {
    //     //return view('pages.detalle');
    //     $detail = App\Models\Login::findOrFail($id); //Obtiene solo los datos del id en la bd
    //     return view('pages.detalle', compact('detail'));
    // }

    // public function nosotros($nombre = null)
    // {
    //     $equipo = ['Jose Alfredo', 'Damian'];
    //     return view('nosotros', compact('equipo', 'nombre'));
    // }
