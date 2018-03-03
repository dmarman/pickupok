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
        

        \DB::table('venues')->delete();
        
        \DB::table('venues')->insert(array (
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
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
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'city_id' => 14,
                'type' => 'nightclub',
                'name' => 'Zaleng',
                'description' => NULL,
                'link' => 'https://www.facebook.com/ZalengOfficial/?rf=276285725722885',
                'score' => 8.4,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'city_id' => 30,
                'type' => 'nightclub',
                'name' => 'Lavish',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.com.au/ShowUserReviews-g293925-d2273335-r365782687-Ba_Thien_Hau_Temple-Ho_Chi_Minh_City.html',
                'score' => 9.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'city_id' => 30,
                'type' => 'nightclub',
                'name' => 'Lush',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Attraction_Review-g293925-d6364047-Reviews-Lush-Ho_Chi_Minh_City.html',
                'score' => 7.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'city_id' => 30,
                'type' => 'nightclub',
                'name' => 'Fuse SG',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Restaurant_Review-g293925-d5792238-Reviews-Fuse_SG-Ho_Chi_Minh_City.html',
                'score' => 8.2,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'city_id' => 30,
                'type' => 'nightclub',
                'name' => 'Canalis Club',
                'description' => NULL,
                'link' => 'https://es.foursquare.com/v/canalis-club/4dc94af322715c4d217f2901',
                'score' => 6.3,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'city_id' => 30,
                'type' => 'nightclub',
                'name' => '02 Gold Club',
                'description' => NULL,
                'link' => 'https://www.facebook.com/02GoldClub/',
                'score' => 9.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'city_id' => 30,
                'type' => 'spot',
                'name' => 'Vincom Center',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Attraction_Review-g293925-d1830324-Reviews-Vincom_Center-Ho_Chi_Minh_City.html',
                'score' => NULL,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'city_id' => 30,
                'type' => 'nightclub',
                'name' => 'Blanchy\'s Tash',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Attraction_Review-g293925-d3700540-Reviews-Blanchy_s_Tash-Ho_Chi_Minh_City.html',
                'score' => 8.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'city_id' => 30,
                'type' => 'bar',
                'name' => 'Seventeen Saloon',
                'description' => NULL,
                'link' => 'https://www.tripadvisor.es/Attraction_Review-g293925-d4242909-Reviews-Seventeen_Saloon-Ho_Chi_Minh_City.html',
                'score' => 7.0,
                'latitude' => NULL,
                'longitude' => NULL,
                'approved' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}