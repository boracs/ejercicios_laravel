<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Usuario;
use database\factories\UsuarioFactory;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        DB::table('usuarios')->insert([
			'name' => 'Mary Roe',
			'email' => 'mroe@gmail.com',
            'card' => '4553',
		]);
        */
        /*
        Usuario::create([
            'name' => 'Mary Roe',
			'email' => 'mroe@gmail.com',
            'card' => '4553',
        ]);
        */
        Usuario::factory(14)->create();





    }
}
