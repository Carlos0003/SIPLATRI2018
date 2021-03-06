<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Add Abilities</title>
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
		<h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Competencia</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('abilities')}}">Lista Competencias</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Competencia</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('abilities')}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Nombre: </th>
					<td style="width: 400px;"> <input type="text" required name="name" class="form-control" placeholder="Nombre de la competencia" value="{{old('name')}}"></td>				
				</tr>
				<tr>
					<th> Programa al que pertenece: </th>
					<td style="width: 400px;"> <select required name="program_id" class="form-control">
							<option value="">Seleccione programa...</option>
							@foreach($programs as $program)
								<option value="{{ $program->id }}">{{ $program->name }}</option>
							@endforeach
						</select></td>	
				</tr>
				<tr>
					<th> Horas de duración: </th>
					<td style="width: 400px;"> <input type="number" required name="durationHour" class="form-control" placeholder="Horas" value="{{old('durationHour')}}"></td>
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