<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
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
   border: 2px solid black;
   color: #000;
}
</style>
<body>
	<h1 class="page-header">Listado Usuarios</h1>
    <table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>Documento</th>
				<th>Nombre Completo</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Municipio de contrato</th>
				<th>Rol</th>
				<th>Tipo Contrato</th>
				<th>Zona de Contrato</th>
				<th>Estado</th>
			</tr>
		</thead>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->document }} </td>
			<td>{{ $user->fullname }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->phonenumber }}</td>
			<td>{{ $user->munici->name }}</td>
			<td>{{ $user->role }}</td>
			<td>{{ $user->contract }}</td>
			<td>{{ $user->munici->zone }}</td>
			<td>{{ $user->state }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>