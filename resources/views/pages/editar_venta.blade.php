@extends('.home')

@section('contenido')
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Editar Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('venta.update', $venta->id) }}" method="POST">
                    @method('POST')
                    @csrf
            
                    <div class="card bg-light mx-auto" style="width: 500px;">
                        <div class="card-body">
            
                             <div class="col-12 " style="font-weight: bold;">
                                <label for="">Id-Usuario:</label>
                                <input type="number" class="form-control" id="id_user" name="id_user" value="{{ $venta->id_user }}"
                                >
                            </div>
                            <div class="col-12" style="font-weight: bold;">
                                <label for="">Producto:</label>
                                <input type="text" class="form-control" id="product" name="product" value="{{ $venta->producto }}"
                                >
                            </div>
                            <div class="col-12" style="font-weight: bold;">
                                <label for="">Cantidad:</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad"
                                value="{{ $venta->cantidad }}">
                            </div>
                            <div class="col-12" style="font-weight: bold;">
                                <label for="">Precio:</label>
                                <input type="double" class="form-control" id="precio" name="precio" value="{{ $venta->precio }}"
                                >
                            </div>
                             <div class="col-12" style="font-weight: bold;">
                                <label for="">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $venta->fecha }}" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success text-center">Editar</button>
                        </div>
                    </div>
                </form>            
            </div>
                    {{-- <div class="modal-footer">
                        <form action="{{ route('eliminar.venta', $item->id) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" value="Delete" onclick="delt()" id="delt">
                                <i class="far fa-trash-alt"></i>Eliminar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>



@endsection
