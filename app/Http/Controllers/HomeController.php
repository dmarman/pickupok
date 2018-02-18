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
        $ratings = Rating::all();
        $cities = [];

        foreach ($ratings as $rating) {
            if (!array_key_exists($rating->city_id, $cities)) {
                $cities[$rating->city_id] = [$rating->metadata => [$rating->value]];
            } else {
                if(!array_key_exists($rating->metadata, $cities[$rating->city_id])){
                    $cities[$rating->city_id][$rating->metadata] = [$rating->value];
                } else {
                    array_push($cities[$rating->city_id][$rating->metadata], $rating->value);
                }
            }
        };

        foreach ($cities as $cityId => $parameters){
            $scores = [];
            $metadata = Metadata::firstOrCreate(['city_id' => $cityId]);

            foreach ($parameters as $parameter => $value){
                $metadata[$parameter] = array_sum($value)/count($value);
                array_push($scores, $metadata[$parameter]);
            }

            $metadata->score = 10*array_sum($scores)/count($scores);

            $metadata->save();
        }

        $cities = City::with('country', 'metadata')->get();

        $cities = $cities->sortByDesc('metadata.score');

        return view('welcome', compact('cities'));
    }
}
