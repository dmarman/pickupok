<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    // http://www.averageheight.co/breast-cup-size-by-country
    // https://en.wikipedia.org/wiki/List_of_countries_by_body_mass_index#cite_note-3
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Poland',
            'code' => 'PL',
            'bmi' => 23.7,
            'breast' => 3
        ]);

        DB::table('countries')->insert([
            'name' => 'USA',
            'code' => 'US',
            'bmi' => 35.5,
            'breast' => 4
        ]);

        DB::table('countries')->insert([
            'name' => 'Thailand',
            'code' => 'TH',
            'bmi' => 7,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Greece',
            'code' => 'GR',
            'bmi' => 24.2,
            'breast' => 3
        ]);

        DB::table('countries')->insert([
            'name' => 'Philippines',
            'code' => 'PH',
            'bmi' => 5.2,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Russia',
            'code' => 'RU',
            'bmi' => 18.1,
            'breast' => 5
        ]);

        DB::table('countries')->insert([
            'name' => 'Ukraine',
            'code' => 'UA',
            'bmi' => 22,
            'breast' => 3
        ]);

        DB::table('countries')->insert([
            'name' => 'Japan',
            'code' => 'JP',
            'bmi' => 4.8,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Taiwan',
            'code' => 'TW',
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Canada',
            'code' => 'CA',
            'bmi' => 29.5,
            'breast' => 3
        ]);

        DB::table('countries')->insert([
            'name' => 'Colombia',
            'code' => 'CO',
            'bmi' => 17.6,
            'breast' => 4
        ]);

        DB::table('countries')->insert([
            'name' => 'Latvia',
            'code' => 'LV',
            'bmi' => 21.6,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Indonesia',
            'code' => 'ID',
            'bmi' => 4.8,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Brazil',
            'code' => 'BR',
            'bmi' => 18.5,
            'breast' => 3
        ]);

        DB::table('countries')->insert([
            'name' => 'Peru',
            'code' => 'PE',
            'bmi' => 15.2,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'India',
            'code' => 'IN',
            'bmi' => 2.7,
            'breast' => 2
        ]);

        DB::table('countries')->insert([
            'name' => 'Hong Kong',
            'code' => 'HK',
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Czech Republic',
            'code' => 'CZ',
            'bmi' => 26.4,
            'breast' => 4
        ]);

        DB::table('countries')->insert([
            'name' => 'Dominican Republic',
            'code' => 'DO',
            'bmi' => 21,
            'breast' => 2
        ]);

        DB::table('countries')->insert([
            'name' => 'Norway',
            'code' => 'NO',
            'bmi' => 23.6,
            'breast' => 5
        ]);

        DB::table('countries')->insert([
            'name' => 'Uzbekistan',
            'code' => 'UZ',
            'bmi' => 13.8,
            'breast' => 2
        ]);

        DB::table('countries')->insert([
            'name' => 'Vietnam',
            'code' => 'VN',
            'bmi' => 1.6,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Mexico',
            'code' => 'MX',
            'bmi' => 65.6,
            'breast' => 2
        ]);

        DB::table('countries')->insert([
            'name' => 'Singapore',
            'code' => 'SG',
            'bmi' => 5.8,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Korea',
            'code' => 'KP',
            'bmi' => 4.4,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Malaysa',
            'code' => 'MY',
            'bmi' => 13,
            'breast' => 1
        ]);

        DB::table('countries')->insert([
            'name' => 'Hungary',
            'code' => 'HU',
            'bmi' => 28.2,
            'breast' => 4
        ]);

        DB::table('countries')->insert([
            'name' => 'Romania',
            'code' => 'RO',
            'bmi' => 23.4,
            'breast' => 3
        ]);

        DB::table('countries')->insert([
            'name' => 'Cuba',
            'code' => 'CU',
            'bmi' => 18.9,
            'breast' => 2
        ]);

        DB::table('countries')->insert([
            'name' => 'Spain',
            'code' => 'ES',
            'bmi' => 24.6,
            'breast' => 2
        ]);

        DB::table('countries')->insert([
            'name' => 'Argentina',
            'code' => 'AR',
            'bmi' => 27.3,
            'breast' => 3
        ]);
    }
}
