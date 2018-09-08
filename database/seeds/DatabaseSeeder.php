<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolsTableSeeder::class);
        $this->call(PersonaTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
