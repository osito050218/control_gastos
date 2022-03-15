@extends('layouts.app')

@section('content')
<h1 class="bg-dark text-white">Formulario</h1>
<form action="{{route('cargo.store')}}" method="POST">
	@csrf
	<label for="">Nombre</label>
	<input type="text" name="car_nombre" id="car_nombre">
	<label for="">Descrpcion del cargo</label>
	<input type="text" name="car_descripcion" id="car_descripcion">
	<button class="btn btn-success">Guardar</button>
</form>
@endsection