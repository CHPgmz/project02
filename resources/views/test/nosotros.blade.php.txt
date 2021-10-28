@extends('plantilla')

@section('section')
    <p>Este es un simple hola mundo</p>
    @foreach ($equipo as $item)
        <a href="#">{{$item}}</a><br>
    @endforeach
@endsection