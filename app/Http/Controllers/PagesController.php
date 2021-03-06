<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use PDF;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use Dompdf\Dompdf;
use Hash;
use Validator;


include_once "../vendor/autoload.php";


class PagesController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('auth')->only('ventaDetalle', 'inicioVentas', 'homePage', 'updateVenta', 'reporteV', 'profileUser');
    }


    ///Todo lo relacionado con las ventas

    public function ventasRegistradas()
    {
        $ventasList = App\Models\Ventas::simplePaginate(05);
        // $ventaId = App\Models\Ventas::findOrFail($id);

        return view('pages.ventas', compact('ventasList',));
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
        //$ventasList = App\Models\Ventas::paginate(5);
        //$ventasList = App\Models\Ventas::orderBy("id", "desc")->limit(10);
        $ventasList = App\Models\Ventas::latest('id')->take(05)->get();

        $fechaA = Carbon::now();
        
        //$fecha = $fechaA->format('d-m-Y');

        $venT = App\Models\Ventas::count('id');
        $ventS = App\Models\Ventas::sum('precio');
        return view('pages.home_page', compact('venT', 'ventS', 'fechaA', 'ventasList'));
    }

    /////Reportes
    public function reporteV()
    {
        $fecha = Carbon::now();
        $fechaA = $fecha->format('Y-m-d');
        $pdf = resolve('dompdf.wrapper');
        $pdf = \PDF::loadView('reportes.reporte_venta', compact('fechaA'));
        return $pdf->stream('reporte_venta.pdf');
    }

    public function profileUser(){
        $name = Auth::user()->name;
        $email = Auth::User()->email;

        $pass = Auth::User()->password;

        //$userE = User::findOrFail($id);
        //$pass = Crypt::decryptString($passEn, $token);


        return view('pages.profile', compact('name', 'email', 'pass'));
    }

    public function viewPassword(){
        return view('pages.passw');
    }

    public function updatePassword(Request $request){
        $rules= [

            'mypassword' => 'required',
            'password' => 'required|confirmed',

        ];   
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los campos no coniciden',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return view('pages.passw')->withErrors($validator);
        }else{
            if(Hash::check($request->mypassword, Auth::user()->password)){
                $user = new App\Models\User;
                $user->where('email', '=', Auth::user()->email)
                ->update(['password'=>bcrypt($request->password)]);
                return view('pages.passw')->with('status', 'password cambiado con exito');
            }else{
                return view('pages.passw')->with('message', 'Campos Incorrectos');
            }
        }
    }
}





        //$dompdf = new Dompdf();
       // $dompdf = new Dompdf();
        //$dompdf->loadView('reportes.reporte_venta');
        //$dompdf->setPaper('A4', 'landsape');
        //$dompdf->render();
        //header("Content-type: application/pdf");
        //header("Content-Disposition: inline; filename=documento.pdf");
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
