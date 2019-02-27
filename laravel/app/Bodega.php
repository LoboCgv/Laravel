<?php

namespace BodegaOnline;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
	protected $table='bodegas';
	protected $filliable=['nombreBodega','direccionBodega'];//atributos que pueden ser modificados
}
