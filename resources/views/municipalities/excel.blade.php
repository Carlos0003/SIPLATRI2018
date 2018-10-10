<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Report Excel</title>
</head>
<style>
table {
   border-collapse: separate;
   border-spacing: 5px;
   background: #000 url("gradient.gif") bottom left repeat-x;
   color: #fff;
   border: 2px solid black;
}
td, th {
   background: #fff;
   color: #000;
}
</style>
<body>
	<table>
		<thead>
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