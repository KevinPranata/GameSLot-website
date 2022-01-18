<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genrename' => 'Action'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'RPG'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'MMORPG'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'FPS'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Roleplay'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Openworld'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Simulation'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Card'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Arcade'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Strategy'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Quiz'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'MOBA'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Educational'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Fighting'
        ]);
        DB::table('genres')->insert([
            'genrename' => 'Stealth'
        ]);
    }
}
