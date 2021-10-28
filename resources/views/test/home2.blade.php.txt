@extends('plantilla')

@section('section')
    <p class="center">Lista de usuarios registrados en la base de datos</p><br>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Usuario</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($users as $item)        
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>
              <a href="{{route('pages.detalle', $item)}}"> 
                {{$item->nombre}}
              </a>
            </td>
            <td>{{$item->user}}</td>
            <td>{{$item->pass}}</td>
          </tr>
        @endforeach  
        </tbody>
      </table>
    
@endsection

{{-- 
{-- <p>Equipo de trbajo</p>
    @foreach ($equipo as $item)
        <a href="{{ route('principal', $item) }}">{{$item}}</a><br>
    @endforeach

    @if(!empty($name))
         @switch($name)
             @case($name == 'Damian')
                 <p>Nombre: {{ $name }}</p>
                 <p>{{$name}} Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit eveniet quos, voluptate explicabo voluptatem officiis enim quibusdam, earum, aspernatur minus omnis architecto maiores! Velit minima placeat, illo fuga ratione earum.
                    
                 </p>
                 @break
         
             @default
                 
         @endswitch
    @endif --}}