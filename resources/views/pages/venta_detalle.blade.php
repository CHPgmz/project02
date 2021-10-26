@extends('pages.form-page')

@section('section-form')
<p>Detalles de la venta</p>

<p>Id_Venta: {{ $ventaD->id }}</p>
<p>Id_Usuario: {{ $ventaD->id_user }}</p>
<p>Producto: {{ $ventaD->producto }}</p>
<p>Cantidad: {{ $ventaD->cantidad }}</p>
<p>Precio: {{ $ventaD->precio }}</p>
<p>Fecha: {{ $ventaD->fecha }}</p>
@endsection
