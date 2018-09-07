<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre', 'usuario', 'password', 'condicion','idrol' ];

    public function proveedor()
    {
        return $this->hasOne('App\Proveedor'); 
    }


public function user()
{
return $this->hasOne('App\User'); 
}
{