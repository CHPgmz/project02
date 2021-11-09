@extends('pages.form-page')

@section('section-form')
    <p style="font-size: 18px; font-weight: bold; text-align: center;">Registrar venta</p>
    <!--@if (session('mensaje'))
          <div class="alert alert-success">
            {{ session('mensaje') }}
          </div>
        @endif-->


    <form action="{{ route('venta.insertar') }}" method="POST">

        @csrf
        <!-- @error('id_user')
            <div class="alert alert-danger">
                El Id del usuario es obligatorio
            </div>
        @enderror-->
        @error('product')
            <div class="alert alert-danger">
                El nombre del producto es obligatorio
            </div>
        @enderror

        @error('cantidad')
            <div class="alert alert-danger">
                La cantidad es obligatorio
            </div>
        @enderror

        @error('precio')
            <div class="alert alert-danger">
                El precio es obligatorio
            </div>
        @enderror

       <!-- @error('fecha')
            <div class="alert alert-danger">
                La fecha es obligatoria
            </div>
        @enderror -->


        <div class="card bg-light mx-auto" style="width: 500px;">
            <div class="card-body">

                <!-- <div class="col-12 " style="font-weight: bold;">
                    <label for="">Id-Usuario:</label>
                    <input type="number" class="form-control" id="id_user" name="id_user" value="{{ old('id_user') }}"
                        required>
                </div> -->
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
                    <input type="double" class="form-control" id="precio" name="precio" value="{{ old('precio') }}"
                        required>
                </div>
                <!-- <div class="col-12" style="font-weight: bold;">
                    <label for="">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}" required>
                </div> -->
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
    </div>


@endsection
