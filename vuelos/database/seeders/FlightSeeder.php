<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Flight;
use DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    /*
        Flight::create([
            'name' => 'Test User',
            'fecha_salida' => '2023-12-21',
            'origen' => 'bilbao',
            'destino' => 'paris',
    ]);
     */   

/*
    DB::table('flights')->insert([
        'name' => 'Test User',
        'fecha_salida' => '2023-12-21',
        'origen' => 'bilbao',
        'destino' => 'paris',
    ]);
*/


   Flight::factory(10)->create();


    }
}
