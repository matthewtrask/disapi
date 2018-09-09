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
            'meal_types' => [
                'snacks',
            ],
            'food_types' => [
                'Snacks',
                'Dole Whip',
            ],
        ]);

        DB::table('restaurants')->insert([
            'restaurant_id' => 2,
            'park_id' => ConstantService::MK_ID,
            'quick_service' => true,
            'table_service' => false,
            'alcohol' => false,
            'dining_plan' => true,
            'meal_types' => [
                'snacks',
            ],
            'food_types' => [
                'Snacks',
                'Ice Cream',
            ],
        ]);

        DB::table('restaurants')->insert([
            'restaurant_id' => 3,
            'park_id' => ConstantService::MK_ID,
            'quick_service' => true,
            'table_service' => true,
            'alcohol' => true,
            'dining_plan' => true,
            'meal_types' => [
                'Breakfast','Lunch','Dinner'
            ],
            'food_types' => [
                'Pastries','Breakfast Sandwiches','Steak','Sandwiches','Fish','Cakes','Pudding'
            ],

        ]);
    }
}
