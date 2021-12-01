@extends('.home')

@section('contenido')
@if (Session::has('message'))
    <div class="text-danger">
        {{Session::get('message')}}
    </div>
{{-- @else  (Session::has('status'))
    <div class="text-danger">
        {{Session::get('message')}}
    </div>
@endif --}}


<form action="{{ route('change.password') }}" method="POST">
    @csrf

    <div class="card bg-light mx-auto" style="width: 700px;">
        <div class="card-body">

            <div class="col-12" style="font-weight: bold;">
                <label for="mypassword">Contraseña Actual:</label>
                <input type="password" class="form-control" id="mypassword" name="mypassword"  autocomplete="off" placeholder="Introduce tu contraseña actual">
                <div class="text-danger">{{$errors->first('mypassword')}}</div> 

            </div>
            <div class="col-12" style="font-weight: bold;">
                <label for="">Nueva Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password"
                     autocomplete="off" placeholder="Escribe tu nueva contraseña">
                     <div class="text-danger">{{$errors->first('password')}}</div> 
            </div>
            <div class="col-12" style="font-weight: bold;">
                <label for="">Confirmar Contraseña:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="off" placeholder="Confirma tu nueva contraseña">
                <div class="text-danger">{{$errors->first('password_confirmation')}}</div> 
            </div>
    
            <br>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

@endsection