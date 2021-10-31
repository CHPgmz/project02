@extends('pages.form')

@section('section-form')
    <div class="container">
        <p class="display-6" style="text-align: center">Lista de ventas registradas</p>
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
                        <form action="{{ route('venta.eliminar', $item->id) }}" method="POST">
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
