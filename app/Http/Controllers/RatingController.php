<?php

namespace App\Http\Controllers;

use App\Rating;
use App\City;
use App\Metadata;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rating = new Rating;
        $rating->user_id = 1;
        $rating->city_id = $request->city_id;
        $rating->metadata = $request->metadata;
        $rating->value = $request->value;
        $rating->save();

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
            $score = 10 + ($score + 2*$city->country->breast - 0.365*$city->country->bmi - 0.006*$city->cost + $city->healthcare + $city->safety)/(count($scores) + 5);

            // Save final score in DB
            $metadata->score = $score;
            $metadata->save();
        }

        return $rating;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
