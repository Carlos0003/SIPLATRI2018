﻿<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Show Users</title>
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
		<h1 class="text-center" style="font-size: 30px"><i class="fa fa-search"></i> Consultar Usuario</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('user')}}">Lista Usuarios</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Consultar Usuarios</li>
		</ol>
		<table class="table table-striped table-hover text-center">
			{{-- <tr>
				<th> Id: </th>
				<td> {{ $user->id }}</td>				
			</tr> --}}
			<tr>
				<th> Documento: </th>
				<td> {{ $user->document }}</td>				
			</tr>
			<tr>
				<th> Nombre Completo: </th>
				<td> {{ $user->fullname }}</td>				
			</tr>
			<tr>
				<th> Correo: </th>
				<td> {{ $user->email }}</td>				
			</tr>
			<tr>
				<th> Teléfono: </th>
				<td> {{ $user->phonenumber }}</td>
			</tr>
			<tr>
				<th> Municipio: </th>
				<td> {{ $user->municipality }}</td>
			</tr>
			<tr>
				<th> Rol: </th>
				<td> {{ $user->role }}</td>				
			</tr>
			<tr>
				<th> Tipo de Contrato: </th>
				<td> {{ $user->contract }}</td>				
			</tr>
			<tr>
				<th> Estado: </th>
				<td> {{ $user->state }}</td>				
			</tr>
		</table>

	</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>