<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
	public $timestamps=false;
     protected $table='cargo';
     protected $primaryKey='car_id';


    protected $fillable = [
        'car_descripcion','car_nombre',
    ];
}
