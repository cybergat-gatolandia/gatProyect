<?php

use Illuminate\Database\Seeder;

class IngresoTableSeeder extends Seeder
{
    
    public function run()
    {
        $id_proveedor = Proveedor::where ('','')->first();
        $id_user = Usuario::find(1)->first();

        $insert = new Ingreso();

        $insert = fecha_de_compra = '25/09/2015';
        $insert = total_compra = '500';




    }
}
