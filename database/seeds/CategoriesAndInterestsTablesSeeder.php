<?php

use Illuminate\Database\Seeder;

class CategoriesAndInterestsTablesSeeder extends Seeder
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
    		],
    		"Food" => [
    			"Pinoy cuisine",
    			"Western cuisine"
    		],
    		"Shopping" => [
    			"Art markets and eccentric finds",
    			"Themed markets"
    		],
    		"Music" => [
    			"Live acoustic",
    			"Live jazz"
    		],
    		"Recreation" => [
    			"Water sports",
    		],
    		"Nightlife" => []
    	];
    
		foreach ($categories as $category => $interests) {
			// "Arts & Culture"
			$created_category = App\Category::create([
				'name' => $category
			]);

			foreach ($interests as $interest) {
				// ["Museums", "Historical sites"]
				$created_interests = App\Interest::create([
					'name' => $interest,
					'category_id' => $created_category->id
				]);
			}
		}    

    }
}
