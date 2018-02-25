<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Countries')->delete();
        
        \DB::table('Countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Poland',
                'code' => 'PL',
                'bmi' => 23.7,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'USA',
                'code' => 'US',
                'bmi' => 35.5,
                'breast' => 4.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Thailand',
                'code' => 'TH',
                'bmi' => 7.0,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Greece',
                'code' => 'GR',
                'bmi' => 24.2,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Philippines',
                'code' => 'PH',
                'bmi' => 5.2,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Russia',
                'code' => 'RU',
                'bmi' => 18.1,
                'breast' => 5.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Ukraine',
                'code' => 'UA',
                'bmi' => 22.0,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Japan',
                'code' => 'JP',
                'bmi' => 4.8,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Taiwan',
                'code' => 'TW',
                'bmi' => NULL,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Canada',
                'code' => 'CA',
                'bmi' => 29.5,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Colombia',
                'code' => 'CO',
                'bmi' => 17.6,
                'breast' => 4.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Latvia',
                'code' => 'LV',
                'bmi' => 21.6,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Indonesia',
                'code' => 'ID',
                'bmi' => 4.8,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Brazil',
                'code' => 'BR',
                'bmi' => 18.5,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Peru',
                'code' => 'PE',
                'bmi' => 15.2,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'India',
                'code' => 'IN',
                'bmi' => 2.7,
                'breast' => 2.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Hong Kong',
                'code' => 'HK',
                'bmi' => NULL,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'bmi' => 26.4,
                'breast' => 4.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'bmi' => 21.0,
                'breast' => 2.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Norway',
                'code' => 'NO',
                'bmi' => 23.6,
                'breast' => 5.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'bmi' => 13.8,
                'breast' => 2.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Vietnam',
                'code' => 'VN',
                'bmi' => 1.6,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Mexico',
                'code' => 'MX',
                'bmi' => 24.3,
                'breast' => 2.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Singapore',
                'code' => 'SG',
                'bmi' => 5.8,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Korea',
                'code' => 'KP',
                'bmi' => 4.4,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Malaysa',
                'code' => 'MY',
                'bmi' => 13.0,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Hungary',
                'code' => 'HU',
                'bmi' => 28.2,
                'breast' => 4.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Romania',
                'code' => 'RO',
                'bmi' => 23.4,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Cuba',
                'code' => 'CU',
                'bmi' => 18.9,
                'breast' => 2.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Spain',
                'code' => 'ES',
                'bmi' => 24.6,
                'breast' => 2.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Argentina',
                'code' => 'AR',
                'bmi' => 27.3,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'France',
                'code' => 'FR',
                'bmi' => 22.0,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Iceland',
                'code' => 'IS',
                'bmi' => 24.2,
                'breast' => 4.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Italy',
                'code' => 'IT',
                'bmi' => 20.0,
                'breast' => 3.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Guatemala',
                'code' => 'GT',
                'bmi' => 15.1,
                'breast' => 1.0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}