<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'name'=>'The Godfather',
                'image'=>'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/hostedimages/1596202342i/29892977._SX540_.jpg',
                'description'=>'It is the first installment in The Godfather trilogy. The story, spanning from 1945 to 1955, chronicles the Corleone family under patriarch Vito Corleone (Brando), focusing on the transformation of his youngest son, Michael Corleone (Pacino), from reluctant family outsider to ruthless mafia boss.',
                'gener_id'=>1
            ],
            [
                'name'=>'Leon The Professional',
                'image'=>'https://lwlies.com/wp-content/uploads/2017/07/leon-the-professional.jpg',
                'description'=>"Léon Montana (Jean Reno) is an Italian hitman (or cleaner, as he refers to himself) living a solitary life in New York City's Little Italy. His work comes from a mafioso named Tony (Danny Aiello). Léon spends his idle time engaging in calisthenics, nurturing a houseplant, and watching old films.",
                'gener_id'=>2
            ],
            [
                'name'=>'1917',
                'image'=>'https://upload.wikimedia.org/wikipedia/en/f/fe/1917_%282019%29_Film_Poster.jpeg',
                'description'=>'April 6th, 1917. As an infantry battalion assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap. ... Two British soldiers are sent to deliver an urgent message to an isolated regiment.',
                'gener_id'=>3
            ],
            [
                'name'=>'Rush Hour',
                'image'=>'https://s3.amazonaws.com/static.rogerebert.com/uploads/review/primary_image/reviews/rush-hour-3-2007/EB20070809REVIEWS708090302AR.jpg',
                'description'=>"A loyal and dedicated Hong Kong Inspector teams up with a reckless and loudmouthed L.A.P.D. detective to rescue the Chinese Consul's kidnapped daughter, while trying to arrest a dangerous crime lord along the way.",
                'gener_id'=>4
            ]
        ]);
    }
}
