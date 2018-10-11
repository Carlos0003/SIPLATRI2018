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
		<table class="table table-striped table-hover text-center" style="text-orientation: use-glyph-orientation; font-size: 10px;">
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
</html>