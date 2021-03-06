<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Index-Municipalities</title>
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
			<h1 class="text-center" style="font-size: 30px"><i class="far fa-compass"></i> Lista de Municipios</h1>
			<hr>
			<ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="{{url('home')}}">Inicio</a></li>
	            <li class="breadcrumb-item active" aria-current="page">Lista Municipios</li>
	        </ol>
			<a href="{{ url('municipalities/create')}}" class="btn btn-outline-info">
				<i class="fa fa-plus"></i> Agregar Municipio
			</a>
			<a href="{{url('municipalities/pdf')}}" class="btn btn-outline-primary">
				<i class="fa fa-file-pdf">  Exportar</i>
			</a>
			<a href="{{url('municipalities/excel')}}" class="btn btn-outline-success">
				<i class="fa fa-file-excel">  Exportar</i>
			</a>
			<hr>
			{{-- <form class="form-inline" action="{{ url('municipalities/search') }}">
				<div class="form-group">
					<input type="search" class="form-control" name="name" placeholder="Ingrese su busqueda">&nbsp;
					<button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
				</div>
			</form>
			<hr>
			<form class="form-inline">
				<input type="search" class="form-control" id="csearch" name="name" placeholder="Filtrar" autocomplete="off">
			</form> --}}
			<hr>
			<div class="row justify-content-center aling-items-center">
				{!! $municipality->render() !!}
			</div>
			<table class="table table-striped table-hover text-center" style="font-size: 12px;">
				<thead class="thead-dark" style="font-size: 12px;">
					<tr>
						<th style="text-align: left;">Nombre</th>
						<th style="text-align: left;">Zona</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody class="results">
					@foreach($municipality as $munici)
							<tr>
								<td style="text-align: justify; width: 400px;"> {{$munici->name}} </td>
								<td style="text-align: justify; width: 300px;"> {{$munici->zone }} </td>
								
								<td>
									<a href="{{url('municipalities/'.$munici->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
									<a href="{{url('municipalities/'.$munici->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
									<form action="{{url('municipalities/'.$munici->id)}}" method="post" style="display: inline">
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
								{!! $municipality->render() !!}
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
            $('form').on('keyup','#msearch', function(event) {
                event.preventDefault();
                $name=$(this).val();
                $.get('municipalities/ajaxsearch',{name:$name}, function(data){
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