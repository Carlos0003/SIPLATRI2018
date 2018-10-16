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
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Tipo de programa</th>
				<th>Gestor</th>
				<th>Fecha Inicio</th>
				<th>Fecha Fin</th>
				<th>Trimestre Actual</th>
				<th>Jornada</th>
				<th>Ciudad</th>
			</tr>
		</thead>
		@foreach($records as $record)
		<tr>
			<td>{{ $record->number }} </td>
			<td>{{ $record->nameprogram->name }} </td>
			<td>{{ $record->nameprogram->type }}</td>
			<td>{{ $record->user->fullname }}</td>
			<td>{{ $record->fecha_inicio }}</td>
			<td>{{ $record->fecha_fin }}</td>
			<td>{{ $record->trimestreActual }}</td>
			<td>{{ $record->modalidad }}</td>
			<td>{{ $record->municipios->name }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>