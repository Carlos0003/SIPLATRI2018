<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Report Excel</title>
</head>
<body>
		<table class="table table-striped table-hover text-center" style="text-orientation: use-glyph-orientation; font-size: 10px; border: 1px solid black;">
			<tr>
				<th colspan="2" style="border: 1px solid black;">
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
</html>