<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> SIPLATRI-2018</title>
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
                    <h2 class="text-center"><strong>Sistema de Planeación Trimestral</strong></h2>
                    <h4 class="text-center"><strong>SIPLATRI</strong></h4>
                    <br>
                    <p class="p-2 text-justify">
                        <strong>Es un sistema de información que facilita la planeación trimestral de los programas de formación integral en las diferentes modalidades para el Centro de Procesos Industriales y Construcción CPIC del SENA Regional Caldas, de acuerdo con las necesidades orientadas a cubrir la programación académica para los aprendices.</strong>
                    </p>

                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
@include('layouts.footer')