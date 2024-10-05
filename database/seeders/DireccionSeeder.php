<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Direccion;
use Faker\Factory as Faker;

class DireccionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Direccion::create([
                'calle' => $faker->streetName,
                'numero' => $faker->buildingNumber,
                'ciudad' => $faker->city,
                'estado' => $faker->state,
                'codigo_postal' => $faker->postcode,
            ]);
        }
    }
}