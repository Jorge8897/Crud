<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'Usuario' => 'jorge.glz',
            'password' => '1234567890',
            'key' => 'wasd'
        ]);
    }
}
