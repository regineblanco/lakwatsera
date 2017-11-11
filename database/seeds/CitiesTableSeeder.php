<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
          "Manila",
          "Caloocan",
          "Las Piñas",
          "Makati",
          "Malabon",
          "Mandaluyong",
          "Marikina",
          "Muntinlupa",
          "Navotas",
          "Parañaque",
          "Pasay",
          "Pasig",
          "Quezon City",
          "San Juan",
          "Taguig",
          "Valenzuela"
        ];

        foreach ($cities as $city) {
          $created_city = App\City::create([
            'name' => $city
          ]);
        }
    }
}
