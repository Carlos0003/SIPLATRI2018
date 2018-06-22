<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit-Classroom</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/siplatri2018.ico">
    <!-- Styles -->
</head>
<body>
	@extends('layouts.navbar')
	<div><br><br><br></div>
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Editar Ambiente</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('classroom')}}">Lista Ambiente</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Editar Ambiente</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('classroom/'.$classroom->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Nombre: </th>
					<td> <input type="text" required name="name" class="form-control" placeholder="Nombre del ambiente" value="{{$classroom->name}}"></td>				
				</tr>
				<tr>
					<th> Responsable: </th>
					<td> <select required name="user_id" class="form-control">
							<option value="">Seleccione responsable...</option>
							@foreach($responsables as $responsable)
								<option value="{{ $responsable->id }}" {{ $responsable->id==$responsable->id?'selected':'' }}>{{ $responsable->fullname }}</option>	
							@endforeach
						</select></td>				
				</tr>
				<tr>
					<th> Estado: </th>
					<td> <select required name="state" class="form-control">
							<option value="">Seleccione el estado...</option>
							<option value="activo" {{ $classroom->state=='activo'?'selected':'' }}>activo</option>
							<option value="inactivo" {{ $classroom->state=='inactivo'?'selected':'' }}>inactivo</option>
						</select></td>			
				</tr>
				<tr>
					<th> Uso: </th>
					<td> <input type="text" required name="usability" class="form-control" placeholder="Uso" value="{{$classroom->usability}}"></td>
				</tr>
			</table>
			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Actualizar</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>