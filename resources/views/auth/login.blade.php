<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/siplatri2018.ico">
</head>
<body class="dark">
    {{-- @extends('layouts.app') --}}
    <div class="container">
    <div class="row popover-left">
        <div class="col-md-6 offset-6">
            <div class="card">
                <h3 class="text-center" style="margin-top: 20px;"><i class="fa fa-lock"></i> Ingreso de Usuarios</h3>
                @include('layouts.validation_errors')
                <div class="card-header">Todos los campos obligatorios.</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button style="background-color: rgb(35,130,118); color: white; border: none; opacity: 0.8;" type="submit" class="btn btn-block btn-outline-primary btn-outline-success">
                                    <strong>Ingresar</strong>
                                </button>
                                <a type="button" style="background-color: rgb(35,130,118); color: white; border: none; opacity: 0.8;" href="{{ route('register') }}" class="col-md-12 btn btn-block btn-outline-primary btn-outline-success"><strong>Registrarse</strong>
                                </a>
                                <a class="btn btn-block btn-link" href="{{ route('password.request') }}">
                                    Olvidó su contraseña <i class="fas fa-question-circle"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
{{-- @include('layouts.footer') --}}
</body>
</html>