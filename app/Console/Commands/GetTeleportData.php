<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\City;

class GetTeleportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:getTeleportData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get fresh scores data from Teleport API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        // https://api.teleport.org/api/urban_areas/slug:barcelona/details
        
        $cities = City::all();

        foreach ($cities as $city){
            $this->error($city->name);
            $data = $this->getScores($city->name);
            foreach ($data['categories'] as $key => $category){
                $this->info($key);
                $this->info(json_encode($category['name']));
                $this->info(json_encode($category['score_out_of_10']));
            }

            $city->housing = $data['categories'][0]['score_out_of_10'];
            $city->cost_of_living = $data['categories'][1]['score_out_of_10'];
            $city->travel_connectivity = $data['categories'][4]['score_out_of_10'];
            $city->commute = $data['categories'][5]['score_out_of_10'];
            $city->business_freedom = $data['categories'][6]['score_out_of_10'];
            $city->safety = $data['categories'][7]['score_out_of_10'];
            $city->healthcare = $data['categories'][8]['score_out_of_10'];
            $city->education = $data['categories'][9]['score_out_of_10'];
            $city->environment_quality = $data['categories'][10]['score_out_of_10'];
            $city->economy = $data['categories'][11]['score_out_of_10'];
            $city->taxation = $data['categories'][12]['score_out_of_10'];
            $city->internet_access = $data['categories'][1]['score_out_of_10'];

            $city->save();

            sleep(1);
        }
    }

    public function getScores($city){
        $city = strtolower($city); // Api slug does not accept spaces
        $city = preg_replace('/ /', '-', $city); // Api slug does not accept spaces, - needed
        $client = new Client();
        $data = [];
        $res = $client->get('https://api.teleport.org/api/urban_areas/slug:' . $city . '/scores/');
        if($res->getStatusCode() == 200) {
            $data = json_decode($res->getBody(), true);

        } else {
            $this->info('Cannot reach API');
        }
//            sleep(2);

        return $data;
    }
}
