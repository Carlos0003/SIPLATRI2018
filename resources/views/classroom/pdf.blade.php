<!DOCTYPE html>
<html lang="en">
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
	<h1 class="page-header">Listado Ambientes</h1>
	<table class="table table-striped table-hover text-center" style="text-orientation: use-glyph-orientation; font-size: 10px;">
		<thead class="thead-dark">
			<tr>
				{{-- <th>Id</th> --}}
				<th>Nombre del ambiente</th>
				<th>Cuentadante</th>
				<th>Estado</th>
				<th>Uso</th>
			</tr>
		</thead>
		@foreach($classrooms as $classr)
			<tr>
				{{-- <td> {{ $classr->id }} </td> --}}
				<td> {{ $classr->name }} </td>
				<td> {{ $classr->user->fullname }} </td>
				<td> {{ $classr->state }} </td>
				<td> {{ $classr->usability }} </td>
			</tr>
		@endforeach
	</table>
</body>
</html>