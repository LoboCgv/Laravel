<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table='bodega';
	protected $fillable=['nombreBodega','direccionBodega'];//atributos que pueden ser modificados
	protected $dates = ['deleted_at'];//se agrega esto es para hacer back
}
