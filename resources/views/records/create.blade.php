<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Agregar Ficha</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="shortcut icon" href="{{ asset('imgs/siplatri2018.ico')}}">
        <!-- Styles -->
    </head>
	<body>
		@extends('layouts.navbar')
		<div><br><br><br></div>
		<div class="col-md-12">
		<h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Ficha</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('record')}}">Lista Fichas</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Ficha</li>
		</ol>
		@include('layouts.validation_errors')
		<div class="col-md-12 scrolldos">
		<form action="{{url('record')}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<table class="col-md-12" border="1px solid black" style="font-size: 10px;">
				<tr>
					<th colspan="14" class="text-center" style="background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> INFORMACIÓN DE LA FICHA</strong>
					</th>
				</tr>
				<tr>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">ID</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;"><input placeholder="Digite ID de la Ficha" type="number" style="border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">NOMBRE DEL PROGRAMA</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;" colspan="7">
						<select style="background-color: #AEB6BF;" required name="program_id" class="form-control">
							<option value="">Seleccione programa...</option>
							@foreach($programsname as $program)
								<option value="{{ $program->id }}">{{ $program->name }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">TOTAL DE TRIMESTRES</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">{{ $program->timeduration }}
					</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">TRIMESTRE ACTUAL</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">manual(input)</td>
				</tr>
				<tr>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">TIPO DE PROGRAMA</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">debe cargar info automaticamente del programa cargado</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">FECHA DE INICIO</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;"><input style="background-color: #AEB6BF;" name="feinicio" type="date"></td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">FECHA DE FIN</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;"><input style="background-color: #AEB6BF; outline-style: none;outline: none;" name="fefin" type="date"></td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">HORAS PROGRAMADAS</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">manual(input) debe coincidir con suma de horas</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">GESTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;" colspan="3">
						<select style="background-color: #AEB6BF;" required name="user_id" class="form-control">
							<option value="">Seleccione Gestor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">MUNICIPIO DE DESARROLLO</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamado tabla municipios(select)</td>
				</tr>
				<tr>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">HORAS PROGRAMADAS</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">LUNES</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">MARTES</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">MIERCOLES</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">JUEVES</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">VIERNES</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;" colspan="2">SABADO</th>
				</tr>
				<tr>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INICIO</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">FINAL</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">COMPETENCIA</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">AMBIENTE</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">COMPETENCIA</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">AMBIENTE</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">COMPETENCIA</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">AMBIENTE</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">COMPETENCIA</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">AMBIENTE</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">COMPETENCIA</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">AMBIENTE</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">COMPETENCIA</th>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">AMBIENTE</th>
				</tr>
				<tr>
					<td style="border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" style="border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" style="border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla competencia(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla ambientes(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla competencia(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla ambientes(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla competencia(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla ambientes(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla competencia(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla ambientes(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla competencia(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla ambientes(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla competencia(select)</td>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla ambientes(select)</td>
				</tr>
				<tr>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INSTRUCTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla instructores(select)</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INSTRUCTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla instructores(select)</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INSTRUCTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla instructores(select)</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INSTRUCTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla instructores(select)</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INSTRUCTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla instructores(select)</td>
					<th class="text-center" style="background-color: #34495E; color: white; border: 1px solid black;">INSTRUCTOR</th>
					<td style="border: 1px solid black; background-color: #AEB6BF;">llamar tabla instructores(select)</td>
				</tr>
				<tr>
					<th colspan="14" class="text-center" style="background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> php que imprima nombre Id, Nombre del programa seleccionado y gestor.</strong>
					</th>
				</tr>
				<tr>
					<th colspan="14"><button class="btn btn-secondary btn-lg btn-block" style="height: 30px; line-height: 50%; font-size: 18px;"> <i class="fa fa-save"></i> Enviar</button></th>
				</tr>
			</table>
			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
			</div>
		</form>
	</div>
	<br><br>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>