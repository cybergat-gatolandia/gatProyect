<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre', 'apellido', 'tel', 'direccion','email' ];

   /* public function proveedor()
    {
        return $this->hasOne('App\Proveedor'); 
    }

    public function user()
    {
        return $this->hasOne('App\User'); 
    }*/
}