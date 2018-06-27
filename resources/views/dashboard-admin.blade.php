<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Escritorio Administrador</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="shortcut icon" href="imgs/siplatri2018.ico">
        <!-- Styles -->
    </head>
    <body class="dark">
    @extends('layouts.navbar')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <br>
                <div class="title m-b-md">

                </div>
                <div style="color: white; width:800px; height: 400px;background-color: rgba(0,0,0,.5);opacity: 0.9; border-radius: 10px;padding: 20px;">
                    <br>
                    <h2 class="text-center"><strong>Sistema de Planeación Trimestral SIPLATRI</strong></h2>
                    <h4 class="text-center" style="text-decoration: none;"><strong>Gestión del Coordinador Académico</strong></h4>
                    <p class="p-2 text-justify">
                        <strong>Espacio exclusivo para Coordinación Académica representada por , quien tiene acceso al sistema de información para agregar, editar, eliminar y ver todos los módulos que componen la planeación trimestral en el CPIC y que permiten la correcta administración de los elementos para la construcción de las fichas.</strong>
                    </p>
                    <div class="links">
                    <a class="btn btn-secondary active" type="button" href="{{url('user')}}" style="line-height: 27px;"><strong>FICHAS</strong></a>
                    <a class="btn btn-secondary active" type="button" href="{{url('user')}}" style="line-height: 27px;"><strong>INSTRUCTORES</strong></a>
                    <a class="btn btn-secondary active" type="button" href="{{url('classroom')}}" style="line-height: 27px;"><strong>AMBIENTES</strong></a>
                    <a class="btn btn-secondary active" type="button" href="{{url('program')}}" style="line-height: 27px;"><strong>PROGRAMAS</strong></a>
{{--                     <a class="btn btn-secondary active" type="button" href="{{url('user')}}" style="line-height: 27px;"><strong>COMPETENCIAS</strong></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
@include('layouts.footer')
</html>