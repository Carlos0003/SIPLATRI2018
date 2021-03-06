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
    <!-- <style media="screen">
        .mostrar{
            display: inline-block;
        }
    </style> -->
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
                <div style="display: none;">
                <input type="text" name="horas_InstructorPLUNES" id="horas_justificacion_real">
                <input type="text" placeholder="horas PMARTES" name="horas_InstructorPMartes" id="horas_InstructorPMartes">
                <input type="text" placeholder="horas_InstructorTLunes" name="horas_InstructorTLunes" id="horas_InstructorTLunes">
                <input type="text" placeholder="horas_InstructorSLunes" name="horas_InstructorSLunes" id="horas_InstructorSLunes">
                <input type="text" placeholder="horas_InstructorSMartes" name="horas_InstructorSMartes" id="horas_InstructorSMartes">
                <input type="text" placeholder="horas_InstructorTMartes" name="horas_InstructorTMartes" id="horas_InstructorTMartes">
                <input type="text" placeholder="horas_InstructorPMiercoles" name="horas_InstructorPMiercoles" id="horas_InstructorPMiercoles">
                <input type="text" placeholder="horas_InstructorSMiercoles" name="horas_InstructorSMiercoles" id="horas_InstructorSMiercoles">
                <input type="text" placeholder="horas_InstructorTMiercoles" name="horas_InstructorTMiercoles" id="horas_InstructorTMiercoles">
                <input type="text" placeholder="horas_InstructorPJueves" name="horas_InstructorPJueves" id="horas_InstructorPJueves">
                <input type="text" placeholder="horas_InstructorSJueves" name="horas_InstructorSJueves" id="horas_InstructorSJueves">
                <input type="text" placeholder="horas_InstructorTJueves" name="horas_InstructorTJueves" id="horas_InstructorTJueves">
                <input type="text" placeholder="horas_InstructorPViernes" name="horas_InstructorPViernes" id="horas_InstructorPViernes">
                <input type="text" placeholder="horas_InstructorSViernes" name="horas_InstructorSViernes" id="horas_InstructorSViernes">
                <input type="text" placeholder="horas_InstructorTViernes" name="horas_InstructorTViernes" id="horas_InstructorTViernes">
                <input type="text" placeholder="horas_InstructorPSabado" name="horas_InstructorPSabado" id="horas_InstructorPSabado">
                <input type="text" placeholder="horas_InstructorSSabado" name="horas_InstructorSSabado" id="horas_InstructorSSabado">
                </div>
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
                            <th colspan="2" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORAS PROGRAMADAS TRIMESTRE</th>
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

                            <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                <input type="time" id="hora_desde" name="hora_inicio_PLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></input>
                            </td>
                                <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                    <input type="time" id="hora_hasta" name="hora_fin_PLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></input>
                                </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PLunes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select id="pruebaSelect" disabled style="width: 190px; font-size: 12px; background-color: #AEB6BF;"  name="classrooms_PLunes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option  value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_inicio_PMartes" id="hora_inicio_PMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_fin_PMartes" id="hora_fin_PMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PMartes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_PMartes_id" disabled name="classrooms_PMartes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_inicio_PMiercoles" name="hora_inicio_PMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_fin_PMiercoles" name="hora_fin_PMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PMiercoles_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_PMiercoles_id" disabled name="classrooms_PMiercoles_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_PJueves" name="hora_inicio_PJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_PJueves" name="hora_fin_PJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PJueves_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_PJueves_id" disabled name="classrooms_PJueves_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_PViernes" name="hora_inicio_PViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_PViernes" name="hora_fin_PViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PViernes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="classrooms_PViernes_id" disabled name="classrooms_PViernes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_PSabado" name="hora_inicio_PSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_PSabado" name="hora_fin_PSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_PSabado_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_PSabado_id" disabled name="classrooms_PSabado_id" class="form-control">
                                        <option value="">Seleccione Ambientes...</option>
                                        @foreach($classrooms as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select></td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_PLunes_id" name="instructor_PLunes_id" disabled class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_PMartes_id" name="instructor_PMartes_id" disabled class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_PMiercoles_id" name="instructor_PMiercoles_id" disabled class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_PJueves_id" disabled name="instructor_PJueves_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_PViernes_id" disabled name="instructor_PViernes_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"   id="instructor_PSabado_id" disabled name="instructor_PSabado_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>


                                {{-- SEGUNDA CLASE DIA A DIA --}}

                                <tr>


                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_inicio_SLunes" id="hora_inicio_SLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_fin_SLunes" id="hora_fin_SLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SLunes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" id="classrooms_SLunes_id" disabled  name="classrooms_SLunes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_inicio_SMartes" id="hora_inicio_SMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_fin_SMartes" id="hora_fin_SMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SMartes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_SMartes_id" disabled name="classrooms_SMartes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_inicio_SMiercoles" name="hora_inicio_SMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_fin_SMiercoles" name="hora_fin_SMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SMiercoles_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_SMiercoles_id" disabled  name="classrooms_SMiercoles_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_SJueves" name="hora_inicio_SJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_SJueves" name="hora_fin_SJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SJueves_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_SJueves_id" disabled  name="classrooms_SJueves_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_SViernes" name="hora_inicio_SViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_SViernes" name="hora_fin_SViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SViernes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="classrooms_SViernes_id" disabled name="classrooms_SViernes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_SSabado" name="hora_inicio_SSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_SSabado" name="hora_fin_SSabado" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_SSabado_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classrooms_SSabado_id" disabled name="classrooms_SSabado_id" class="form-control">
                                        <option value="">Seleccione Ambientes...</option>
                                        @foreach($classrooms as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select></td>
                                </tr>
                                <tr>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_SLunes_id" disabled name="instructor_SLunes_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_SMartes_id" name="instructor_SMartes_id" disabled class="form-control">
                                        <option value="">Seleccione Instructor...</option>
                                       @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                    </select></td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_SMiercoles_id" disabled name="instructor_SMiercoles_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_SJueves_id" disabled name="instructor_SJueves_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_SViernes_id" disabled name="instructor_SViernes_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_SSabado_id" disabled name="instructor_SSabado_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>

                                {{-- tercera clase dia a dia --}}
                                <tr>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_inicio_TLunes" id="hora_inicio_TLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" name="hora_fin_TLunes" id="hora_fin_TLunes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TLunes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" id="classroom_TLunes_id" disabled name="classroom_TLunes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_inicio_TMartes" name="hora_inicio_TMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_fin_TMartes" name="hora_fin_TMartes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TMartes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classroom_TMartes_id" disabled name="classroom_TMartes_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_inicio_TMiercoles" name="hora_inicio_TMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center">
                                        <input type="time" id="hora_fin_TMiercoles" name="hora_fin_TMiercoles" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TMiercoles_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classroom_TMiercoles_id" disabled name="classroom_TMiercoles_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_TJueves" name="hora_inicio_TJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_TJueves" name="hora_fin_TJueves" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TJueves_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" id="classroom_TJueves_id" disabled name="classroom_TJueves_id" class="form-control">
                                            <option value="">Seleccione Ambientes...</option>
                                            @foreach($classrooms as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_inicio_TViernes" name="hora_inicio_TViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" id="hora_fin_TViernes" name="hora_fin_TViernes" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_TViernes_id" >
                                            <option value="0" selected disabled>Seleccione competencia</option>
                                        </select>
                                    </td>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="classroom_TViernes_id" name="classroom_TViernes_id" class="form-control">
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
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_TLunes_id" disabled name="instructor_TLunes_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                           @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_TMartes_id" disabled name="instructor_TMartes_id" class="form-control">
                                        <option value="">Seleccione Instructor...</option>
                                       @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                    </select></td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_TMiercoles_id" disabled name="instructor_TMiercoles_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"  id="instructor_TJueves_id" disabled name="instructor_TJueves_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
                                    <td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;"   id="instructor_TViernes_id" disabled name="instructor_TViernes_id" class="form-control">
                                            <option value="">Seleccione Instructor...</option>
                                            @foreach($managers as $user)
                                            <option value="{{ $user->id }}">
                                                {{ $user->fullname }}
                                                @if ($user->cumulativeHour >= 1)
                                                @if ($user->cumulativeHour >= 40)
                                                    <strong>Cumplió {{ $user->cumulativeHour }} Horas Laboradas</strong>
                                                @else
                                                    Horas laboradas: {{ $user->cumulativeHour }}
                                                @endif
                                            @endif
                                            </option>
                                            @endforeach
                                        </select>

                                    </td>
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


<script>

    $('form').on('change','#programaFormacionTable', function(event) {
        event.preventDefault();
        $did=$(this).val();
        $a=$(this).parent();
        $op = " ";
        $.ajax({
            'type': 'get',
            url: '{{URL::to('/programaFormacionSeleccionado')}}',
            data:{'id':$did},
            success:function(data){

                $timeduration = data.timeduration;
                $('#timeduration').val($timeduration);
                $typeprogram = data.type;
                console.log($timeduration);
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

    $('form').on('change','#hora_hasta', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_desde').val();
        $dateHasta = $('#hora_hasta').val();
        $horario = "horarioPLunes";
        $horarioInstructor = "horarioIPLunes";

        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_desde').val().split(":"));
            var hora_f = newDate($('#hora_hasta').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_justificacion_real').val(prefijo(horas));
        // FIN CONTEO DE HORAS



        $('select#pruebaSelect option').each(function(){
            $(this).show();
        });
        $('select#instructor_PLunes_id option').each(function(){
            $(this).show();
        });
        $('#pruebaSelect').removeAttr("disabled");
        $('#instructor_PLunes_id').removeAttr("disabled");


        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                for (var i = 0; i < data.length; i++) {
                    $('#pruebaSelect option[value="'+data[i].classrooms_PLunes_id+'"]').attr("disabled", true);                   
                    console.log(data[i].classrooms_PLunes_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                for (var i = 0; i < data.length; i++) {
                    $('#instructor_PLunes_id option[value="'+data[i].instructor_PLunes_id+'"]').attr("disabled", true);
                    console.log('INSTRUCTOR:' + data[i].instructor_PLunes_id);
                }
            },
            error:function(){

            }
        });


    });

    $('form').on('change','#hora_fin_SLunes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_SLunes').val();
        $dateHasta = $('#hora_fin_SLunes').val();
        $horario = "horarioSLunes";
        $horarioInstructor = "horarioISLunes";


        $('select#classrooms_SLunes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_SLunes_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_SLunes_id').removeAttr("disabled");
        $('#instructor_SLunes_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_SLunes').val().split(":"));
            var hora_f = newDate($('#hora_fin_SLunes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorSLunes').val(prefijo(horas));
        // FIN CONTEO DE HORAS


        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_SLunes_id option[value="'+data[i].classroom_SLunes_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_SLunes_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_SLunes_id option[value="'+data[i].instructor_SLunes_id+'"]').attr("disabled", true);
                    console.log('Instructor' + data[i].instructor_SLunes_id);
                }
            },
            error:function(){

            }
        });

    });

    $('form').on('change','#hora_fin_TLunes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_TLunes').val();
        $dateHasta = $('#hora_fin_TLunes').val();
        $horario = "horarioTLunes";
        $horarioInstructor = "horarioITLunes";


        $('select#classroom_TLunes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_TLunes_id option').each(function(){
            $(this).show();
        });
        $('#classroom_TLunes_id').removeAttr("disabled");
        $('#instructor_TLunes_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_TLunes').val().split(":"));
            var hora_f = newDate($('#hora_fin_TLunes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorTLunes').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        // console.log($dateHasta);
        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    // $op+= '<option value="'+data[i].type+'">'+data[i].timeduration+'</option>';
                    $('#classroom_TLunes_id option[value="'+data[i].classroom_TLunes_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_TLunes_id);
                }
            },
            error:function(){

            }
        });


        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    // $op+= '<option value="'+data[i].type+'">'+data[i].timeduration+'</option>';
                    $('#instructor_TLunes_id option[value="'+data[i].instructor_TLunes_id+'"]').attr("disabled", true);
                    console.log('Instructor' + data[i].instructor_TLunes_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_PMartes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_PMartes').val();
        $dateHasta = $('#hora_fin_PMartes').val();
        $horario = "horarioPMartes";
        $horarioInstructor = "horarioIPMartes";

            // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_PMartes').val().split(":"));
            var hora_f = newDate($('#hora_fin_PMartes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorPMartes').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $('select#classrooms_PMartes_id option').each(function(){
            $(this).show();
        });

        $('#classrooms_PMartes_id').removeAttr("disabled");
        $('#instructor_PMartes_id').removeAttr("disabled");

        // console.log($dateHasta);
        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    // $op+= '<option value="'+data[i].type+'">'+data[i].timeduration+'</option>';
                    $('#classrooms_PMartes_id option[value="'+data[i].classrooms_PMartes_id+'"]').attr("disabled", true);
                    console.log(data[i].classrooms_PMartes_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    // $op+= '<option value="'+data[i].type+'">'+data[i].timeduration+'</option>';
                    $('#instructor_PMartes_id option[value="'+data[i].instructor_PMartes_id+'"]').attr("disabled", true);
                    console.log('Instructor'+data[i].instructor_PMartes_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_SMartes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_SMartes').val();
        $dateHasta = $('#hora_fin_SMartes').val();
        $horario = "horarioSMartes";
        $horarioInstructor = "horarioISMartes";


        $('select#classrooms_SMartes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_SMartes_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_SMartes_id').removeAttr("disabled");
        $('#instructor_SMartes_id').removeAttr("disabled");


        // console.log($dateHasta);

         // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_SMartes').val().split(":"));
            var hora_f = newDate($('#hora_fin_SMartes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorSMartes').val(prefijo(horas));
        // FIN CONTEO DE HORAS
        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    // $op+= '<option value="'+data[i].type+'">'+data[i].timeduration+'</option>';
                    $('#classrooms_SMartes_id option[value="'+data[i].classroom_SMartes_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_SMartes_id);
                }
            },
            error:function(){

            }
        });
        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    // $op+= '<option value="'+data[i].type+'">'+data[i].timeduration+'</option>';
                    $('#instructor_SMartes_id option[value="'+data[i].instructor_SMartes_id+'"]').attr("disabled", true);
                    console.log('Instructor'+data[i].instructor_SMartes_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_TMartes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_TMartes').val();
        $dateHasta = $('#hora_fin_TMartes').val();
        $horario = "horarioTMartes";
        $horarioInstructor = "horarioITMartes";


        $('select#classroom_TMartes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_TMartes_id option').each(function(){
            $(this).show();
        });
        $('#classroom_TMartes_id').removeAttr("disabled");
        $('#instructor_TMartes_id').removeAttr("disabled");

         // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_TMartes').val().split(":"));
            var hora_f = newDate($('#hora_fin_TMartes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorTMartes').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classroom_TMartes_id option[value="'+data[i].classroom_TMartes_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_TMartes_id);
                }
            },
            error:function(){

            }
        });
        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_TMartes_id option[value="'+data[i].instructor_TMartes_id+'"]').attr("disabled", true);
                    console.log('Instructor'+data[i].instructor_TMartes_id);
                }
            },
            error:function(){

            }
        });

    });

    $('form').on('change','#hora_fin_PMiercoles', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_PMiercoles').val();
        $dateHasta = $('#hora_fin_PMiercoles').val();
        $horario = "horarioPMiercoles";
        $horarioInstructor = "horarioIPMiercoles";

        $('select#classrooms_PMiercoles_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_PMiercoles_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_PMiercoles_id').removeAttr("disabled");
        $('#instructor_PMiercoles_id').removeAttr("disabled");


         // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_PMiercoles').val().split(":"));
            var hora_f = newDate($('#hora_fin_PMiercoles').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorPMiercoles').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_PMiercoles_id option[value="'+data[i].classrooms_PMiercoles_id+'"]').attr("disabled", true);
                    console.log(data[i].classrooms_PMiercoles_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_PMiercoles_id option[value="'+data[i].instructor_PMiercoles_id+'"]').attr("disabled", true);
                    console.log('Instructor'+data[i].instructor_PMiercoles_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_SMiercoles', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_SMiercoles').val();
        $dateHasta = $('#hora_fin_SMiercoles').val();
        $horario = "horarioSMiercoles";
        $horarioInstructor = "horarioISMiercoles";

        $('select#classrooms_SMiercoles_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_SMiercoles_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_SMiercoles_id').removeAttr("disabled");
        $('#instructor_SMiercoles_id').removeAttr("disabled");


         // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_SMiercoles').val().split(":"));
            var hora_f = newDate($('#hora_fin_SMiercoles').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorSMiercoles').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_SMiercoles_id option[value="'+data[i].classroom_SMiercoles_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_SMiercoles_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_SMiercoles_id option[value="'+data[i].instructor_SMiercoles_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_SMiercoles_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_TMiercoles', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_TMiercoles').val();
        $dateHasta = $('#hora_fin_TMiercoles').val();
        $horario = "horarioTMiercoles";
        $horarioInstructor = "horarioITMiercoles";

        $('select#classroom_TMiercoles_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_TMiercoles_id option').each(function(){
            $(this).show();
        });
        $('#classroom_TMiercoles_id').removeAttr("disabled");
        $('#instructor_TMiercoles_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_TMiercoles').val().split(":"));
            var hora_f = newDate($('#hora_fin_TMiercoles').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorTMiercoles').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classroom_TMiercoles_id option[value="'+data[i].classroom_TMiercoles_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_TMiercoles_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_TMiercoles_id option[value="'+data[i].instructor_TMiercoles_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_TMiercoles_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_PJueves', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_PJueves').val();
        $dateHasta = $('#hora_fin_PJueves').val();
        $horario = "horarioPJueves";
        $horarioInstructor = "horarioIPJueves";

        $('select#classrooms_PJueves_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_PJueves_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_PJueves_id').removeAttr("disabled");
        $('#instructor_PJueves_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_PJueves').val().split(":"));
            var hora_f = newDate($('#hora_fin_PJueves').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorPJueves').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_PJueves_id option[value="'+data[i].classrooms_PJueves_id+'"]').attr("disabled", true);
                    console.log(data[i].classrooms_PJueves_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_PJueves_id option[value="'+data[i].instructor_PJueves_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_PJueves_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_SJueves', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_SJueves').val();
        $dateHasta = $('#hora_fin_SJueves').val();
        $horario = "horarioTJueves";
        $horarioInstructor = "horarioITJueves";

        $('select#classrooms_SJueves_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_SJueves_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_SJueves_id').removeAttr("disabled");
        $('#instructor_SJueves_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_SJueves').val().split(":"));
            var hora_f = newDate($('#hora_fin_SJueves').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorSJueves').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classroom_SJueves_id option[value="'+data[i].classroom_SJueves_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_SJueves_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_SJueves_id option[value="'+data[i].instructor_SJueves_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_SJueves_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_TJueves', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_TJueves').val();
        $dateHasta = $('#hora_fin_TJueves').val();
        $horario = "horarioTJueves";
        $horarioInstructor = "horarioITJueves";

        $('select#classroom_TJueves_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_TJueves_id option').each(function(){
            $(this).show();
        });
        $('#classroom_TJueves_id').removeAttr("disabled");
        $('#instructor_TJueves_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_TJueves').val().split(":"));
            var hora_f = newDate($('#hora_fin_TJueves').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorTJueves').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classroom_TJueves_id option[value="'+data[i].classroom_TJueves_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_TJueves_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_TJueves_id option[value="'+data[i].instructor_TJueves_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_TJueves_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_PViernes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_PViernes').val();
        $dateHasta = $('#hora_fin_PViernes').val();
        $horario = "horarioPViernes";
        $horarioInstructor = "horarioIPViernes";

        $('select#classrooms_PViernes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_PViernes_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_PViernes_id').removeAttr("disabled");
        $('#instructor_PViernes_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_PViernes').val().split(":"));
            var hora_f = newDate($('#hora_fin_PViernes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorPViernes').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_PViernes_id option[value="'+data[i].classrooms_PViernes_id+'"]').attr("disabled", true);
                    console.log(data[i].classrooms_PViernes_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_PViernes_id option[value="'+data[i].instructor_PViernes_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_PViernes_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_SViernes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_SViernes').val();
        $dateHasta = $('#hora_fin_SViernes').val();
        $horario = "horarioSViernes";
        $horarioInstructor = "horarioISViernes";
        $('select#classrooms_SViernes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_SViernes_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_SViernes_id').removeAttr("disabled");
        $('#instructor_SViernes_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_SViernes').val().split(":"));
            var hora_f = newDate($('#hora_fin_SViernes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorSViernes').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_SViernes_id option[value="'+data[i].classroom_SViernes_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_SViernes_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_SViernes_id option[value="'+data[i].instructor_SViernes_id+'"]').attr("disabled", true);
                    console.log(data[i].instructor_SViernes_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_TViernes', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_TViernes').val();
        $dateHasta = $('#hora_fin_TViernes').val();
        $horario = "horarioTViernes";
        $horarioInstructor = "horarioITViernes";
        $('select#classroom_TViernes_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_TViernes_id option').each(function(){
            $(this).show();
        });
        $('#classroom_TViernes_id').removeAttr("disabled");
        $('#instructor_TViernes_id').removeAttr("disabled");

        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_TViernes').val().split(":"));
            var hora_f = newDate($('#hora_fin_TViernes').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorTViernes').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classroom_TViernes_id option[value="'+data[i].classroom_TViernes_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_TViernes_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_TViernes_id option[value="'+data[i].instructor_TViernes_id+'"]').attr("disabled", true);
                    console.log('INSTRUCTOR'+data[i].instructor_TViernes_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_PSabado', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_PSabado').val();
        $dateHasta = $('#hora_fin_PSabado').val();
        $horario = "horarioPSabado";
        $horarioInstructor = "horarioIPSabado";

        $('select#classrooms_PSabado_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_PSabado_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_PSabado_id').removeAttr("disabled");
        $('#instructor_PSabado_id').removeAttr("disabled");

        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_PSabado').val().split(":"));
            var hora_f = newDate($('#hora_fin_PSabado').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorPSabado').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_PSabado_id option[value="'+data[i].classrooms_PSabado_id+'"]').attr("disabled", true);
                    console.log(data[i].classrooms_PSabado_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_PSabado_id option[value="'+data[i].instructor_PSabado_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_PSabado_id);
                }
            },
            error:function(){

            }
        });
    });

    $('form').on('change','#hora_fin_SSabado', function(event) {
        event.preventDefault();
        $dateDesde = $('#hora_inicio_SSabado').val();
        $dateHasta = $('#hora_fin_SSabado').val();
        $horario = "horarioSSabado";
        $horarioInstructor = "horarioISSabado";

        $('select#classrooms_SSabado_id option').each(function(){
            $(this).show();
        });
        $('select#instructor_SSabado_id option').each(function(){
            $(this).show();
        });
        $('#classrooms_SSabado_id').removeAttr("disabled");
        $('#instructor_SSabado_id').removeAttr("disabled");


        // CONTEO DE HORAS
        function newDate(partes) {
        var date = new Date(0);
        date.setHours(partes[0]);
        date.setMinutes(partes[1]);
        return date;
        }

        function prefijo(num) {
            return num < 10 ? ("0" + num) : num;
        }

            var hora_i = newDate($('#hora_inicio_SSabado').val().split(":"));
            var hora_f = newDate($('#hora_fin_SSabado').val().split(":"));

            if (hora_f <  hora_i) {
                alert('hora final menor a hora inicial');
            }
            var minutos = (hora_f - hora_i)/1000/60;
            var horas = Math.floor(minutos/60);
            minutos = minutos % 60;

        $('#horas_InstructorSSabado').val(prefijo(horas));
        // FIN CONTEO DE HORAS

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacion')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horario':$horario},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#classrooms_SSabado_id option[value="'+data[i].classroom_SSabado_id+'"]').attr("disabled", true);
                    console.log(data[i].classroom_SSabado_id);
                }
            },
            error:function(){

            }
        });

        $.ajax({
            'type': 'get',
            url: '{{URL::to('/validacionInstructor')}}',
            data:{'dateDesde':$dateDesde, 'dateHasta':$dateHasta, 'horarioInstructor':$horarioInstructor},

            success:function(data){
                console.log(data);
                for (var i = 0; i < data.length; i++) {

                    $('#instructor_SSabado_id option[value="'+data[i].instructor_SSabado_id+'"]').attr("disabled", true);
                    console.log('instructor'+data[i].instructor_SSabado_id);
                }
            },
            error:function(){

            }
        });
    });
</script>
</body>
</html>