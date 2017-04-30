<?php

use Illuminate\Database\Seeder;
use App\Models\PeakLocation;

class PeakLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$locations = explode("\n", Storage::disk("local")->get("peak-locations.txt"));
    	for($i = 0; $i < count($locations); $i++)
    	{
    		$breakdown = explode("\t", $locations[$i]);
    		$breakdown[0] = explode(",", $breakdown[0]);
    		if(count($breakdown[0]) != 2)
    		{
    			continue;
    		}
    		$packet = [
    			"latitude" => $breakdown[0][0],
    			"longitude" => $breakdown[0][1],
    			"count" => $breakdown[1],
    		];

    		$location = PeakLocation::create($packet);

    	}

    }
}
