<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Index-User</title>
        <!-- Fonts -->
      {{--   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       {{--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> --}}
        <link rel="shortcut icon" href="{{ asset('imgs/siplatri2018.ico')}}">
        <!-- Styles -->
    </head>
<body>
	<h1 class="page-header">Listado Instructores</h1>
	<table class="table table-striped table-hover text-center" style="text-orientation: use-glyph-orientation; font-size: 10px;">
		<thead thead class="thead-dark">
			<tr>
				{{-- <th>Id</th> --}}
				<th>Documento</th>
				<th>Nombre Completo</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Municipio de contrato</th>
				<th>Rol</th>
				<th>Tipo Contrato</th>
				<th>Zona de Contrato</th>
				<th>Estado</th>
			</tr>
		</thead>
		@foreach($users as $user)
		<tr>
			{{-- <td>{{ $user->id }} </td> --}}
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->document }} </td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->fullname }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->email }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->phonenumber }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->munici->name }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->role }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->contract }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->munici->zone }}</td>
			<td style="width: auto; margin: 0px; padding: 0px;">{{ $user->state }}</td>
		</tr>
		@endforeach
	</table>
</body>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</html>
