<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MountainsSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mountain::create([
            'name'=>'alkola',
            'height' => 2000,
            'belongsToRange' => false,
            'firstClimbDate' => 1994-12-11,
            'contienent' => 'Asia'
        ]);


    }
}
