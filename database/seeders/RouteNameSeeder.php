<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RouteNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('route_names')->truncate();

        DB::table('route_names')->insert([
            [
                'route_name' => 'nivel-uno',
                'title' => 'HealthCare System',
                'subtitle' => 'Nivel 1'
            ],
            [
                'route_name' => 'nivel-dos',
                'title' => 'HealthCare System',
                'subtitle' => 'Nivel 2'
            ],
            [
                'route_name' => 'mvs',
                'title' => 'Medical View System',
                'subtitle' => 'mvs'
            ],
            [
                'route_name' => 'lyrium',
                'title' => 'Lyrium',
                'subtitle' => ''
            ],
        ]);
    }
}
