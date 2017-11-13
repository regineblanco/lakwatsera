<?php

use Illuminate\Database\Seeder;

class CategoriesAndPreferencesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = [
    		"Arts & Culture" => [
    			"Museums",
    			"Historical sites and monuments",
                "Art galleries and exhibits",
                "Churches",
                "All of these!"
    		],
    		"Food" => [
    			"Pinoy cuisine",
    			"Other cuisines",
          "Food parks and markets",
          "Wet and seafood markets",
          "Coffee and dessert shops",
          "All of these!"
    		],
    		"Shopping" => [
    			"Art markets and eccentric finds",
          "Flee markets and cheap finds",
    			"Themed markets (flowers, pets, fruits)",
          "High-end malls",
          "All of these!"
    		],
    		"Music" => [
    			"Live acoustic",
    			"Live jazz",
          "Live rock/alternative",
          "Local indie music scene",
          "Underground music",
          "Stage musicals",
          "Karaoke",
          "All of these!"
    		],
    		"Recreation" => [
    			"Water sports",
          "Escape rooms and games",
          "Amusement parks",
          "All of these!"
    		],
    		"Nightlife" => [
          "Bars and speakeasies",
          "Comedy bars",
          "Fancy nightclubs",
          "Underground clubs",
          "Music festivals",
          "All of the above!"
        ]
    	];

		foreach ($categories as $category => $preferences) {
			// "Arts & Culture"
			$created_category = App\Category::create([
				'name' => $category
			]);

			foreach ($preferences as $preference) {
				// ["Museums", "Historical sites"]
				$created_preferences = App\Preference::create([
					'name' => $preference,
					'category_id' => $created_category->id
				]);
			}
		}

    }
}
