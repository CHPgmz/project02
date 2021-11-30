@extends('.home')

@section('contenido')
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-12">
        <div class="white-box">
            <div class="user-bg">
                {{-- <img alt="user" src="plugins/images/large/img1.jpg" width="100%"> --}}
                {{-- <i class="fas fa-address-card" style="width: 100%; height:100%;"></i> --}}
                <span class="material-icons" width="100%">person</span>

                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)">
                               {{-- <i class="fas fa-address-card"></i> --}}
                               <span class="material-icons" width="100%">person</span>
                            </a>
                            <h4 class="text-white mt-2">
                                Nombre
                            </h4>
                            <h5 class="text-white mt-2">
                                {{$name}}
                            </h5>
                        </div>
                    </div>
                </img>
            </div>
            <div class="user-btm-box mt-5 d-md-flex">
                <div class="col-md-4 col-sm-4 text-center">
                    <h1>
                        258
                    </h1>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <h1>
                        125
                    </h1>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <h1>
                        556
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-7 col-xlg-7 col-md-10">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material">
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">
                            Nombre
                        </label>
                        <div class="col-md-12 border-bottom p-0">
                            <input class="form-control p-0 border-0" placeholder="Damian" type="text" value="{{ $name }}">
                            </input>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0" for="example-email">
                            Gmail
                        </label>
                        <div class="col-md-12 border-bottom p-0">
                            <input class="form-control p-0 border-0" id="email" name="email" placeholder="example@gmail.com" type="email" value="{{$email}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">
                            Contraseña
                        </label>
                        <div class="col-md-12 border-bottom p-0">
                            <input class="form-control p-0 border-0"  id="password" name="password" type="password" value="{{ $pass }}"/>
                            <div style="margin-bottom:05px;">
                                <input id="mostrar_contrasena" title="clic para mostrar contraseña" type="checkbox"/>
                                Mostrar Contraseña
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">
                            Phone No
                        </label>
                        <div class="col-md-12 border-bottom p-0">
                            <input class="form-control p-0 border-0" placeholder="123 456 7890" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success" style="color: black">
                                <i class="far fa-edit"></i>
                                Actualizar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

@endsection

