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
		<div class="col-md-8 offset-2">
		<h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Ficha</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('record')}}">Lista Fichas</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Ficha</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('record')}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Id del Programa de formación: </th>
					<td> <input type="number" required name="idrecord" class="form-control" placeholder="Número de la Ficha" value="{{old('idrecord')}}"></td>				
				</tr>
				<tr>
					<th> Nombre del Programa de Formación: </th>
					<td> <select required name="program_id" class="form-control">
							<option value="">Seleccione nombre del programa...</option>
							@foreach($programsname as $programname)
								<option value="{{ $programname->id }}">{{ $programname->name }}</option>	
							@endforeach
						</select></td>			
				</tr>
				<tr>
					<th> Total Trimestres: </th>
					<td><select required name="totalquarter" class="form-control">
							<option value="">Seleccione cantidad de trimestres...</option>
							<option value="1">1 Trimestre</option>
							<option value="2">2 Trimestres</option>
							<option value="3">3 Trimestres</option>
							<option value="4">4 Trimestres</option>
							<option value="5">5 Trimestres</option>
							<option value="6">6 Trimestres</option>
							<option value="8">8 Trimestres</option>
						</select>
					</td>				
				</tr>
				<tr>
					<th> Etapa Actual: </th>
					<td><select required name="currentquarter" class="form-control">
							<option value="">Seleccione Trimestre Actual...</option>
							<option value="1">Trimestre 1</option>
							<option value="2">Trimestre 2</option>
							<option value="3">Trimestre 3</option>
							<option value="4">Trimestre 4</option>
							<option value="5">Trimestre 5</option>
							<option value="6">Trimestre 6</option>
							<option value="7">Productiva</option>
						</select>
					</td>				
				</tr>
				<tr>
					<th> Tipo de Programa: </th>
					<td>
						<select required name="programtype" class="form-control">
							<option value="">Seleccione tipo de Programa...</option>
							<option value="tecnico">Técnico</option>
							<option value="tecnologo">Tecnólogo</option>
							<option value="curso">Curso Corto</option>
						</select>
					</td>
				</tr>
				<tr>
					<th> Fecha Inicio: </th>
					<td> <input type="date" required name="startdate" class="form-control"></td>				
				</tr>
				<tr>
					<th> Fecha de Finalización: </th>
					<td> <input type="date" required name="endingdate" class="form-control"></td>				
				</tr>
				<tr>
					<th> Total Horas del Programa: </th>
					<td> <input type="number" required name="scheduledhours" class="form-control" placeholder="Total de horas" value="{{old('scheduledhours')}}"></td>
				</tr>
				<tr>
					<th> Gestor del Programa de Formación: </th>
					<td>
						<select name="groupmanager" class="form-control">
							<option value="">Asigne gestor para el programa...</option>
							@foreach($managers as $manager)
								<option value="{{ $manager->id }}">{{ $manager->fullname }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<th> Municipio de Ejecución: </th>
					<td>
						<select name="municipality" class="form-control">
							<option value="">Asigne Municipio de ejecución...</option>
							<option value="Aguadas">Aguadas</option>
							<option value="Anserma">Anserma</option>
							<option value="Aranzazu">Aranzazu</option>
							<option value="Belalcazar">Belalcázar</option>
							<option value="Chinchina">Chinchiná</option>
							<option value="Filadelfia">Filadelfia</option>
							<option value="Dorada">La Dorada</option>
							<option value="Merced">La Merced</option>
							<option value="Manizales">Manizales</option>
							<option value="Manzanares">Manzanares</option>
							<option value="Marmato">Marmato</option>
							<option value="Marquetalia">Marquetalia</option>
							<option value="Marulanda">Marulanda</option>
							<option value="Neira">Neira</option>
							<option value="Norcasia">Norcasia</option>
							<option value="Pacora">Pácora</option>
							<option value="Palestina">Palestina</option>
							<option value="Pensilvania">Pensilvania</option>
							<option value="Riosucio">Riosucio</option>
							<option value="Risaralda">Risaralda</option>
							<option value="Salamina">Salamina</option>
							<option value="Samana">Samaná</option>
							<option value="Sanjose">San José</option>
							<option value="Supia">Supía</option>
							<option value="Victoria">Victoria</option>
							<option value="Villamaria">Villamaría</option>
							<option value="Viterbo">Viterbo</option>
						</select></td>
				</tr>
				<tr>
					<th> Hora inicio de clase: </th>
					<td>
						<select name="starttime" class="form-control">
							<option value="">Inicio de clase...</option>
							<option value="1">07:00</option>
							<option value="2">08:00</option>
							<option value="3">09:00</option>
							<option value="4">09:30</option>
							<option value="5">10:00</option>
							<option value="6">11:00</option>
							<option value="7">12:00</option>
							<option value="8">13:00</option>
							<option value="9">14:00</option>
							<option value="10">15:00</option>
							<option value="11">15:30</option>
							<option value="12">16:00</option>
							<option value="13">17:00</option>
							<option value="14">18:00</option>
							<option value="15">19:00</option>
							<option value="16">20:00</option>
							<option value="17">20:30</option>
							<option value="18">21:00</option>
						</select></td>
				</tr>
				<tr>
					<th> Hora fin de clase: </th>
					<td>
						<select name="endtime" class="form-control">
							<option value="">Fin de clase...</option>
							<option value="1">08:00</option>
							<option value="2">09:00</option>
							<option value="3">09:30</option>
							<option value="4">10:00</option>
							<option value="5">11:00</option>
							<option value="6">12:00</option>
							<option value="7">13:00</option>
							<option value="8">14:00</option>
							<option value="9"">15:00</option>
							<option value="10">15:30</option>
							<option value="11">16:00</option>
							<option value="12">17:00</option>
							<option value="13">18:00</option>
							<option value="14">19:00</option>
							<option value="15">20:00</option>
							<option value="16">20:30</option>
							<option value="17">21:00</option>
							<option value="18">22:00</option>
						</select></td>
				</tr>
				<tr>
					<th> Ambiente asignado:</th>
					<td>
						<select name="classroom_id" class="form-control">
							<option value="">Asigne ambiente...</option>
							@foreach($classrooms as $classroom)
								<option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<th> Competencia: </th>
					<td> <input type="text" required name="matter" class="form-control" placeholder="Competencia" value="{{old('matter')}}"></td>
				</tr>
				<tr>
					<th> Instructor de la Competencia: </th>
					<td>
						<select name="user_id" class="form-control">
							<option value="">Asigne Instructor a la competencia...</option>
							@foreach($managers as $manager)
								<option value="{{ $manager->id }}">{{ $manager->fullname }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				
			</table>
			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>