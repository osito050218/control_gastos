@extends('layouts.app')

@section('content')
<h1 class="bg-dark text-white">Formulario</h1>
<form action="{{route('usuarios.store')}}" method="POST">
	@csrf
	<label for="">Nombre</label>
	<input type="text" name="usu_nombre" id="usu_nombre">
	<label for="">Apellido</label>
	<input type="text" name="usu_apellido" id="usu_apellido">
	<label for="">cedula</label>
	<input type="text" name="usu_cedula" id="usu_cedula">
	<label for="">Telefono</label>
	<input type="text" name="usu_telefono" id="usu_telefono">
	<label for="">email</label>
	<input type="text" name="email" id="email">
	<label for="password" >Constraseña</label>
	<input type="password" name="password" id="password">

	<button class="btn btn-success">Guardar</button>
</form>
@endsection