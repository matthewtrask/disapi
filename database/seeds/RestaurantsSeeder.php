<?php

use App\Services\ConstantService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => 'Aloha Isle',
            'park_id' => ConstantService::MK_ID
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Auntie Gravity\'s Galactic Goodies',
            'park_id' => ConstantService::MK_ID
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Be Our Guest Restaurant',
            'park_id' => ConstantService::MK_ID
        ]);

        DB::table('restaurant_details')->insert([
            'restaurant_id' => 1,
            'park_id' => ConstantService::MK_ID,
            'quick_service' => true,
            'table_service' => false,
            'alcohol' => false,
            'dining_plan' => true,
            'meal_types' => implode(',',['snacks']),
            'food_types' => implode(',', ['Snacks','Dole Whip'])
        ]);

        DB::table('restaurant_details')->insert([
            'restaurant_id' => 2,
            'park_id' => ConstantService::MK_ID,
            'quick_service' => true,
            'table_service' => false,
            'alcohol' => false,
            'dining_plan' => true,
            'meal_types' => implode(',',['snacks']),
            'food_types' => implode(',',['Snacks','Ice Cream']),

        ]);

        DB::table('restaurant_details')->insert([
            'restaurant_id' => 3,
            'park_id' => ConstantService::MK_ID,
            'quick_service' => true,
            'table_service' => true,
            'alcohol' => true,
            'dining_plan' => true,
            'meal_types' => implode(',',[
                'Breakfast','Lunch','Dinner'
            ]),
            'food_types' =>  implode(',',[
                'Pastries','Breakfast Sandwiches','Steak','Sandwiches','Fish','Cakes','Pudding'
            ]),

        ]);
    }
}
