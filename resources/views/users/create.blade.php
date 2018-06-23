<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Agregar Persona</title>
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
		<h1 class="text-center"><i class="fa fa-plus"></i> Adicionar Usuario</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('user')}}">Lista Usuarios</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Adicionar Usuario</li>
		</ol>
		@include('layouts.validation_errors')
		<form action="{{url('user')}}" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<table class="table table-striped table-hover text-center">
				<tr>
					<th> Documento: </th>
					<td> <input type="number" required name="document" class="form-control" placeholder="Documento de Identidad" value="{{old('document')}}"></td>				
				</tr>
				<tr>
					<th> Nombre Completo: </th>
					<td> <input type="text" name="fullname" class="form-control" placeholder="Nombre Completo" value="{{old('fullname')}}"></td>				
				</tr>
				<tr>
					<th> Correo: </th>
					<td> <input type="email" name="email" class="form-control" placeholder="Correo" value="{{old('email')}}"></td>				
				</tr>
				<tr>
					<th> Contraseña: </th>
					<td> <input type="password" name="password" class="form-control" placeholder="Contraseña"></td>				
				</tr>
				<tr>
					<th> Teléfono: </th>
					<td> <input type="number" name="phonenumber" class="form-control" placeholder="Telefono" value="{{old('phonenumber')}}"></td>
				</tr>
				<tr>
					<th> Municipio: </th>
					<td> <input type="text" name="municipality" class="form-control" placeholder="Ciudad de Empleo" value="{{old('municipality')}}"></td>
				</tr>
				<tr>
					<th> Género: </th>
					<td>
						<select name="gender" class="form-control">
							<option value="">Seleccione tipo de contrato...</option>
							<option value="Masculino">Masculino</option>
							<option value="Femenino">Femenino</option>
						</select>
					</td>
				</tr>
				<tr>
					<th> Rol: </th>
					<td>
						<select name="role" class="form-control">
							<option value="">Seleccione tipo de contrato...</option>
							<option value="Instructor">Instructor</option>
							<option value="Admin">Administrador</option>
							<option value="Almac">Almacen</option>
						</select>
					</td>				
				</tr>
				<tr>
					<th> Tipo de Contrato: </th>
					<td>
						<select name="contract" class="form-control">
							<option value="">Seleccione tipo de contrato...</option>
							<option value="PrestacionServicios">Prestacion de Servicios</option>
							<option value="PersonalPlanta">Personal de Planta</option>
						</select></td>
				</tr>
				<tr>
					<th> Estado: </th>
					<td>
						<select name="state" class="form-control">
							<option value="">Seleccione tipo de contrato...</option>
							<option value="activo">activo</option>
							<option value="inactivo">inactivo</option>
						</select></td></td>				
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