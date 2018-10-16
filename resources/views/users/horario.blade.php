@extends('layouts.navbar')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit-User</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('imgs/siplatri2018.ico')}}">
    <!-- Styles -->
</head>
<body>
	<div><br><br><br></div>
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Mi Información</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{ url('home') }}">Volver</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Editar Mi Información</li>
		</ol>
		@include('layouts.validation_errors')
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Lunes: </th>
					<td>
                        <strong>Primera clase:</strong>
                        <hr>
                        @forelse(Auth::user()->recordsinstructorLunes1 as $record)

                            programa: {{$record->nameprogram->name}}
                            Fecha Inicio: {{$record->fecha_inicio}}
                            <br>
                            Fecha Fin: {{$record->fecha_fin}}
                            <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_PLunes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_PLunes))}}
                            <br>
                            <hr>
                        
                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Segunda clase:</strong>
                        @forelse(Auth::user()->recordsinstructorLunes2 as $record)
                        programa: {{$record->nameprogram->name}}
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_SLunes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_SLunes))}}
                            <br>
                            <hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Tercera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorLunes3 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_TLunes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_TLunes))}}
                            <br>
                            <hr>
                        @empty
                            Sin horario
                        @endforelse

                    </td>
				</tr>

                <tr>
					<th> Martes: </th>
					<td>
                        <strong>Primera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorMartes1 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_PMartes))}}
                        <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_PMartes))}}
                            <br>
                            <hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Segunda clase:</strong>
                        @forelse(Auth::user()->recordsinstructorMartes2 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_SMartes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_SMartes))}}
                            <br><hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Tercera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorMartes3 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_TMartes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_TMartes))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse

                    </td>
				</tr>

                <tr>
					<th> Miercoles: </th>
					<td>
                        <strong>Primera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorMiercoles1 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_PMiercoles))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_PMiercoles))}}
                            <br><hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Segunda clase:</strong>
                        @forelse(Auth::user()->recordsinstructorMiercoles2 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_SMiercoles))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_SMiercoles))}}
                            <br><hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Tercera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorMiercoles3 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_TMiercoles))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_TMiercoles))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse

                    </td>
				</tr>

                <tr>
					<th> Jueves: </th>
					<td>
                        <strong>Primera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorJueves1 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_PJueves))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_PJueves))}}
                            <br><hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Segunda clase:</strong>
                        @forelse(Auth::user()->recordsinstructorJueves2 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_SJueves))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_SJueves))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Tercera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorJueves3 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_TJueves))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_TJueves))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse

                    </td>
				</tr>

                <tr>
					<th> Viernes: </th>
					<td>
                        <strong>Primera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorViernes1 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_PViernes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_PViernes))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Segunda clase:</strong>
                        @forelse(Auth::user()->recordsinstructorViernes2 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_SViernes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_SViernes))}}
                            <br><hr>

                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Tercera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorViernes3 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_TViernes))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_TViernes))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse

                    </td>
				</tr>

                <tr>
					<th> Sabado: </th>
					<td>
                        <strong>Primera clase:</strong>
                        @forelse(Auth::user()->recordsinstructorSabado1 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_PSabado))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_PSabado))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse
                        <br>
                        <strong>Segunda clase:</strong>
                        @forelse(Auth::user()->recordsinstructorSabado2 as $record)
                        Fecha Inicio: {{$record->fecha_inicio}}
                        <br>
                        Fecha Fin: {{$record->fecha_fin}}
                        <br>
                            Desde:
                            {{date('H:i A', strtotime($record->hora_inicio_SSabado))}}
                            <br>
                            Hasta:
                            {{date('H:i A', strtotime($record->hora_fin_SSabado))}}
                            <br><hr>
                        @empty
                            Sin horario
                        @endforelse


                    </td>
				</tr>

			</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
