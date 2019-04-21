@extends('layouts.app')
@section('submenu')
	@include('Submenu.Bodega')
@endsection
@section('content')
@include('alerts.success')

<div class="container">
   	{!!Form::model($bodega,['route'=>['Bodega.update',$bodega],'method'=>'PUT'])!!}
			@include('forms.bodegaData')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['Bodega.destroy', $bodega], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}

   
</div>

@endsection