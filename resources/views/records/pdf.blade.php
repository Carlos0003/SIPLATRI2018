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
		<thead>
			<tr>
				<th>Id</th>
				<th>Documento</th>
				<th>Nombre Completo</th>
				<th>Correo Electronico</th>
				<th>Teléfono</th>
				<th>Rol</th>
				<th>Tipo Contrato</th>
				<th>Estado</th>
			</tr>
		</thead>
		@foreach($users as $user)
		<tr>
			<td>{{ $user->id }} </td>
			<td>{{ $user->document }} </td>
			<td>{{ $user->fullname }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->phonenumber }}</td>
			<td>{{ $user->role }}</td>
			<td>{{ $user->contract }}</td>
			<td>{{ $user->state }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
