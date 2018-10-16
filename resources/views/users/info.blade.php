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
		<form action="{{url('miuser/'. Auth::user()->id)}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			{!! method_field('PUT') !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Documento: </th>
					<td> <input type="number" name="document" class="form-control" placeholder="Documento de Identidad" value="{{ Auth::user()->document }}"></td>				
				</tr>
				<tr>
					<th> Nombre Completo: </th>
					<td> <input type="text" name="fullname" class="form-control" placeholder="Nombre Completo" value="{{ Auth::user()->fullname }}"></td>				
				</tr>
				<tr>
					<th> Correo: </th>
					<td> <input type="email" name="email" class="form-control" placeholder="Correo" value="{{ Auth::user()->email }}"></td>				
				</tr>
				<tr>
					<th> Teléfono: </th>
					<td> <input type="number" name="phonenumber" class="form-control" placeholder="Telefono" value="{{ Auth::user()->phonenumber }}"></td>
				</tr>
				<tr>
					<th> Municipio: </th>
					<td> <input type="text" readonly name="municipality_id" class="form-control" value="{{ Auth::user()->munici->name }}"> </td>
				</tr>
				<tr>
					<th> Género: </th>
					<td> 
						<select name="gender" class="form-control">
							<option value="">Seleccione tipo de Género...</option>
							<option value="Masculino"{{Auth::user()->gender=='Masculino'?'selected':''}}>Masculino</option>
							<option value="Femenino"{{Auth::user()->gender=='Femenino'?'selected':''}}>Femenino</option>
						</select>
					</td>
				</tr>
				<tr>
					<th> Rol: </th>
					<td> <input type="text" readonly name="role" class="form-control" value="{{ Auth::user()->role }}">
					</td>				
				</tr>
				<tr>
					<th> Tipo de Contrato: </th>
					<td>
						<input type="text" readonly name="contract" class="form-control" value="{{Auth::user()->contract }}">
					</td>
				</tr>
				<tr>
					<th> Estado: </th>
					<td>
						<input type="text" readonly name="state" class="form-control" value="activo"{{Auth::user()->state}}">
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