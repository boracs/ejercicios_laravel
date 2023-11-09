<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mountains;
use DB;

class MountainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        /*
        DB::table('mountains')->insert([

            'name' => 'urgul',
            'height' => 1378,
            'belongsToRange' => true,
            'firstClimbDate' =>  '2022-12-12 13:56:59',
            'continent' => 'Europe'

        ]);
    */
        Mountains::factory(7)->create();



    }
}
