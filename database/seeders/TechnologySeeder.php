<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'HTML',
            'CSS',
            'JS',
            'VUE.JS',
            'PHP',
            'LARAVEL 10'
        ];

        foreach ($technologies as $technologyName){
            $newTechnology = new Technology();
            $newTechnology->name = $technologyName;
            $newTechnology->save();
        }
    }
}
