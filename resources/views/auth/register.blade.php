@extends('layouts.app')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/siplatri2018.ico">
</head>
<body class="dark">
<div class="container">
    <div><br><br><br></div>
    <div class="row justify-content-center">
        <div class="col-md-12" style="opacity: 0.92;">
            @include('layouts.validation_errors')
            <div class="card">
                <div class="card-body">
                <h3 class="text-center"><i class="fa fa-user"></i> Registro de Usuarios</h3>
                <div class="card-header">Todos los campos son obligatorios:</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <table class="table table-striped table-hover text-center">
                <tr>
                    <th> Documento: </th>
                    <td> <input type="number" name="document" class="form-control" placeholder="Documento de Identidad" value="{{old('document')}}"></td>               
                </tr>
                <tr>
                    <th> Nombre Completo: </th>
                    <td> <input type="text" name="fullname" class="form-control" placeholder="Nombre Completo" value="{{old('fullname')}}"></td>                
                </tr>
                <tr>
                    <th> Correo: </th>
                    <td> <input type="email" name="email" class="form-control" placeholder="Correo" value="{{old('email')}}"></td>              
                </tr>
                <tr>
                    <th> Contraseña: </th>
                    <td> <input type="password" name="password" class="form-control" placeholder="Contraseña"></td>             
                </tr>
                <tr>
                    <th> Teléfono: </th>
                    <td> <input type="number" name="phonenumber" class="form-control" placeholder="Telefono" value="{{old('phonenumber')}}"></td>
                </tr>
                <tr>
                    <th> Municipio: </th>
                    <td> <input type="text" name="municipality" class="form-control" placeholder="Ciudad de Empleo" value="{{old('municipality')}}"></td>
                </tr>
                <tr>
                    <th> Género: </th>
                    <td> {{-- <input type="text" name="gender" class="form-control" placeholder="Género" value="{{old('gender')}}"> --}}
                        <select name="gender" class="form-control">
                            <option value="">Seleccione tipo de contrato...</option>
                            <option value="{{old('gender')}}">Masculino</option>
                            <option value="{{old('gender')}}">Femenino</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th> Rol: </th>
                    <td> {{-- <input type="text" name="role" class="form-control" placeholder="Rol" value="{{old('role')}}"> --}}
                        <select name="role" class="form-control">
                            <option value="">Seleccione tipo de contrato...</option>
                            <option value="{{old('role')}}">Instructor</option>
                            <option value="{{old('role')}}">Admin</option>
                            <option value="{{old('role')}}">Almacen</option>
                        </select>
                    </td>               
                </tr>
                <tr>
                    <th> Tipo de Contrato: </th>
                    <td> {{-- <input type="text" name="contract" class="form-control" placeholder="Tipo Contrato" value="{{old('contract')}}"> --}}
                        <select name="contract" class="form-control">
                            <option value="">Seleccione tipo de contrato...</option>
                            <option value="{{old('contract')}}">PrestacionServicios</option>
                            <option value="{{old('contract')}}">PersonalPlanta</option>
                        </select></td>
                </tr>
                <tr>
                    <th> Estado: </th>
                    <td> {{-- <input type="text" name="state" class="form-control" placeholder="Estado" value="{{old('state')}}"> --}}
                        <select name="state" class="form-control">
                            <option value="">Seleccione tipo de contrato...</option>
                            <option value="{{old('state')}}">activo</option>
                            <option value="{{old('state')}}">inactivo</option>
                        </select></td></td>             
                </tr>
            </table>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" style="background-color: rgb(35,130,118); color: white; border: none;;" class="btn btn-primary btn-block"><strong>Registrarse</strong>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
@include('layouts.footer')
</body>
</html>