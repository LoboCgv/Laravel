@extends('layouts.principal')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-7 col-center">
	<!--Formulario de creacion-->
	@include('alerts.request');
	{!!Form::open(['route'=>'Usuario.store', 'method'=>'POST'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
</div>
</div>
</div>

@endsection
