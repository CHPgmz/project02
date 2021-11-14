@extends('.home')

@section('contenido')
    <p style="font-size: 18px; font-weight: bold; text-align: center;">Registrar venta</p>
    <!--@if (session('mensaje'))
          <div class="alert alert-success">
            {{ session('mensaje') }}
          </div>
        @endif-->


    <form action="{{ route('venta.insertar') }}" method="POST">
        @csrf

        <div class="card bg-light mx-auto" style="width: 700px;">
            <div class="card-body">

                <div class="col-12" style="font-weight: bold;">
                    <label for="">Producto:</label>
                    <input type="text" class="form-control" id="product" name="product" value="{{ old('product') }}"
                        required>
                </div>
                <div class="col-12" style="font-weight: bold;">
                    <label for="">Cantidad:</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad"
                        value="{{ old('cantidad') }}" required>
                </div>
                <div class="col-12" style="font-weight: bold;">
                    <label for="">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" value="{{ old('precio') }}"
                        required>
                </div>
        
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
    


@endsection
