<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> PDF-abilities</title>
        <!-- Fonts -->
      {{--   <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       {{--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"> --}}
        <link rel="shortcut icon" href="{{ asset('imgs/siplatri2018.ico')}}">
        <!-- Styles -->
    </head>
<body>
	<table class="table table-striped table-hover text-center" style="text-orientation: use-glyph-orientation; font-size: 10px;">
		<thead thead class="thead-dark">
			<tr>
				<th>Nombre de la competencia</th>
				<th>Programa al que pertenece</th>
				<th>Horas dedicadas a la competencia</th>
			</tr>
		</thead>
		@foreach($abilities as $abilir)
		<tr>
			<td> {{$abilir->name}} </td>
			<td> {{$abilir->program->name }} </td>
			<td> {{$abilir->durationHour}} </td>
		</tr>
		@endforeach
	</table>
</body>
</html>