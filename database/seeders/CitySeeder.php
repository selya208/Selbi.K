<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    public function run()
    {
        $cities = ['Ashgabat', 'Anew', 'Mary', 'Turkmenabat', 'Balkanabat'];
        foreach ($cities as $city) {
            City::create(['name' => $city]);
        }
    }
}

