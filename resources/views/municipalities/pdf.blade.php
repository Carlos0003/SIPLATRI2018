<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> PDF-municipalities</title>
        <!-- Fonts -->
      {{--   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       {{--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> --}}
        <link rel="shortcut icon" href="{{ asset('imgs/siplatri2018.ico')}}">
        <!-- Styles -->
    </head>
<body>
	<table class="table table-striped table-hover text-center" style="text-orientation: use-glyph-orientation; font-size: 13px;">
			<tr>
				<th colspan="2">
					<h2>Lista de municipios</h2>
				</th>
			</tr>
		<thead thead class="thead-dark">
			<tr>
				<th>Municipio</th>
				<th>Zona del Departamento</th>
			</tr>
		</thead>
		@foreach($municipalities as $munici)
		<tr>
			<td> {{$munici->name}} </td>
			<td> {{$munici->zone }} </td>
		</tr>
		@endforeach
	</table>
</body>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</html>