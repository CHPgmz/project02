<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Genius</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my-login.css') }}">
    <style type="text/css">
        a, a:hover{
          color:#333
        }
    </style>

<body class="my-login-page">

    <section class="h-100">
        <div class="container h-200">
            <div class="row justify-content-md-center h-200">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="{{ asset('img/logo-compan.jpg') }}" alt="logo" class="rounded">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ __('Iniciar sesión') }}</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('Correo') }}</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid
                                        @enderror" name="email" value="{{ old('email') }}" required autocomplete="off"
                                        autofocus style=" border:  1px solid #39c;">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Contraseña') }}

                                    </label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="border:  1px solid #39c;">
                                     <div style="margin-bottom:05px;">
                                          <input  type="checkbox" id="mostrar_contrasena" title="clic para mostrar contraseña">
                                          <p>Mostrar Contraseña</p>
                                      </div>
                                          
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <!-- <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }} />
                                        <label for="remember" class="custom-control-label">Recordarmelo</label>
                                    </div>
                                </div> -->

                                <div class="form-group  m-0">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 20px;">
                                            {{ __('Olvidaste la contraseña') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="mt-4 text-center">
                                    No tienes una cuenta?
                                    <a href="{{ route('register') }}">Crear Una</a>
                                </div>
                            </form>
                        </div>
                    </div>
                     <div class="footer">Copyright &copy; 2021 &mdash; Company Genius</div> 
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/my-login.js') }}"></script>
    <script type="text/javascript">
          $(document).ready(function () {
          $('#mostrar_contrasena').click(function () {
            if ($('#mostrar_contrasena').is(':checked')) {
              $('#password').attr('type', 'text');
            } else {
              $('#password').attr('type', 'password');
            }
          });
        });
    
    </script>
</body>
</html>
