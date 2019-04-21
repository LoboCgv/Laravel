@extends('layouts.app')
@section('submenu')
	@include('Submenu.Bodega')
@endsection
@section('content')
@include('alerts.success')

<div class="container">
   	@include('alerts.request')
		{!!Form::open(['route'=>'Bodega.store', 'method'=>'POST'])!!}
			@include('forms.bodegaData')
			{!!Form::submit('Agregar Bodega',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

   
</div>

@endsection