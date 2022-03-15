@extends('layouts.app')
@section('content')
<h1 class="bg-dark text-white">Editar Cargo</h1>
<form action="{{route('cargo.update',$cargo->car_id)}}" method="POST">
	@csrf
	<label for="">Nombre</label>
	<input type="text" value="{{$cargo->car_nombre}}" name="car_nombre" id="car_nombre">
	<label for="">Descrpcion del cargo</label>
	<input type="text" value="{{$cargo->car_descripcion}}" name="car_descripcion" id="car_descripcion">
	<button class="btn btn-success">Guardar</button>
</form>
@endsection