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
}
td, th {
   background: #fff;
   color: #000;
}
</style>
<body>
	<table>
		<thead style="text-align: center;">
			<tr>
				<th>Nro</th>
				<th>Nombre del Programa de Formación</th>
				<th>Tipo del Programa de Formación</th>
				<th>Tiempo del Programa de Formación</th>
			</tr>
		</thead>
		@foreach($programs as $progr)
		<tr style="text-align: justify;">
			<td style="text-align: center;">{{ $progr->id }}</td>
			<td>{{ $progr->name }}</td>
			<td>{{ $progr->type }}</td>
			<td>{{ $progr->timeduration }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>