@extends('layouts.navbar')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit-RECORD</title>
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
	<br><br>
	<div class="col-md-12">
		<h1 class="text-center" style="font-size: 30px"><i class="fa fa-search"></i> Consultar Ficha</h1>
		<hr>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('record')}}">Lista Fichas</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Consultar Fichas</li>
		</ol>
		<table class="table table-striped table-hover text-center">
				<tr>
					<th colspan="24" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> INFORMACIÓN DE LA FICHA</strong>
					</th>
				</tr>
				<tr>
					<th colspan="2" class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">ID</th>
					<td colspan="2" style="text-align: center; font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">{{ $record->number }}</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">NOMBRE DEL PROGRAMA</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;" colspan="10">
						{{$record->nameprogram->name}}
					</td>
					<th class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">MODALIDAD</th>
					<td style="text-align: center; font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->modalidad }}</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TOTAL DE TRIMESTRES</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->nameprogram->timeduration }}
					</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TRIMESTRE ACTUAL</th>
					<td colspan="2" style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">{{ $record->trimestreActual }}</td>
				</tr>
				<tr>
					<th colspan="2" class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TIPO DE PROGRAMA</th>
					<td colspan="2" style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->nameprogram->type }}
                    </td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FECHA DE INICIO</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">{{ $record->fecha_inicio }}</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FECHA DE FIN</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">{{ $record->fecha_fin }}</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORAS PROGRAMADAS TRIMESTRE</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">{{ $record->horasProgramadas }}</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">GESTOR</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;" colspan="6">
						{{ $record->user->fullname }}
					</td>
					<th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">MUNICIPIO DE DESARROLLO</th>
					<td colspan="2" style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
						{{$record->municipios->name}}
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
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_PLunes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_PLunes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesLunes1->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomLunes1->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_PMartes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_PMartes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesMartes1->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomMartes1->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_PMiercoles}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_PMiercoles}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesMiercoles1->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomMiercoles1->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_PJueves}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_PJueves}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                       {{ $record->abilitiesJueves1->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomJueves1->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_PViernes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_PViernes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                       {{ $record->abilitiesViernes1->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomViernes1->name}}</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_PSabado}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_PSabado}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesSabado1->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">		{{ $record->classroomSabado1->name}}
					</td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorLunes1->fullname }}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">		{{ $record->instructorMartes1->fullname  }}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorMiercoles1->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorJueves1->fullname }}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorViernes1->fullname  }}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">		{{ $record->instructorSabado1->fullname  }}
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_SLunes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_SLunes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                       {{ $record->abilitiesLunes2->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomLunes2->name  }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_SMartes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_SMartes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                       {{ $record->abilitiesMartes2->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomMartes2->name }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_SMiercoles }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_SMiercoles }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesMiercoles2->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomMiercoles2->name }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_SJueves }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_SJueves }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesJueves2->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomJueves2->name }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_SViernes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_SViernes }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                       {{ $record->abilitiesViernes2->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{$record->classroomViernes2->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_SSabado }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_SSabado }}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                       {{ $record->abilitiesSabado2->name }}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">		{{ $record->classroomSabado2->name }}
					</td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorLunes2->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorMartes2->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorMiercoles2->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorJueves2->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorViernes2->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorSabado2->fullname}}
					</td>
				</tr>
				<tr>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_TLunes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_TLunes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                    	{{ $record->abilitiesLunes3->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomLunes3->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_TMartes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_TMartes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                    	{{ $record->abilitiesMartes3->name}} 
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomMartes3->name}}
					</td>
					
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_TMiercoles}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_TMiercoles}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesMiercoles3->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomMiercoles3->name}}
					</td>				
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_TJueves}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_TJueves}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesJueves3->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomJueves3->name}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_inicio_TViernes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
						{{ $record->hora_fin_TViernes}}
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        {{ $record->abilitiesViernes3->name}}
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->classroomViernes3->name}}
					</td>
					<td colspan="4" rowspan="2" style="background-color: #AEB6BF; border: 1px solid black;">
						<div class="contenedor" style="width: 780px; height: 400px; display: -webkit-flex; display: -ms-flexbox; display: flex; justify-content: space-between; align-items: flex-end; text-align: center;">
							<div class="elemento" style="text-decoration: overline;">FIRMA COORDINADOR ACADÉMICO</div>
							<div class="elemento" style="text-decoration: overline;">FIRMA GESTOR DE GRUPO</div>
							<div class="elemento" style="text-decoration: overline;">FIRMA SUBDIRECTOR CPIC</div>
						</div>
					</td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorLunes3->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorMartes3->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorMiercoles3->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorJueves3->fullname}}
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						{{ $record->instructorViernes3->fullname}}
					</td>
				</tr>
				<tr>
					<th colspan="24" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> {{ $record->nameprogram->name }}-{{ $record->number }}, GESTOR DE GRUPO {{ $record->user->fullname }}</strong>
					</th>
				</tr>
			</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>