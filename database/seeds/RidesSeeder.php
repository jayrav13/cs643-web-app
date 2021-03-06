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
			try
			{
				$row = explode(",", $data[$i]);
				$ride = Ride::create([
					"timestamp" => $row[0],
					"latitude" => $row[1],
					"longitude" => $row[2],
					"base" => str_replace("\"", "", $row[3]),
					"name" => str_replace("\"", "", $row[4]),
					"type" => str_replace("\"", "", $row[5]),
				]);
				echo $data[$i] . "\n";
			}
			catch (\Illuminate\Database\QueryException $exception)
			{
				continue;
			}
		}
	}
}
