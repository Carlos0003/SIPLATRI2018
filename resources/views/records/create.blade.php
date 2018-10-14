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
			<table class="col-md-12" border="1px solid black" style="font-size: 12px;">
				<tr>
					<th colspan="24" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> INFORMACIÓN DE LA FICHA</strong>
					</th>
				</tr>
				<tr>
					<th colspan="2" class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">ID</th>
					<td colspan="2" style="text-align: center; font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input required placeholder="Digite ID de la Ficha" name="number" type="number" style="width: 95px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">NOMBRE DEL PROGRAMA</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;" colspan="10">
						<select style="font-size: 12px; background-color: #AEB6BF;" required class="form-control" name="program_id" id="programaFormacionTable">
							<option value="">Seleccione programa...</option>
							@foreach($programsname as $key => $program)
								<option value="{{ $program->id }}">{{ $program->name }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">MODALIDAD</th>
					<td style="text-align: center; font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
						<select required name="modalidad" class="form-control" style="font-size: 12px; background-color: #AEB6BF;">
							<option value="">Seleccione Modalidad...</option>
							<option value="Jornada Diurna">Jornada Diurna</option>
							<option value="Jornada Nocturna">Jornada Nocturna</option>
							<option value="Jornada Mixta">Jornada Mixta</option>
							<option value="Jornada Sabatina">Jornada Sabatina</option>
						</select></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TOTAL DE TRIMESTRES</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
                        <input type="text" id="timeduration" style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" disabled>
					</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TRIMESTRE ACTUAL</th>
					<td colspan="2" style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input type="number" required name="trimestreActual" style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" placeholder="# de trimestre"></td>
				</tr>
				<tr>
					<th colspan="2" class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TIPO DE PROGRAMA</th>
					<td colspan="2" style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
                        <input type="text" id="typeprogram" style="width: 95px;font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" disabled>
                    </td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FECHA DE INICIO</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" name="fecha_inicio" required type="date"></td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FECHA DE FIN</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" name="fecha_fin" type="date" required></td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORAS PROGRAMADAS</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input type="number" required name="horasProgramadas" style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">GESTOR</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;" colspan="6">
						<select style="font-size: 12px; background-color: #AEB6BF;" required name="user_id" class="form-control">
							<option value="">Seleccione Gestor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">MUNICIPIO DE DESARROLLO</th>
					<td colspan="2" style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="font-size: 12px; background-color: #AEB6BF;" required name="municipality_id" class="form-control">
							<option value="">Seleccione Municipio...</option>
							@foreach($municipalities as $munici)
								<option value="{{ $munici->id }}">{{ $munici->name }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<th colspan="4" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">LUNES</th>
					<th colspan="4" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">MARTES</th>
					<th colspan="4" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">MIERCOLES</th>
					<th colspan="4" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">JUEVES</th>
					<th colspan="4" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">VIERNES</th>
					<th colspan="4" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">SABADO</th>
				</tr>
				<tr>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORA FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
				</tr>
				<tr>
				{{-- PRIMERA CLASE DIA A DIA --}}

					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_PLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_PLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PLunes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px; font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PLunes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_PMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_PMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PMartes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PMartes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_PMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_PMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PMiercoles_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PMiercoles_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_PJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_PJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SJueves_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PJueves_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_PViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_PViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SViernes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PViernes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_PSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_PSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SSabado_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PSabado_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select></td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_PLunes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_PMartes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_PMiercoles_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_PJueves_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_PViernes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_PSabado_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
				</tr>


				{{-- SEGUNDA CLASE DIA A DIA --}}

				<tr>
				

					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_SLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_SLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SLunes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px; font-size: 12px; background-color: #AEB6BF;"  name="classrooms_SLunes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_SMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_SMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SMartes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_SMartes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_SMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_SMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SMiercoles_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_SMiercoles_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_SJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_SJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SJueves_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_SJueves_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_SViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_SViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SViernes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_SViernes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_SSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_SSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SSabado_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classrooms_SSabado_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select></td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_SLunes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_SMartes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_SMiercoles_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_SJueves_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_SViernes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_SSabado_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				
				{{-- tercera clase dia a dia --}}
				<tr>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_TLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_TLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TLunes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px; font-size: 12px; background-color: #AEB6BF;"  name="classroom_TLunes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>

					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_TMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_TMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PMartes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classroom_TMartes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_TMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_TMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TMiercoles_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classroom_TMiercoles_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_TJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_TJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TJueves_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classroom_TJueves_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_inicio_TViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hora_fin_TViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TViernes_id" >
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="classroom_TViernes_id" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td colspan="4" rowspan="2" style="background-color: #AEB6BF;">
						<div class="contenedor" style="width: 780px; height: 76px; display: -webkit-flex; display: -ms-flexbox; display: flex; justify-content: space-between; align-items: flex-end; text-align: center;">
							<div class="elemento" style="text-decoration: overline;">FIRMA COORDINADOR ACADÉMICO</div>
							<div class="elemento" style="text-decoration: overline;">FIRMA GESTOR DE GRUPO</div>
							<div class="elemento" style="text-decoration: overline;">FIRMA SUBDIRECTOR CPIC</div>
						</div>
					</td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_TLunes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_TMartes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_TMiercoles_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_TJueves_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  name="instructor_TViernes_id" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
				</tr>					
				<tr>
					<th colspan="24" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> {{ 'number','program_id', 'user_id' }}php que imprima nombre Id, Nombre del programa seleccionado y gestor.</strong>
					</th>
				</tr>
				<tr>
					<th colspan="24"><button class="btn btn-secondary btn-lg btn-block" style="font-size: 12px; height: 30px; line-height: 50%; font-size: 18px; background-color: #238276;"> <i class="fa fa-save"></i> Enviar</button></th>
				</tr>
			</table>
		</form>
	</div>
	<br><br>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>

<script>
	 $('form').on('change','#programaFormacionTable', function(event) {
                event.preventDefault();
                $did=$(this).val();
                // $div=$(this).parent();
                $a=$(this).parent();
                console.log($did);

                $op = " ";

                $.ajax({
                    'type': 'get',
                    url: '{{URL::to('/programaFormacionSeleccionado')}}',
                    data:{'id':$did},
                    success:function(data){
                        // $op+='<option value="0" selected disabled>Seleccione producto</option>';

                        $timeduration = data.timeduration;
                        $('#timeduration').val($timeduration);

                        $typeprogram = data.type;
                        $('#typeprogram').val($typeprogram);


                    },
                    error:function(){

                    }
                });

                $.ajax({
                    'type': 'get',
                    url: '{{URL::to('/competencias')}}',
                    data:{'id':$did},
                    success:function(data){

                        $op+='<option value="0" selected disabled>Seleccione competencia</option>';
                        for (var i = 0; i < data.length; i++) {
                            $op+= '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                        }
                        $('.competenciaPrueba').html($op);


                    },
                    error:function(){

                    }
                });
            });


</script>