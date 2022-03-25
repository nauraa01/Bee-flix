<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 12; $i++) {
            for ($j = 1; $j <= rand(5, 12); $j++) {
                DB::table('episodes')
                    ->insert([
                        'id' => null,
                        'movie_id' => $i,
                        'episode' => 'Episode ' . $j,
                        'title' => 'Title ' . $j
                    ]);
            }
        }
    }
}
