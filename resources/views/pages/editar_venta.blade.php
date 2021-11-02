@extends('pages.form-page')

@section('section-form')
<p>Editar venta</p>


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
                <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    </div>
    </div>

@endsection
