
@extends('.home')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Tabla Ventas</h3>
            <!-- <p class="text-muted">Ventas Registradas<code></code></p> -->
            <div class="rw-lg-3">
            
                <a href="{{ route('reporte.venta') }}" class="btn btn-info">Reporte mensual</a>
                <a href="{{ route('reporte.venta') }}" class="btn btn-info">Reporte</a>
            </div>
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
                                <a href="{{ route('editar.venta', $item->id) }}" class="btn btn-success btn-sm" >Editar</a>

                                <form action="{{ route('eliminar.venta', $item->id) }}" method="POST" class="d-inline">
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
        </div>
    </div>
</div>

@endsection
