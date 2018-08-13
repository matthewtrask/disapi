<?php

use Illuminate\Database\Seeder;

class ParkDetailSeeder extends Seeder
{
    private const MK_ID = 1;
    private const EP_ID = 2;
    private const HS_ID = 3;
    private const AK_ID = 4;

    public function run()
    {
        $date = new DateTime();

        DB::table('park_details')->insert([
            'park_id' => self::MK_ID,
            'central_attraction' => 'Cinderella\'s Castle',
            'year_opened' => 1971,
            'ride_count' => 42,
            'restaurant_count' => 31,
            'size' => 107,
            'resort_count' => 6,
            'fireworks' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('park_details')->insert([
            'park_id' => self::EP_ID,
            'central_attraction' => 'Spaceship Earth',
            'year_opened' => 1982,
            'ride_count' => 35,
            'restaurant_count' => 60,
            'size' => 300,
            'resort_count' => 7,
            'fireworks' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('park_details')->insert([
            'park_id' => self::HS_ID,
            'central_attraction' => 'The Chinese Theater',
            'year_opened' => 1989,
            'ride_count' => 13,
            'restaurant_count' => 21,
            'size' => 135,
            'resort_count' => 0,
            'fireworks' => 1,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('park_details')->insert([
            'park_id' => self::AK_ID,
            'central_attraction' => 'The Tree of Life',
            'year_opened' => 1998,
            'ride_count' => 41,
            'restaurant_count' => 33,
            'size' => 580,
            'resort_count' => 7,
            'fireworks' => 0,
            'created_at' => $date,
            'updated_at' => $date,
        ]);
    }
}
