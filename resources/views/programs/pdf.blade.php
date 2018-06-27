<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Report PDF</title>
</head>
<style>
table {
   border-collapse: separate;
   border-spacing: 2px;
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
			</tr>
		</thead>
		@foreach($programs as $progr)
		<tr style="text-align: justify;">
			<td style="text-align: center;">{{ $progr->id }}</td>
			<td>{{ $progr->name }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
