<?php

namespace App\Http\Controllers;
use App\Models\Ride;
use App\Models\UberPickupsDate;
use App\Models\LyftPickupsDate;
use App\Models\FHVPickupsDate;
use Response;
use DB;

use Illuminate\Http\Request;

class RidesController extends Controller
{

	public function index(Request $request)
	{
		$rides = Ride::where("name", "Uber")->inRandomOrder()->take(15000)->get();
		return Response::json($rides);
	}

	public function pickups_dates(Request $request)
	{
		$counts = DB::select("select distinct b.timestamp, coalesce(b.uber_count, 0) uber_count, coalesce(b.lyft_count, 0) lyft_count, coalesce(f.count, 0) fhv_count from (select distinct u.timestamp, u.count uber_count, l.count lyft_count from uber_pickups_dates u full join lyft_pickups_dates l on (u.timestamp = l.timestamp) order by u.timestamp) b full join fhv_pickups_dates f on (b.timestamp = f.timestamp) 
			where coalesce(b.uber_count, 0) != 0 and coalesce(b.lyft_count, 0) != 0 and coalesce(f.count, 0) != 0
			order by b.timestamp;");
		return Response::json($counts, 200);
	}

}
