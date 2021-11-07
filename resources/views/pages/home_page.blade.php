@extends('pages.form-page')

@section('section-form')

 <a href="{{ route('formulario.venta') }}" class="btn btn-primary" style="margin: 0% 0% 1% 45%">Nuevo registro</a>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
  <div class="col">
    <div class="card border-primary">
        <div class="card-header text-center border-primary" style="font-weight: bold;">HOY</div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Productos vendidos: {{  $venT }}</li>
        <li class="list-group-item">Total: {{ $ventS }} pesos</li>
      </ul>
      <div class="card-footer">
          <small class="text-muted text-center">Fecha: {{ $fechaA }}</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-primary">
        <div class="card-header text-center border-primary" style="font-weight: bold;">POR SEMANA</div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Productos vendidos: 100</li>
        <li class="list-group-item">Total: $5000 pesos</li>
      </ul>
        <div class="card-footer">
            <small class="text-muted text-center">Fecha: 11/12/21 - 12/12/2021</small>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-primary">
        <div class="card-header text-center border-primary" style="font-weight: bold;">MES</div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Productos vendidos: 80</li>
        <li class="list-group-item">Total: $10000 pesos</li>
      </ul>
      <div class="card-footer">
        <small class="text-muted text-center">Mes: Marzo</small>
      </div>
    </div>
  </div>


</div>
@endsection
