<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Picture;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i=0; $i <200 ; $i++) {
            Picture::create([
                "name" =>$faker->sentence($nbWords = 4, $variableNbWords = true),
                "author" => $faker->name(),
                "price" =>$faker->numberBetween(4000, 50000),
                "shop_id"=>$faker->numberBetween(1,20)

            ]);
        }
    }
}
