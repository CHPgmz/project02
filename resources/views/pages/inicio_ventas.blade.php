@extends('pages.form')

@section('section-form')
    <div class="container">
        <p class="display-6" style="text-align: center">Ventas Registradas</p>
        <table class="table col-9 mx-auto">
           <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">#ID Usuario</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha</th>
                </tr>
           </thead> 
           <tbody>
               @foreach($ventasList as $item )
                <tr>
                    <th scope="row">{{$item->id_venta}}</th>
                    <td>{{ $item->id_user }}</td>
                    <td>{{ $item->producto }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->precio }}</td>
                    <td>{{ $item->fecha }}</td>
                </tr>
               @endforeach
           </tbody>
        </table>
    </div>
@endsection
