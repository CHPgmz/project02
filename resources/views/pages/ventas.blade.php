@extends('.home')
@section('estilo')
 <link rel="stylesheet" href="{{ asset('css/bootstrap4.min.css') }}" >    
@endsection 
    
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
                        @foreach ($ventasList as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->id_user }}</td>
                                <td>{{ $item->producto }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td>{{ $item->precio }}</td>
                                <td>{{ $item->fecha }}</td>
                                <td>
                                    {{-- <a href="{{ route('editar.venta', $item->id) }}" class="btn btn-success btn-sm" data-target="#editar" id="#editar" data-toggle="modal">
                                        <i class="far fa-edit"></i>
                                        Editar
                                    </a> --}}
                                    <a href="#" class="btn btn-success btn-sm" data-toggle="modal" id="#editar" data-target="#editar"><i class="far fa-edit"></i>Editar</a>

                                    {{-- <form action="{{ route('eliminar.venta', $item->id) }}" method="POST"
                                        class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="delt()"
                                            id="delt">
                                            <i class="far fa-trash-alt"></i>Eliminar</button>
                                    </form> --}}
                                    <button class="btn btn-danger btn-sm" data-target="#elm" id="#elm"
                                        data-toggle="modal">Eliminar</button>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

{{ $ventasList->links() }}

    {{-- Modal(Start) : Sirve para borrar detos de la venta--}}
    <div class="modal fade" id="elm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Eliminar el registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Se eliminara completamente en la base de datos
                </div>
                        <div class="modal-footer">
                            <form action="{{ route('eliminar.venta', $item->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit" value="Delete" onclick="delt()" id="delt">
                                    <i class="far fa-trash-alt"></i>Eliminar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </form>
                    </div>
                </div>
            </div>
    </div>
    {{-- Modal (fin) --}}

{{-- Modal: Sirve para editar datos de la venta --}}
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" style="width: 100%;">
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="title">Editar datos de la Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('venta.update', $item->id) }}" method="POST">
                    @method('POST')
                    @csrf
            
                    <div class="card bg-light mx-auto" style="width: 400px;">
                        <div class="card-body" style="font-size: 18px">
            
                             <div class="col-18 " style="font-weight: bold;">
                                <label for="">Id-Usuario:</label>
                                <input type="number" class="form-control" id="id_user" name="id_user" value="{{ $item->id_user }}"
                                >
                            </div>
                            <div class="col-18" style="font-weight: bold;">
                                <label for="">Producto:</label>
                                <input type="text" class="form-control" id="product" name="product" value="{{ $item->producto }}"
                                >
                            </div>
                            <div class="col-18" style="font-weight: bold;">
                                <label for="">Cantidad:</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad"
                                value="{{ $item->cantidad }}">
                            </div>
                            <div class="col-18" style="font-weight: bold;">
                                <label for="">Precio:</label>
                                <input type="double" class="form-control" id="precio" name="precio" value="{{ $item->precio }}"
                                >
                            </div>
                             <div class="col-18" style="font-weight: bold;">
                                <label for="">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $item->fecha }}" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success text-center">Editar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</
                        </div>
                    </div>
                </form>            
            </div>
                    
                </div>
            </div>
        </div>


    {{-- Modal fin --}}

@endsection

