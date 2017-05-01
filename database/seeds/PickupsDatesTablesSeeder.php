<?php

use Illuminate\Database\Seeder;
use App\Models\UberPickupsDate;
use App\Models\LyftPickupsDate;
use App\Models\FHVPickupsDate;

class PickupsDatesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// Uber
    	$data = Storage::disk("local")->get("pickup-dates/uber-taxi/uber.csv");
    	$data = explode("\n", $data);

    	foreach($data as $row)
    	{
    		$row = explode(",", $row);
    		$uber = UberPickupsDate::create([
    			"timestamp" => $row[0],
    			"count" => $row[1]
    		]);
    	}

    	// Lyft
    	$data = Storage::disk("local")->get("pickup-dates/uber-lyft-combined/lyft.csv");
    	$data = explode("\n", $data);

    	foreach($data as $row)
    	{
    		$row = explode(",", $row);
    		$lyft = LyftPickupsDate::create([
    			"timestamp" => $row[0],
    			"count" => $row[1]
    		]);
    	}

    	// Taxi
    	$data = Storage::disk("local")->get("pickup-dates/uber-taxi/taxi.csv");
    	$data = explode("\n", $data);

    	foreach($data as $row)
    	{
    		$row = explode(",", $row);
    		$lyft = FHVPickupsDate::create([
    			"timestamp" => $row[0],
    			"count" => $row[1]
    		]);
    	}

    }
}
