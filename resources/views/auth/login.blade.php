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
            <div class="card" style="background-color: #20c997">
                <h3 class="text-center" style="margin-top: 20px;"><i class="fas fa-sign-in-alt"></i> Ingreso de Usuarios</h3>
                @include('layouts.validation_errors')
                <div class="card-header" style="font-size: x-large;"><strong>Todos los campos obligatorios.</strong></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control entrar" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control contras" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <style>
                                    .entrar:hover{
                                        transform: scale(1.5);
                                        background-color: #161616;
                                        transition: all 300ms;
                                        cursor: pointer;
                                        background-color: gray;
                                        color: black;
                                    }
                                    /*.contras:hover{
                                        transform: scale(0.7);
                                        background-color: #161616;
                                        transition: all 300ms;
                                        cursor: pointer;
                                        background-color: gray;
                                        color: black;
                                    }*/
                                </style>
                                <button style="background-color: #209997; color: white; border: none; opacity: 0.8;" type="submit" class="btn btn-block btn-outline-primary btn-outline-success">
                                    <strong>Ingresar</strong>
                                </button>
                                <a type="button" style="background-color: #209997; color: white; border: none; opacity: 0.8;" href="{{ route('register') }}" class="col-md-12 btn btn-block btn-outline-primary btn-outline-success"><strong>Registrarse</strong>
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