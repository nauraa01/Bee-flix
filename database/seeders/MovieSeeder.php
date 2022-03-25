<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'genre_id' => 1,
                'title' => 'Itaewon Class',
                'photo' => 'images/itaewon_class.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 1,
                'title' => 'DOTS',
                'photo' => 'images/descendants_of_the_sun.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 1,
                'title' => 'W',
                'photo' => 'images/w.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 1,
                'title' => 'Hospital Playlist',
                'photo' => 'images/hospital_playlist.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 2,
                'title' => 'Holidate',
                'photo' => 'images/holidate.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 2,
                'title' => 'The Office',
                'photo' => 'images/the_office.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 2,
                'title' => 'This is Us',
                'photo' => 'images/this_is_us.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 2,
                'title' => 'Friends',
                'photo' => 'images/friends.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 3,
                'title' => 'Toy Story',
                'photo' => 'images/toy_story.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 3,
                'title' => 'Up',
                'photo' => 'images/up.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 3,
                'title' => 'Wall-E',
                'photo' => 'images/walle.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
            [
                'genre_id' => 3,
                'title' => 'Finding Nemo',
                'photo' => 'images/finding_nemo.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies, orci nec semper tempus, dolor magna finibus diam, non malesuada risus risus ut nisl. Vestibulum in lectus ac enim fermentum vehicula sit amet non dui. Ut pulvinar porttitor ex molestie mollis. Pellentesque eleifend leo leo, nec consequat ante accumsan id. Mauris non laoreet nibh. Vestibulum nec volutpat ipsum. Sed faucibus justo vel purus placerat consequat. Phasellus vel rhoncus est, quis lobortis sapien. Vivamus pulvinar risus at mi vestibulum accumsan. Duis scelerisque mattis vestibulum. Etiam tincidunt, turpis sed finibus consequat, lectus arcu euismod odio, id sodales odio sapien quis eros.',
                'rating' => rand (3,4)
            ],
        ];

        DB::table('movies')->insert($movies);
    }
}
