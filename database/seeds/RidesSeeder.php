<?php

use Illuminate\Database\Seeder;
use App\Models\Ride;

class RidesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		ini_set('memory_limit', '-1');
		$data = explode("\n", Storage::disk("local")->get("result.csv"));

		for($i = count($data) - 2; $i > 0; $i--)
		{
			echo $data[$i] . "\n";

			$row = explode(",", $data[$i]);
			$packet = [
				"timestamp" => $row[0],
				"latitude" => $row[1],
				"longitude" => $row[2],
				"base" => str_replace("\"", "", $row[3]),
				"name" => str_replace("\"", "", $row[4]),
				"type" => str_replace("\"", "", $row[5]),
			];

			$validator = Validator::make($packet, [
				"timestamp" => "required|date",
				"latitude" => "required|numeric",
				"longitude" => "required|numeric",
				"base" => "required",
				"name" => "required",
				"type" => "required",
			]);

			if($validator->fails())
			{
				$ride = Ride::create([
					"timestamp" => $row[0],
					"latitude" => $row[1],
					"longitude" => $row[2],
					"base" => str_replace("\"", "", $row[3]),
					"name" => str_replace("\"", "", $row[4]),
					"type" => str_replace("\"", "", $row[5]),
				]);
			}
			else
			{

			}
		}
	}
}
