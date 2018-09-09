<?php

use App\Services\ConstantService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkSeeder extends Seeder
{
    private const MAGIC = 'Magic Kingdom';

    private const EPCOT = 'Epcot';

    private const HOLLYWOOD = 'Hollywood Studios';

    private const ANIMAL = 'Animal Kingdom';

    public function run() : void
    {
        DB::table('parks')->insert([
            'name' => self::MAGIC
        ]);

        DB::table('parks')->insert([
            'name' => self::EPCOT
        ]);

        DB::table('parks')->insert([
            'name' => self::HOLLYWOOD
        ]);

        DB::table('parks')->insert([
            'name' => self::ANIMAL
        ]);

        DB::table('park_details')->insert([
            'park_id' => ConstantService::MK_ID,
            'central_attraction' => ConstantService::MK_CENTRAL_ATTRACTION,
            'year_opened' => 1971,
            'ride_count' => 24,
            'restaurant_count' => 31,
            'size' => 107,
            'resort_count' => 6,
            'fireworks' => 1,
        ]);

        DB::table('park_details')->insert([
            'park_id' => ConstantService::EP_ID,
            'central_attraction' => ConstantService::EP_CENTRAL_ATTRACTION,
            'year_opened' => 1982,
            'ride_count' => 9,
            'restaurant_count' => 60,
            'size' => 300,
            'resort_count' =>7 ,
            'fireworks' => 1,
        ]);

        DB::table('park_details')->insert([
            'park_id' => ConstantService::HS_ID,
            'central_attraction' => ConstantService::HS_CENTRAL_ATTRACTION,
            'year_opened' => 1989,
            'ride_count' => 13,
            'restaurant_count' => 21,
            'size' => 135,
            'resort_count' => 0,
            'fireworks' => 1,
        ]);

        DB::table('park_details')->insert([
            'park_id' => ConstantService::AK_ID,
            'central_attraction' => ConstantService::AK_CENTRAL_ATTRACTION,
            'year_opened' => 1998,
            'ride_count' => 9,
            'restaurant_count' => 33,
            'size' => 580,
            'resort_count' => 7,
            'fireworks' => 0,
        ]);
    }
}
