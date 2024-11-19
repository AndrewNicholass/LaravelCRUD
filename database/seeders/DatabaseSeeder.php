<?php

namespace Database\Seeders;

use App\Models\movie;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        movie::create([
            'title' => 'The Shawshank Redemption',
            'rating' => 9.3,
            'genre' => 'Drama',
            'date' => '1994-09-23',
            'synopsis' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'
        ]);

        movie::create([
            'title' => 'The Dark Knight',
            'rating' => 9.0,
            'genre' => 'Action, Crime, Drama',
            'date' => '2008-07-18',
            'synopsis' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.'
        ]);

        movie::create([
            'title' => 'Inception',
            'rating' => 8.8,
            'genre' => 'Action, Adventure, Sci-Fi',
            'date' => '2010-07-16',
            'synopsis' => 'A thief who steals corporate secrets through dream-sharing technology is given the task of planting an idea into the mind of a CEO.'
        ]);

        movie::create([
            'title' => 'Forrest Gump',
            'rating' => 8.8,
            'genre' => 'Drama, Romance',
            'date' => '1994-07-06',
            'synopsis' => 'The presidencies of Kennedy and Johnson, the Vietnam War, and more, through the eyes of an Alabama man with an IQ of 75.'
        ]);

        movie::create([
            'title' => 'Pulp Fiction',
            'rating' => 8.9,
            'genre' => 'Crime, Drama',
            'date' => '1994-10-14',
            'synopsis' => 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.'
        ]);

        movie::create([
            'title' => 'The Godfather',
            'rating' => 9.2,
            'genre' => 'Crime, Drama',
            'date' => '1972-03-24',
            'synopsis' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'
        ]);

        movie::create([
            'title' => 'Fight Club',
            'rating' => 8.8,
            'genre' => 'Drama',
            'date' => '1999-10-15',
            'synopsis' => 'An insomniac office worker and a soap maker form an underground fight club that evolves into much more.'
        ]);

        movie::create([
            'title' => 'The Matrix',
            'rating' => 8.7,
            'genre' => 'Action, Sci-Fi',
            'date' => '1999-03-31',
            'synopsis' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.'
        ]);

        movie::create([
            'title' => 'Interstellar',
            'rating' => 8.6,
            'genre' => 'Adventure, Drama, Sci-Fi',
            'date' => '2014-11-07',
            'synopsis' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.'
        ]);

        movie::create([
            'title' => 'The Lord of the Rings: The Fellowship of the Ring',
            'rating' => 8.8,
            'genre' => 'Action, Adventure, Drama',
            'date' => '2001-12-19',
            'synopsis' => 'A meek Hobbit and eight companions set out on a journey to destroy a powerful ring and save Middle-earth from the Dark Lord Sauron.'
        ]);
    }
}
