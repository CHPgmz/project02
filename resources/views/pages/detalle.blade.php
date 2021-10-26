@extends('plantilla')

@section('section')
    <p>Esta es la otra seccion de la pagina web</p>
    <h4>Id: {{$detail->id}}</h4>
    <h4>Nombre: {{$detail->nombre}}</h4>
    <h4>Usuario: {{$detail->user}}</h4>
    <h4>Contraseña: {{$detail->pass}}</h4>
@endsection