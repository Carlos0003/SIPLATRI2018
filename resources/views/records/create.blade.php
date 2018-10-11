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
					<th colspan="14" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> INFORMACIÓN DE LA FICHA</strong>
					</th>
				</tr>
				<tr>
					<th class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">ID</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input placeholder="Digite ID de la Ficha" name="idFicha" type="number" style="width: 95px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">NOMBRE DEL PROGRAMA</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;" colspan="7">
						<select style="font-size: 12px; background-color: #AEB6BF;" required class="form-control" name="nombrePorgrama" id="programaFormacionTable">
							<option value="">Seleccione programa...</option>
							@foreach($programsname as $key => $program)
								<option value="{{ $program->id }}">{{ $program->name }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TOTAL DE TRIMESTRES</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
                        <input type="text" id="timeduration" style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" disabled>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TRIMESTRE ACTUAL</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input type="number" name="trimestreActual" style="font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" placeholder="# de trimestre"></td>
				</tr>
				<tr>
					<th class="text-center" style="width: 95px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">TIPO DE PROGRAMA</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
                        <input type="text" id="typeprogram" style="width: 95px;font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;" disabled>
                    </td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FECHA DE INICIO</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input style="font-size: 12px; background-color: #AEB6BF;" name="feinicio" type="date"></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FECHA DE FIN</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input style="font-size: 12px; background-color: #AEB6BF; outline-style: none;outline: none;" name="fefin" type="date"></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">HORAS PROGRAMADAS</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;"><input type="number" name="hProgramadas" style="font-size: 12px;"></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">GESTOR</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;" colspan="3">
						<select style="font-size: 12px; background-color: #AEB6BF;" required name="gestor" class="form-control">
							<option value="">Seleccione Gestor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">MUNICIPIO DE DESARROLLO</th>
					<td style="font-size: 12px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="font-size: 12px; background-color: #AEB6BF;" required name="municipio" class="form-control">
							<option value="">Seleccione Municipio...</option>
							@foreach($municipalities as $munici)
								<option value="{{ $munici->id }}">{{ $munici->name }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<th class="text-center" style="width: 250px;font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">HORAS PROGRAMADAS</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">LUNES</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">MARTES</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">MIERCOLES</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">JUEVES</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">VIERNES</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;" colspan="2">SABADO</th>
				</tr>
				<tr>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">INICIO</th>
					<th class="text-center" style="width: 95px; font-size: 12px; background-color: #34495E; color: white; border: 1px solid black;">FINAL</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">COMPETENCIA</th>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">AMBIENTE</th>
				</tr>
				<tr>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hInicio" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;" rowspan="2" class="text-center"><input type="time" name="hFin" style="width: 200px; font-size: 12px; border-style: none; text-align: center;background-color: #AEB6BF;"></td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_lunes_id" required>
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px; font-size: 12px; background-color: #AEB6BF;" required name="ambienteLunes" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_martes_id" required>
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="ambienteMartes" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_miercoles_id" required>
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="ambienteMiercoles" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_jueves_id" required>
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="ambienteJueves" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_viernes_id" required>
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="ambienteViernes" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
                        <select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" class="competenciaPrueba form-control" name="abilities_sabado_id" required>
                            <option value="0" selected disabled>Seleccione competencia</option>
                        </select>
                    </td>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="ambienteSabado" class="form-control">
							<option value="">Seleccione Ambientes...</option>
							@foreach($classrooms as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select></td>
				</tr>
				<tr>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="instructorLunes" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;"><select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="instructorMartes" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select></td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="instructorMiercoles" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="instructorJueves" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="instructorViernes" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>

					</td>
					<th class="text-center" style="font-size: 12px; background-color: #34495E; color: white; border: 1px solid black; width: 200px;">INSTRUCTOR</th>
					<td style="font-size: 12px; width:200px; border: 1px solid black; background-color: #AEB6BF;">
						<select style="width: 190px;font-size: 12px; background-color: #AEB6BF;" required name="instructorSabado" class="form-control">
							<option value="">Seleccione Instructor...</option>
							@foreach($managers as $user)
								<option value="{{ $user->id }}">{{ $user->fullname }}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<th colspan="14" class="text-center" style="font-size: 12px; background-color: #34495E; color: white; padding: 12px; border: 1px solid black;"><strong><i class="fas fa-info-circle"></i> php que imprima nombre Id, Nombre del programa seleccionado y gestor.</strong>
					</th>
				</tr>
				<tr>
					<th colspan="14"><button class="btn btn-secondary btn-lg btn-block" style="font-size: 12px; height: 30px; line-height: 50%; font-size: 18px;"> <i class="fa fa-save"></i> Enviar</button></th>
				</tr>
			</table>
			{{-- <div class="form-group">
				<button class="btn btn-outline-success" type="submit" value="Save">Adicionar</button>
			</div> --}}
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