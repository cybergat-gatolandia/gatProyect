<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolsTableSeeder extends Seeder
{
    public function run()
    {
        $insert = new Rol();
        $insert->nombre = 'Administrador';
        $insert->descripcion = 'el es super usuario';
        $insert->save();   
    }
}
