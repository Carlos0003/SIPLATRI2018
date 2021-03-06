<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Add Programs</title>
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
		<h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Programa</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('program')}}">Lista Programas</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Programa</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('program')}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Nombre del Programa de Formación: </th>
					<td> <input type="text" required name="name" class="form-control" placeholder="* " value="{{old('name')}}"></td>				
				</tr>
				<tr>
					<th> Tipo del Programa de Formación: </th>
					<td> 
						<select name="type" class="form-control">
							<option value="">Seleccione Tipo de programa...</option>
							<option value="Especializacion">Especialización</option>
							<option value="Tecnologo">Tecnólogo</option>
							<option value="Tecnico">Técnico</option>
							<option value="Auxiliar">Auxiliar</option>
							<option value="Curso">Curso</option>
							<option value="Empresa">Empresa</option>
						</select>
						{{-- <input type="text" required name="type" class="form-control" placeholder="* " value="{{old('type')}}"> --}}
					</td>				
				</tr>
				<tr>
					<th> Tiempo del Programa de Formación: </th>
					<td> <select name="timeduration" class="form-control">
							<option value="">Seleccione Tiempo de duración...</option>
							<option value="2 trimestres">2 trimestres</option>
							<option value="4 trimestres">4 trimestres</option>
							<option value="8 trimestres">8 trimestres</option>
						</select>
						{{-- <input type="text" required name="timeduration" class="form-control" placeholder="* " value="timeduration"> --}}
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    </body>
</html>