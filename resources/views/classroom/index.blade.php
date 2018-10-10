<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Index-Classrooms</title>
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
		<div class="col-md-10 offset-1">
			<h1 class="text-center" style="font-size: 30px"><i class="fas fa-warehouse"></i> Lista de Ambientes</h1>
			<hr>
			<ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="{{url('home')}}">Inicio</a></li>
	            <li class="breadcrumb-item active" aria-current="page">Lista Ambientes</li>
	        </ol>
			<a href="{{ url('classroom/create')}}" class="btn btn-outline-info">
				<i class="fa fa-plus"></i> Agregar Ambiente
			</a>
			<a href="{{url('classroom/pdf')}}" class="btn btn-outline-primary">
				<i class="fa fa-file-pdf">  Exportar</i>
			</a>
			<a href="{{url('classroom/excel')}}" class="btn btn-outline-success">
				<i class="fa fa-file-excel">  Exportar</i>
			</a>
			<hr>
			<form class="form-inline" action="{{ url('classroom/search') }}">
				<div class="form-group">
					<input type="search" class="form-control" name="name" placeholder="Ingrese su busqueda">&nbsp;
					<button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
				</div>
			</form>
			<hr>
			<form class="form-inline">
				<input type="search" class="form-control" id="csearch" name="name" placeholder="Filtrar" autocomplete="off">
			</form>
			<hr>
			<div class="row justify-content-center aling-items-center">
				{!! $classroom->render() !!}
			</div>
			<table class="table table-striped table-hover text-center" style="font-size: 12px;">
				<thead class="thead-dark">
					<tr>
						{{-- <th>Número</th> --}}
						<th>Ambiente</th>
						<th>Responsable</th>
						<th>Estado</th>
						<th>Uso</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody class="results">
					@foreach($classroom as $classr)
					<tr>
						{{-- <td> {{$classr->id}} </td> --}}
						<td> {{$classr->name}} </td>
						<td style="text-align: justify;"> {{$classr->user->fullname}} </td>
						<td> {{$classr->state}} </td>
						<td> {{$classr->usability}} </td>
						<td>
							<a href="{{url('classroom/'.$classr->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
							<a href="{{url('classroom/'.$classr->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
							<form action="{{url('classroom/'.$classr->id)}}" method="post" style="display: inline">
								{!! csrf_field() !!}
								{!! method_field('delete') !!}
								<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>				
							</form>
						</td>
							</tr>
					@endforeach
				</tbody>
				<tfoot class="text-center" ">
					<tr>
						<td colspan='8'>
							<div class="row justify-content-center aling-items-center">
								{!! $classroom->render() !!}
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    <script>
    	$(document).ready(function(){
            @if(session('status'))
                swal('Felicitaciones!', '{{ session('status') }}', 'seccess');
            @endif
            $('form').on('click','.btn-upload', function(event){
                event.preventDefault();
                $(this).prev().click();
            });
            //*eliminar-
            $('table').on('click','.btn-delete', function(event){
                event.preventDefault();
                swal({
                    title:'Está Seguro?',
                    text:'Realmente desea eliminar este registro?',
                    type:'warning',
                    showCancelButton:true,
                    cancelButtonColor:'#d33'
                }).then((result)=>{
                    if(result.value){
                        $(this).parent().submit();
                    }
                });
            });
            $('form').on('keyup','#csearch', function(event) {
                event.preventDefault();
                $name=$(this).val();
                $.get('classroom/ajaxsearch',{name:$name}, function(data){
                    $('.results').html(data);
                });
            });
            // $('form').on('keyup','#asearch', function(event) {
            //     event.preventDefault();
            //     $name=$(this).val();
            //     $.get('articles/ajaxsearch',{name:$name}, function(data){
            //         $('.results').html(data);
            //     });
            // });
        });
    </script>
    </body>
</html>