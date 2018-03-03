<?php

namespace App\Http\Controllers;

use App\Venue;
use App\VenueRating;
use Illuminate\Http\Request;

class VenueRatingController extends Controller
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
        $venueId = $request->venue_id;
        $venueRating = new VenueRating;
        $venueRating->venue_id = $venueId;
        $venueRating->user_id = 1;
        $venueRating->value = $request->value;
        $venueRating->save();

        $venueRatings = VenueRating::where('venue_id', $venueId)->get();

        $totalScore = 0;

        foreach ($venueRatings as $rating){
            $totalScore += $rating->value;
        }

        $score = $totalScore/count($venueRatings);

        $venue = Venue::find($venueId);

        $venue->score = $score;
        $venue->save();

        return $venueRating;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VenueRating  $venueRating
     * @return \Illuminate\Http\Response
     */
    public function show(VenueRating $venueRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VenueRating  $venueRating
     * @return \Illuminate\Http\Response
     */
    public function edit(VenueRating $venueRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VenueRating  $venueRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VenueRating $venueRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VenueRating  $venueRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(VenueRating $venueRating)
    {
        //
    }
}
