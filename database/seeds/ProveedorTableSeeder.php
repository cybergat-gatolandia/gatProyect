<?php

use Illuminate\Database\Seeder;
use App\Persona;


class ProveedorTableSeeder extends Seeder
{
   
    public function run()
    {
        $id_persona = Persona::where('nombre', 'danos')->first();

        $insert = new Proveedor();

        $insert->$id_persona->id;
        $insert->nombreEmpresa ='Mundo Virtual';
        $insert->direccioon = 'Chiquimulilla';
        
    }
}
