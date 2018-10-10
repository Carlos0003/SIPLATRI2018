<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit-Programs</title>
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
	<div class="col-md-6 offset-3">
		<h1 class="text-center"><i class="fa fa-pencil-alt"></i> Editar Programa</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('program')}}">Lista Programa</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Editar Programa</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('program/'.$progr->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Nombre del Programa de Formación: </th>
					<td> <input type="text" required name="name" class="form-control" placeholder="Nombre del Programa de Formación" value="{{$progr->name}}"></td>				
				</tr>
				<tr>
					<th> Duración del Programa de Formación: </th>
					<td> {{-- <input type="text" required name="timeduration" class="form-control" placeholder="Duración del Programa de Formación" value="{{$progr->timeduration}}"> --}}
						<select required name="timeduration" class="form-control">
							<option value="">Seleccione Tiempo de duración...</option>
							<option value="2 trimestres"{{$progr->timeduration=='2 trimestres'?'selected':''}}>2 trimestres</option>
							<option value="4 trimestres"{{$progr->timeduration=='4 trimestres'?'selected':''}}>4 trimestres</option>
							<option value="8 trimestres"{{$progr->timeduration=='8 trimestres'?'selected':''}}>8 trimestres</option>
						</select>
					</td>				
				</tr>
				<tr>
					<th> Tipo del Programa de Formación: </th>
					<td> {{-- <input type="text" required name="type" class="form-control" placeholder="Tiempo del Programa de Formación" value="{{$progr->type}}"> --}}
						<select required name="type" class="form-control">
							<option value="">Seleccione Tipo de programa...</option>
							<option value="Especializacion"{{$progr->type=='Especializacion'?'selected':''}}>Especialización</option>
							<option value="Tecnico"{{$progr->type=='Tecnico'?'selected':''}}>Técnico</option>
							<option value="Tecnologo"{{$progr->type=='Tecnologo'?'selected':''}}>Tecnólogo</option>
							<option value="Auxiliar"{{$progr->type=='Auxiliar'?'selected':''}}>Auxiliar</option>
						</select>
					</td>				
				</tr>
			</table>
			<div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Update">Actualizar</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>