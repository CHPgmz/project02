@extends('pages.form')

@section('section-form')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Tabla Ventas</h3>
            <p class="text-muted">Ventas Registradas<code></code></p>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#ID</th>
                            <th class="border-top-0">#ID-USER</th>
                            <th class="border-top-0">PRODUCTO</th>
                            <th class="border-top-0">CANTIDAD</th>
                            <th class="border-top-0">PRECIO</th>
                            <th class="border-top-0">FECHA</th>
                            <th class="border-top-0">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ventasList as $item )
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{ $item->id_user }}</td>
                            <td>{{ $item->producto }}</td>
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
                {{ $ventasList->links() }}
            </div>
        </div>
    </div>
</div>
    <!-- <a href="{{ route('formulario.venta') }}" >Nuevo registro</a> -->


    {{-- <p style="font-size: 18px; text-align: center; font-weight: bold; margin-top: -20px;">Ventas Registradas</p>
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
    </div> --}}
@endsection
