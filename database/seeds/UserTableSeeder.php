<?php

use Illuminate\Database\Seeder;
use App\Rol;
use App\Persona;
use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $id_rol = Rol::where('nombre', 'Administrador')->first();
        $id_persona = Persona::find(1)->first();

        $insert = new User();
        $insert->usuario = 'pepito';
        $insert->password = bcrypt('admin');
        $insert->idpersona = $id_persona->id;
        $insert->idrol = $id_rol->id;
        $insert->save();
    }
}
