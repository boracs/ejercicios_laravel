<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activitie;
use DB;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // 1 PRIMERA MANERAde hacer usando DB es decir metiendo los datos a mano
        /* 
        DB::table('activities')->insert([
            'name'=>'Clase matematicas',
            'description' =>'nivel basico de matematicas matrices bidimensionales con prfesor aprticular',
            'fecha' => '2023-12-11 11:34:45',
            'price' => '14,56',
        ]);

        */


    
         
        // 2 SEGUNA MANERA  opcion usando faker library que me crea datos automaticos


       

        Activitie::factory(20)->create();
    }
}

