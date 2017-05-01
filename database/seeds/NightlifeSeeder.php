<?php

use Illuminate\Database\Seeder;
use App\Models\Nightlife;

class NightlifeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$data = Storage::disk("local")->get("nightlife.csv");
    	$data = explode("\n", $data);

    	for($i = 0; $i < count($data); $i++)
    	{
    		$row = explode("\t", $data[$i]);
    		$row[0] = explode(",", $row[0]);

    		$nl = Nightlife::create([
    			"timestamp" => $row[0][0],
    			"latitude" => $row[0][1],
    			"longitude" => $row[0][2],
    			"count" => $row[1]
    		]);

    	}

    }
}
