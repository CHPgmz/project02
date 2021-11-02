@extends('pages.form')

@section('section-form')
    
    <!-- <a href="{{ route('formulario.venta') }}" >Nuevo registro</a> -->
    <p style="font-size: 18px; text-align: center; font-weight: bold; margin-top: -20px;">Ventas Registradas</p>
 <a href="{{ route('formulario.venta') }}" class="btn btn-primary" style="margin: 0% 0% 1% 10%">Nuevo registro</a>
    <div class="container">
    
        <table class="table  table-striped col-10 mx-auto ">
           <thead class="text-center">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">#ID Usuario</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
           </thead> 
           <tbody class="text-center">
               @foreach($ventasList as $item )
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{ $item->id_user }}</td>
                    <td>
                        <a href="{{ route('ventas.detalle', $item->id) }}">
                        {{ $item->producto }}
                        </a>
                    </td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->fecha }}</td>
                    <td>
                        <a href="{{ route('editar.venta', $item->id) }}" class="btn btn-warning btn-sm" >Editar</a>
                        <form action="{{ route('venta.eliminar', $item->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit" value="Delete">Eliminar</button>
                        </form>
                    </td>
                </tr>
               @endforeach
           </tbody>
        </table>
    </div>
@endsection
