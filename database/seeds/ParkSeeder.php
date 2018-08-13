<?php

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
    }
}
