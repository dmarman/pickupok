<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 30,
                'name' => 'Barcelona',
                'cost' => 1915.0,
                'weather' => NULL,
                'longitude' => 41.3851,
                'latitude' => 2.1734,
                'housing' => 6.45,
                'cost_of_living' => 5.9399999999999995,
                'travel_connectivity' => 5.86,
                'commute' => 5.44,
                'safety' => 7.51,
                'business_freedom' => 7.12,
                'healthcare' => 8.42,
                'education' => 5.02,
                'economy' => 4.29,
                'environment_quality' => 3.88,
                'taxation' => 3.7800000000000002,
                'internet_access' => 5.9399999999999995,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/barcelona_web-8ce54f1421.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/barcelona-aacdf7ba91.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:10:56',
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 6,
                'name' => 'Moscow',
                'cost' => 1566.0,
                'weather' => NULL,
                'longitude' => 55.7558,
                'latitude' => 37.6173,
                'housing' => 6.58,
                'cost_of_living' => 7.84,
                'travel_connectivity' => 9.03,
                'commute' => 4.33,
                'safety' => 7.46,
                'business_freedom' => 5.39,
                'healthcare' => 4.72,
                'education' => 4.57,
                'economy' => 3.15,
                'environment_quality' => 5.45,
                'taxation' => 5.97,
                'internet_access' => 7.84,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/moscow_web-3b49a7d2d1.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/moscow-99ccf7ba84.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:10:57',
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 1,
                'name' => 'Wroclaw',
                'cost' => 1053.0,
                'weather' => NULL,
                'longitude' => 51.1079,
                'latitude' => 17.0385,
                'housing' => 8.43,
                'cost_of_living' => 8.42,
                'travel_connectivity' => 2.25,
                'commute' => 4.8100000000000005,
                'safety' => 7.89,
                'business_freedom' => 5.7,
                'healthcare' => 6.63,
                'education' => 4.16,
                'economy' => 4.76,
                'environment_quality' => 5.22,
                'taxation' => 5.0,
                'internet_access' => 8.42,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/wroclaw_web-f8ee8c2037.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/wroclaw-1e6f2fb3b9.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:10:59',
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 11,
                'name' => 'Medellin',
                'cost' => 750.0,
                'weather' => NULL,
                'longitude' => 6.2442,
                'latitude' => 75.5812,
                'housing' => 9.54,
                'cost_of_living' => 9.52,
                'travel_connectivity' => 0.93,
                'commute' => 4.6899999999999995,
                'safety' => 7.51,
                'business_freedom' => 6.35,
                'healthcare' => 6.8100000000000005,
                'education' => 1.53,
                'economy' => 4.59,
                'environment_quality' => 5.95,
                'taxation' => 1.73,
                'internet_access' => 9.52,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/medellin_web-d40fa1b2b9.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/medellin-8559818a33.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:00',
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 2,
                'name' => 'Las Vegas',
                'cost' => 1688.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 6.75,
                'cost_of_living' => 5.48,
                'travel_connectivity' => 3.5300000000000002,
                'commute' => 4.89,
                'safety' => 2.36,
                'business_freedom' => 8.67,
                'healthcare' => 5.9399999999999995,
                'education' => 3.62,
                'economy' => 6.51,
                'environment_quality' => 5.77,
                'taxation' => 4.68,
                'internet_access' => 5.48,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/las-vegas_web-7dc177ab7c.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/las-vegas-6acb21a1fe.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:02',
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 2,
                'name' => 'New York',
                'cost' => 4276.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 1.0,
                'cost_of_living' => 2.34,
                'travel_connectivity' => 6.68,
                'commute' => 5.04,
                'safety' => 7.06,
                'business_freedom' => 8.67,
                'healthcare' => 6.07,
                'education' => 8.07,
                'economy' => 6.51,
                'environment_quality' => 5.35,
                'taxation' => 3.8,
                'internet_access' => 2.34,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/new-york_web-99d9bb0809.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/new-york-9cb6cc2ae5.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:03',
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 2,
                'name' => 'San Francisco Bay Area',
                'cost' => 4419.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 1.0,
                'cost_of_living' => 2.82,
                'travel_connectivity' => 3.67,
                'commute' => 4.74,
                'safety' => 5.76,
                'business_freedom' => 8.67,
                'healthcare' => 6.45,
                'education' => 8.62,
                'economy' => 6.51,
                'environment_quality' => 6.55,
                'taxation' => 4.38,
                'internet_access' => 2.82,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/san-francisco-bay-area_web-f17b1f60e6.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/san-francisco-bay-area-7f6d130d20.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:04',
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 14,
                'name' => 'Rio de Janeiro',
                'cost' => 1223.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 7.98,
                'cost_of_living' => 7.02,
                'travel_connectivity' => 1.49,
                'commute' => 4.15,
                'safety' => 5.3,
                'business_freedom' => 4.04,
                'healthcare' => 4.87,
                'education' => 1.02,
                'economy' => 2.19,
                'environment_quality' => 3.4699999999999998,
                'taxation' => 2.76,
                'internet_access' => 7.02,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/rio-de-janeiro_web-600ed3659c.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/rio-de-janeiro-448ecb9d55.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:06',
            ),
            8 => 
            array (
                'id' => 9,
                'country_id' => 14,
                'name' => 'Sao Paulo',
                'cost' => 1231.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.09,
                'cost_of_living' => 7.11,
                'travel_connectivity' => 2.27,
                'commute' => 4.3,
                'safety' => 5.42,
                'business_freedom' => 2.7800000000000002,
                'healthcare' => 5.39,
                'education' => 1.1,
                'economy' => 2.19,
                'environment_quality' => 2.37,
                'taxation' => 2.77,
                'internet_access' => 7.11,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/sao-paulo_web-843ef93d03.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/sao-paulo-94ecdb90e1.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:07',
            ),
            9 => 
            array (
                'id' => 10,
                'country_id' => 11,
                'name' => 'Bogota',
                'cost' => 886.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 9.09,
                'cost_of_living' => 9.21,
                'travel_connectivity' => 1.8900000000000001,
                'commute' => 4.9,
                'safety' => 6.26,
                'business_freedom' => 6.35,
                'healthcare' => 6.39,
                'education' => 1.53,
                'economy' => 4.59,
                'environment_quality' => 4.21,
                'taxation' => 1.73,
                'internet_access' => 9.21,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bogota_web-7fc246764f.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bogota-8dc7193397.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:08',
            ),
            10 => 
            array (
                'id' => 11,
                'country_id' => 31,
                'name' => 'Buenos Aires',
                'cost' => 1076.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.68,
                'cost_of_living' => 7.08,
                'travel_connectivity' => 3.92,
                'commute' => 4.62,
                'safety' => 6.14,
                'business_freedom' => 4.05,
                'healthcare' => 7.01,
                'education' => 1.42,
                'economy' => 2.88,
                'environment_quality' => 4.6,
                'taxation' => 1.44,
                'internet_access' => 7.08,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/buenos-aires_web-17f0020100.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/buenos-aires-bb7fb05d6b.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:10',
            ),
            11 => 
            array (
                'id' => 12,
                'country_id' => 15,
                'name' => 'Lima',
                'cost' => 1019.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.63,
                'cost_of_living' => 8.43,
                'travel_connectivity' => 2.01,
                'commute' => 4.76,
                'safety' => 5.43,
                'business_freedom' => 5.0,
                'healthcare' => 5.91,
                'education' => 0.5,
                'economy' => 3.16,
                'environment_quality' => 2.86,
                'taxation' => 6.46,
                'internet_access' => 8.43,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/lima_web-d5641b4390.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/lima-0c69e4ed56.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:11',
            ),
            12 => 
            array (
                'id' => 13,
                'country_id' => 8,
                'name' => 'Tokyo',
                'cost' => 2248.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 5.48,
                'cost_of_living' => 3.23,
                'travel_connectivity' => 8.15,
                'commute' => 5.46,
                'safety' => 9.97,
                'business_freedom' => 8.38,
                'healthcare' => 8.88,
                'education' => 6.97,
                'economy' => 3.7199999999999998,
                'environment_quality' => 6.08,
                'taxation' => 5.99,
                'internet_access' => 3.23,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/tokyo_web-7a20b5733f.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/tokyo-5d21b97864.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:12',
            ),
            13 => 
            array (
                'id' => 14,
                'country_id' => 3,
                'name' => 'Bangkok',
                'cost' => 1338.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 7.57,
                'cost_of_living' => 7.22,
                'travel_connectivity' => 4.05,
                'commute' => 3.96,
                'safety' => 7.19,
                'business_freedom' => 5.6,
                'healthcare' => 7.24,
                'education' => 1.69,
                'economy' => 2.39,
                'environment_quality' => 3.51,
                'taxation' => 6.73,
                'internet_access' => 7.22,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bangkok_web-24b795d6ac.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bangkok-abfa69e431.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 21:11:14',
            ),
            14 => 
            array (
                'id' => 15,
                'country_id' => 32,
                'name' => 'Paris',
                'cost' => 2400.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 3.91,
                'cost_of_living' => 3.59,
                'travel_connectivity' => 9.99,
                'commute' => 5.32,
                'safety' => 6.29,
                'business_freedom' => 8.09,
                'healthcare' => 8.23,
                'education' => 7.07,
                'economy' => 4.2,
                'environment_quality' => 4.61,
                'taxation' => 2.54,
                'internet_access' => 3.59,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/paris_web-0a3c7314a5.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/paris-0ae0bb626e.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:43',
            ),
            15 => 
            array (
                'id' => 16,
                'country_id' => 33,
                'name' => 'Reykjavik',
                'cost' => 3214.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 3.36,
                'cost_of_living' => 1.0,
                'travel_connectivity' => 1.13,
                'commute' => 5.48,
                'safety' => 8.75,
                'business_freedom' => 9.36,
                'healthcare' => 8.06,
                'education' => 4.06,
                'economy' => 5.28,
                'environment_quality' => 8.7,
                'taxation' => 4.46,
                'internet_access' => 1.0,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/reykjavik_web-042068d0d4.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/reykjavik-88db0aa26d.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:45',
            ),
            16 => 
            array (
                'id' => 17,
                'country_id' => 20,
                'name' => 'Oslo',
                'cost' => 2850.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 4.12,
                'cost_of_living' => 1.06,
                'travel_connectivity' => 5.23,
                'commute' => 5.41,
                'safety' => 6.86,
                'business_freedom' => 9.64,
                'healthcare' => 7.77,
                'education' => 5.14,
                'economy' => 7.07,
                'environment_quality' => 8.48,
                'taxation' => 4.64,
                'internet_access' => 1.06,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/oslo_web-dc398e708e.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/oslo-85b1f2e525.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:46',
            ),
            17 => 
            array (
                'id' => 18,
                'country_id' => 34,
                'name' => 'Rome',
                'cost' => 2050.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 5.49,
                'cost_of_living' => 4.83,
                'travel_connectivity' => 6.37,
                'commute' => 4.41,
                'safety' => 6.72,
                'business_freedom' => 6.19,
                'healthcare' => 7.88,
                'education' => 4.16,
                'economy' => 3.36,
                'environment_quality' => 4.36,
                'taxation' => 2.32,
                'internet_access' => 4.83,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/rome_web-30e1610428.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/rome-d6d22de42a.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:47',
            ),
            18 => 
            array (
                'id' => 19,
                'country_id' => 18,
                'name' => 'Prague',
                'cost' => 1430.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 7.77,
                'cost_of_living' => 7.62,
                'travel_connectivity' => 5.67,
                'commute' => 5.66,
                'safety' => 8.67,
                'business_freedom' => 6.21,
                'healthcare' => 7.95,
                'education' => 4.24,
                'economy' => 4.37,
                'environment_quality' => 7.21,
                'taxation' => 5.89,
                'internet_access' => 7.62,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/prague_web-c800dc9a25.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/prague-1857bf62f8.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:48',
            ),
            19 => 
            array (
                'id' => 20,
                'country_id' => 27,
                'name' => 'Budapest',
                'cost' => 1152.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.67,
                'cost_of_living' => 7.93,
                'travel_connectivity' => 4.49,
                'commute' => 5.2,
                'safety' => 8.24,
                'business_freedom' => 6.71,
                'healthcare' => 5.97,
                'education' => 3.69,
                'economy' => 4.9399999999999995,
                'environment_quality' => 5.49,
                'taxation' => 6.06,
                'internet_access' => 7.93,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/budapest_web-9de9bc410f.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/budapest-e325bd2bb4.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:50',
            ),
            20 => 
            array (
                'id' => 21,
                'country_id' => 2,
                'name' => 'Miami',
                'cost' => 2876.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 2.83,
                'cost_of_living' => 3.82,
                'travel_connectivity' => 4.17,
                'commute' => 3.94,
                'safety' => 4.4,
                'business_freedom' => 8.67,
                'healthcare' => 6.04,
                'education' => 4.39,
                'economy' => 6.51,
                'environment_quality' => 6.64,
                'taxation' => 4.68,
                'internet_access' => 3.82,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/miami_web-9307474a5e.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/miami-730928937f.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:51',
            ),
            21 => 
            array (
                'id' => 22,
                'country_id' => 10,
                'name' => 'Toronto',
                'cost' => 2264.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 4.92,
                'cost_of_living' => 5.28,
                'travel_connectivity' => 4.31,
                'commute' => 4.53,
                'safety' => 7.67,
                'business_freedom' => 8.97,
                'healthcare' => 8.17,
                'education' => 7.59,
                'economy' => 5.83,
                'environment_quality' => 7.0,
                'taxation' => 7.19,
                'internet_access' => 5.28,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/toronto_web-595a067cf7.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/toronto-a6fcbe977a.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:52',
            ),
            22 => 
            array (
                'id' => 23,
                'country_id' => 2,
                'name' => 'Washington DC',
                'cost' => 3270.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 1.16,
                'cost_of_living' => 3.37,
                'travel_connectivity' => 4.5600000000000005,
                'commute' => 4.31,
                'safety' => 2.22,
                'business_freedom' => 8.67,
                'healthcare' => 6.31,
                'education' => 7.7,
                'economy' => 6.51,
                'environment_quality' => 7.07,
                'taxation' => 3.94,
                'internet_access' => 3.37,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/washington-dc_web-cdb977d1bf.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/washington-dc-bd9a973760.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:53',
            ),
            23 => 
            array (
                'id' => 24,
                'country_id' => 29,
                'name' => 'Havana',
                'cost' => 1049.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 4.16,
                'cost_of_living' => 0.0,
                'travel_connectivity' => 1.92,
                'commute' => 0.0,
                'safety' => 8.87,
                'business_freedom' => 1.6400000000000001,
                'healthcare' => 7.08,
                'education' => 0.0,
                'economy' => 2.55,
                'environment_quality' => 3.98,
                'taxation' => 0.5,
                'internet_access' => 0.0,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/havana_web-c3f326f3f7.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/havana-809012259a.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:55',
            ),
            24 => 
            array (
                'id' => 25,
                'country_id' => 35,
                'name' => 'Guatemala City',
                'cost' => 1027.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.69,
                'cost_of_living' => 8.08,
                'travel_connectivity' => 0.82,
                'commute' => 0.48,
                'safety' => 6.1,
                'business_freedom' => 4.62,
                'healthcare' => 4.72,
                'education' => 0.0,
                'economy' => 3.81,
                'environment_quality' => 4.24,
                'taxation' => 8.5,
                'internet_access' => 8.08,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/guatemala-city_web-047225c087.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/guatemala-city-69c91dfc00.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:56',
            ),
            25 => 
            array (
                'id' => 26,
                'country_id' => 1,
                'name' => 'Warsaw',
                'cost' => 1284.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.02,
                'cost_of_living' => 8.22,
                'travel_connectivity' => 3.92,
                'commute' => 4.99,
                'safety' => 8.7,
                'business_freedom' => 5.7,
                'healthcare' => 6.78,
                'education' => 4.67,
                'economy' => 4.76,
                'environment_quality' => 6.52,
                'taxation' => 5.0,
                'internet_access' => 8.22,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/warsaw_web-d6a52b39b9.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/warsaw-06c037d5b1.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:57',
            ),
            26 => 
            array (
                'id' => 27,
                'country_id' => 28,
                'name' => 'Bucharest',
                'cost' => 962.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 9.2,
                'cost_of_living' => 8.6,
                'travel_connectivity' => 3.45,
                'commute' => 5.09,
                'safety' => 9.04,
                'business_freedom' => 5.68,
                'healthcare' => 6.16,
                'education' => 2.45,
                'economy' => 4.1,
                'environment_quality' => 3.87,
                'taxation' => 6.79,
                'internet_access' => 8.6,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bucharest_web-b82e0bb355.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bucharest-0baa0f5eaa.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:32:58',
            ),
            27 => 
            array (
                'id' => 28,
                'country_id' => 13,
                'name' => 'Bali',
                'cost' => 683.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 5.0,
                'cost_of_living' => 0.0,
                'travel_connectivity' => 1.9300000000000002,
                'commute' => 4.76,
                'safety' => 8.76,
                'business_freedom' => 3.91,
                'healthcare' => 4.36,
                'education' => 0.53,
                'economy' => 4.66,
                'environment_quality' => 4.47,
                'taxation' => 6.32,
                'internet_access' => 0.0,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bali_web-8c42fbe979.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/bali-934e688d1a.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:33:00',
            ),
            28 => 
            array (
                'id' => 29,
                'country_id' => 7,
                'name' => 'Kiev',
                'cost' => 798.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 9.17,
                'cost_of_living' => 9.95,
                'travel_connectivity' => 5.55,
                'commute' => 5.13,
                'safety' => 7.36,
                'business_freedom' => 4.53,
                'healthcare' => 4.98,
                'education' => 0.5,
                'economy' => 1.28,
                'environment_quality' => 3.9699999999999998,
                'taxation' => 5.43,
                'internet_access' => 9.95,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/kiev_web-86086ae216.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/kiev-e7a4b194e1.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-25 22:33:01',
            ),
            29 => 
            array (
                'id' => 30,
                'country_id' => 22,
                'name' => 'Ho Chi Minh City',
                'cost' => 999.0,
                'weather' => NULL,
                'longitude' => NULL,
                'latitude' => NULL,
                'housing' => 8.45,
                'cost_of_living' => 8.93,
                'travel_connectivity' => 2.08,
                'commute' => 5.16,
                'safety' => 6.78,
                'business_freedom' => 4.1,
                'healthcare' => 5.63,
                'education' => 4.12,
                'economy' => 4.83,
                'environment_quality' => 1.52,
                'taxation' => 4.92,
                'internet_access' => 8.93,
                'image_web' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/ho-chi-minh-city_web-307eb3d218.jpg',
                'image_mobile' => 'https://d13k13wj6adfdf.cloudfront.net/urban_areas/ho-chi-minh-city-e615342546.jpg',
                'created_at' => NULL,
                'updated_at' => '2018-02-26 21:42:00',
            ),
        ));
        
        
    }
}