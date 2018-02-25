<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Venues')->delete();
        
        \DB::table('Venues')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_id' => 1,
                'type' => 'bar',
                'name' => 'The Good Bar',
                'description' => 'the best in town',
                'link' => NULL,
                'score' => 8.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'city_id' => 1,
                'type' => 'nightclub',
                'name' => 'Deluxe',
                'description' => 'the best in town',
                'link' => NULL,
                'score' => 7.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'city_id' => 1,
                'type' => 'spot',
                'name' => 'Trip Mall',
                'description' => 'the best in town',
                'link' => NULL,
                'score' => 6.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'city_id' => 14,
                'type' => 'nightclub',
                'name' => 'Route 66',
                'description' => NULL,
                'link' => 'http://www.route66club.com/',
                'score' => 8.9,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'city_id' => 14,
                'type' => 'nightclub',
                'name' => 'Flix & Slim',
                'description' => NULL,
                'link' => NULL,
                'score' => 7.7,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'city_id' => 14,
                'type' => 'nightclub',
                'name' => 'Funky Villa',
                'description' => NULL,
                'link' => NULL,
                'score' => 8.6,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'city_id' => 14,
                'type' => 'nightclub',
                'name' => 'Demo',
                'description' => NULL,
                'link' => NULL,
                'score' => 8.6,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'city_id' => 14,
                'type' => 'nightclub',
                'name' => 'Safe house',
                'description' => NULL,
                'link' => NULL,
                'score' => 7.9,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'city_id' => 14,
                'type' => 'bar',
                'name' => 'Bangkok Bar',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Restaurant_Review-g293916-d3711223-Reviews-Bangkok_Bar-Bangkok.html',
                'score' => 9.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'city_id' => 14,
                'type' => 'bar',
                'name' => 'Brick Bar',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Restaurant_Review-g293916-d3744708-Reviews-Brick_Bar-Bangkok.html',
                'score' => 7.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'city_id' => 14,
                'type' => 'bar',
                'name' => 'Hippie de Bar',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Restaurant_Review-g293916-d1216858-Reviews-Hippie_de_bar-Bangkok.html',
                'score' => 8.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}