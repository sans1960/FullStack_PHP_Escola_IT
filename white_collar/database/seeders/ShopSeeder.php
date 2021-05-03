<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i <20 ; $i++) {
            Shop::create([
                "name" =>$faker->name(),
                "capacity" => $faker->numberBetween(15, 20)

            ]);
        }

    }
}
