<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RideSeeder extends Seeder
{
    private const MK_ID = 1;
    private const EP_ID = 2;
    private const HS_ID = 3;
    private const AK_ID = 4;

    public function run() : void
    {
        DB::table('rides')->insert([
            'name' => 'Walt Disney World Railroad',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Jungle Cruise',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'The Magic Carpets of Aladdin',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Pirates of the Caribbean',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Splash Mountain',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Big Thunder Moutain',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Tom Sawyer\'s Island',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Haunted Mansion',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Liberty Belle Riverboat',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'The Barnstormer featuring the Great Goofini',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Dumbo the Flying Elephant',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'it\'s a small world',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Mad Tea Party',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'The Many Adventures of Winnie the Pooh',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Peter Pan\'s Flight',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Prince Charming Regal Carousel',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Seven Drawfs Mine Train',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Under The Sea: Journey of the Little Mermaid',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Astro Orbiter',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Tomorrowland Speedway',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Carousel of Progess',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Tomorrowland Transit Authority PeopleMover',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Buzz Lightyear\'s Space Ranger Spin',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Space Mountain',
            'park_id' => self::MK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Journey into Imagination with Figment',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Living with the Land',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Soarin\' Around The World',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Spaceship Earth',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Test Track',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Mission: Space',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'The Seas with Nemo & Friends',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Gran Fiesta Tour starring the Three Caballeros',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Frozen Ever After',
            'park_id' => self::EP_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Star Tours - The Adventure Continues',
            'park_id' => self::HS_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Toy Story Mania!',
            'park_id' => self::HS_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Slinky Dog Dash',
            'park_id' => self::HS_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Alien Swirling Saucers',
            'park_id' => self::HS_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'The Twilight Zone Tower of Terror',
            'park_id' => self::HS_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Rock N\' Roller Coaster starring Aerosmith',
            'park_id' => self::HS_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Avatar Flight of Passage',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Na\'vi River Journey',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Kilimanjaro Safaris',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Wild Africa Trek',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Expedition Everest',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Kali River Rapids',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Dinosaur',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'Primeval Whirl',
            'park_id' => self::AK_ID,
        ]);

        DB::table('rides')->insert([
            'name' => 'TriceraTop Spin',
            'park_id' => self::AK_ID,
        ]);

        DB::table('ride_details')->insert([
            'park_id' => self::MK_ID,
            'opening_year' => 1971,
            'ride_type' => 'Transport',
            'ride_vehicle' => 'Train',
            'interactive_queue' => 0,
            'gift_store_finish' => 0,
            'single_rider' => 0,
            'height_restricted' => 0,
        ]);
    }
}
