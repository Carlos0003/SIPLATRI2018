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
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('icon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/style.css') }}">
        <!-- Styles -->
    </head>
     <style>
            .hover06 a.tuer {
   -webkit-transform: rotate(0) scale(1);
    transform: rotate(0) scale(1);
}
.hover06 a.tuer:hover  {
    -webkit-transform: rotate(10deg) scale(1.2);
    transform: rotate(10deg) scale(1.2);
    -webkit-transition: .1s ease-in-out;
    transition: .1s ease-in-out;

}
        </style>
    <body {{-- class="dash" --}} style="background-color: white;">
    {{-- @extends('layouts.navbar') --}}

    <header style="display: flex;"><span class="icon-menu show"></span><a class="text-right" style="display: flex; position: relative; left: 40%; color: black; font-size: 25px; font-weight: 600; text-decoration: none; line-height: -100%;" class="navbar-brand" href="{{ url('home') }}"><img class="" src="{{ asset('imgs/logoSena2.png') }}" style="width: 50px; height: 50px; margin-top: 5px;">&nbsp;&nbsp;SIPLATRI <?php \Carbon\Carbon::setLocale(config('app_locale')); echo date('d M Y');?>
            </a>
        </header>
    <main>
        <div class="content-menu">
        <li>
            <a class="icon-folder icon1"href="{{url('record')}}"></a>
            <h4 class="text1">FICHAS</h4>
        </li>
        <li>
            <a class="icon-users icon2"href="{{url('user')}}"></a>
            <h4 class="text2">INSTRUCTORES</h4>
        </li>
        <li>
            <a class="icon-home icon3"href="{{url('classroom')}}"></a>
            <h4 class="text3">AMBIENTES</h4>
        </li>
        <li>
            <a class="icon-graduation-cap icon4"href="{{url('program')}}"></a>
            <h4 class="text4">PROGRAMAS</h4>
        </li>
        <li>
            <a class="icon-open-book icon5"href="{{url('abilities')}}"></a>
            <h4 class="text5">COMPETENCIAS</h4>
        </li>
        <li>
            <a class="icon-globe icon6"href="{{url('municipalities')}}"></a>
            <h4 class="text6">MUNICIPIO</h4>
        </li>
        <li>
            <a class="icon-v-card icon7"href="{{url('users/info')}}"></a>
            <h4 class="text7">MIS DATOS</h4>
        </li>
        <li>
            <a class="icon-power-plug icon8" href="{{ route('logout') }}" onclick="event.preventDefault();                                          document.getElementById('logout-form').submit();"></a>
            <h4 class="text8">CERRAR SESIÓN</h4>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                {{ csrf_field() }}
            </form>
        </li>
    </div>
            <article>
                <h1>BIENVENIDO {{ Auth::user()->fullname }} A SIPLATRI </h1>
                <h3>Sistema de Planeación Trimestral</h3><p>
                <strong>Espacio exclusivo para Coordinación Académica del CPIC, quien tiene acceso al sistema de información para agregar, editar, eliminar y ver todos los módulos que componen la planeación trimestral del centro y que permiten la correcta administración de los elementos para la construcción de las fichas. Las validaciones le permiten evitar el cruce de ambientes de formación e instructores, así como el autocontéo de las horas laboradas.</strong>
                </p>
            </article>
    </main>
        {{-- <div class="flex-center position-ref full-height">
            <div class="content">
                <div style="color: white; width:800px; height: 400px;background-color: #fc7323; border-radius: 10px;padding: 20px;">
                    <br>
                    <h2 class="text-center"><strong>Sistema de Planeación Trimestral SIPLATRI</strong></h2>
                    <h4 class="text-center" style="text-decoration: none;"><strong>Gestión del Coordinador Académico</strong></h4>
                    <div class="links hover06">
                    <a class="btn btn-secondary active tuer" type="button" href="{{url('record')}}" style="background-color: #596548; line-height: 27px; margin-right: 10px;"><strong>FICHAS</strong></a>
                    <a class="btn btn-secondary active tuer" type="button" href="{{url('user')}}" style="background-color: #596548; line-height: 27px; margin-right: 10px;"><strong>INSTRUCTORES</strong></a>
                    <a class="btn btn-secondary active tuer" type="button" href="{{url('classroom')}}" style="background-color: #596548; line-height: 27px; margin-right: 10px;"><strong>AMBIENTES</strong></a>
                    <a class="btn btn-secondary active tuer" type="button" href="{{url('program')}}" style="background-color: #596548; line-height: 27px; margin-right: 10px;"><strong>PROGRAMAS</strong></a>
                    <a class="btn btn-secondary active tuer" type="button" href="{{url('abilities')}}" style="background-color: #596548; line-height: 27px;"><strong>COMPETENCIAS</strong></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/js.js') }}"></script>
    </body>
@include('layouts.footer')
</html>