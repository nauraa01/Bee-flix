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
        $genres = [
            [
                'id' => null,
                'name' => 'Drama'
            ],
            [
                'id' => null,
                'name' => 'Comedy'
            ],
            [
                'id' => null,
                'name' => 'Cartoon'
            ]
        ];


        DB::table('genres')->insert($genres);
    }
}
