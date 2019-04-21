@extends('layouts.app')
@section('submenu')
	@include('Submenu.Bodega')
@endsection
@section('content')
@include('alerts.success')

<div class="container">
    <div class="row justify-content-center">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
					<thead>
						<th>Nombre Bodega</th>
						<th>Direccion Bodega</th>
						<th>Operacion</th>
					</thead>
					@foreach($bodegas as $bodega)
						<tbody>
							<td>{!!link_to_route('Bodega.show', $title = $bodega->nombreBodega, $parameters = $bodega, $attributes = ['class'=>''])!!}</td>
							<td>{{$bodega->direccionBodega}}</td>
							<td>
								{!!link_to_route('Bodega.edit', $title = 'Editar', $parameters = $bodega, $attributes = ['class'=>'btn btn-primary'])!!}
							</td>
						</tbody>
					@endforeach
			</table>
				{!!$bodegas->render()!!}
		</div>

    </div>
</div>

@endsection