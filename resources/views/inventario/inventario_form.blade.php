@extends('.home')

@section('contenido')
<p class="text-center fw-bold fs-4">Formulario de inventario</p>
<form action="{{ route('inv.insert') }}" method="POST">
        @csrf

        <div class="card bg-light mx-auto" style="width: 700px;">
            <div class="card-body">

                <div class="col-12" style="font-weight: bold;">
                    <label for="">Descripcion:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}"
                        required>
                </div>
                <div class="col-12" style="font-weight: bold;">
                    <label for="">Cantidad:</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad"
                        value="{{ old('cantidad') }}" required>
                </div>
                <div class="col-12" style="font-weight: bold;">
                    <label for="">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}"
                        required>
                </div>
        
                <br>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
@endsection
