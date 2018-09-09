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
            'park' => self::MAGIC
        ]);

        DB::table('parks')->insert([
            'park' => self::EPCOT
        ]);

        DB::table('parks')->insert([
            'park' => self::HOLLYWOOD
        ]);

        DB::table('parks')->insert([
            'park' => self::ANIMAL
        ]);

        DB::table('park_details')->insert([
            'park_id' => ConstantService::MK_ID,
            'central_attraction' => 'Cinderella\'s Castle',
            'year_opened' => 1971,
            'ride_count' => 24,
            'restaurant_count' => 31,
            'size' => 107,
            'resort_count' => 6,
            'fireworks' => 1,
        ]);
    }
}
