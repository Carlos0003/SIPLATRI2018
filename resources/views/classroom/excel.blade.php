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
				<th>Ambiente</th>
				<th>Responsable</th>
				<th>Estado</th>
				<th>Uso</th>
			</tr>
		</thead>
		@foreach($classroom as $classr)
		<tr>
			<td> {{$classr->name}} </td>
			<td> {{$classr->user->fullname }} </td>
			<td> {{$classr->state}} </td>
			<td> {{$classr->usability}} </td>
		</tr>
		@endforeach
	</table>
</body>
</html>