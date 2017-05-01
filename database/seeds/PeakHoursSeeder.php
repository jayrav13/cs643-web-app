<?php

use Illuminate\Database\Seeder;
use App\Models\PeakHour;

class PeakHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$locations = explode("\n", Storage::disk("local")->get("peak-hours.txt"));
    	for($i = 0; $i < count($locations); $i++)
    	{
    		$breakdown = explode("\t", $locations[$i]);
    		$breakdown[0] = explode("-", $breakdown[0]);
    		if(count($breakdown[0]) != 2)
    		{
    			continue;
    		}
    		$packet = [
    			"name" => $breakdown[0][0],
    			"hour" => $breakdown[0][1],
    			"count" => $breakdown[1],
    		];

    		$location = PeakHour::create($packet);

    	}

    }
}
