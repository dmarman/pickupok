<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Rating;
use App\Metadata;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        $cities = City::with('country', 'metadata', 'ratings.city')->get();

        foreach ($cities as $city){
            $scores = [];

            // Calculate metadata from ratings
            foreach ($city->ratings as $rating) {
                // TODO change $rating->metadata for $rating->parameter
                if (!array_key_exists($rating->metadata, $scores)) {
                    $scores[$rating->metadata] = [$rating->value];
                } else {
                    array_push($scores[$rating->metadata], $rating->value);
                }
            };

            // Retrieve $metadata from the city
            $metadata = Metadata::with('city.country')->firstOrCreate(['city_id' => $city->id]);

            // Calculate score
            $score = NULL;
            foreach ($scores as $key => $value){
                $metadata[$key] = array_sum($scores[$key])/count($scores[$key]);
                $score += $metadata[$key];
            }
            $score = 10 + ($score + 2*$city->country->breast - 0.365*$city->country->bmi - 0.006*$city->cost)/(count($scores) + 3);

            // Save final score in DB
            $metadata->score = $score;
            $metadata->save();
        }

        $cities = City::with('country', 'metadata', 'ratings.city')->get();

        $cities = $cities->sortByDesc('metadata.score');

        return view('welcome', compact('cities'));
    }
}
