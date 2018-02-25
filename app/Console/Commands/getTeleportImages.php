<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;
use App\City;

class getTeleportImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:getTeleportImages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get image urls from Teleport API';

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
            if($city->image_web == NULL){
                $this->error($city->name);
                $data = $this->getImages($city->name);
                $this->info(json_encode($data['photos'][0]['image']));

                $city->image_mobile = $data['photos'][0]['image']['mobile'];
                $city->image_web = $data['photos'][0]['image']['web'];

                $city->save();

                sleep(1);
            }
        }
    }

    public function getImages($city){
        $city = strtolower($city); // Api slug does not accept spaces
        $city = preg_replace('/ /', '-', $city); // Api slug does not accept spaces, - needed
        $client = new Client();
        $data = [];
        $res = $client->get('https://api.teleport.org/api/urban_areas/slug:' . $city . '/images/');
        if($res->getStatusCode() == 200) {
            $data = json_decode($res->getBody(), true);
        } else {
            $this->info('Cannot reach API');
        }

        return $data;
    }
}
