<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonaTableSeeder extends Seeder
{
    public function run()
    {
        $insert = new Persona();
        $insert->nombre = 'danos';
        $insert->apellido = 'gartar';
        $insert->tel = '59535660';
        $insert->direccion = 'guatemala';
        $insert->email = 'gartar@gmail.com';
        $insert->save();
    }
}