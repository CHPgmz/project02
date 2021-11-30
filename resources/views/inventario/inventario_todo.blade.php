@extends('.home')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Tabla Inventario</h3>
            <div class="rw-lg-3">
                <a href="{{ route('reporte.inventario') }}" class="btn btn-info">Reporte mensual</a>
                <a href="{{ route('reporte.inventario') }}" class="btn btn-info">Reporte</a>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#ID</th>
                            <th class="border-top-0">#DESCRIPCIÓN</th>
                            <th class="border-top-0">CANTIDAD</th>
                            <th class="border-top-0">FECHA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invList as $item )
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->cantidad }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>
                                <form action="{{ route('inv.eliminar', $item->id) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit" value="Delete">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
                {{ $invList->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
