<?php

namespace App\Http\Controllers;
use App\Models\Ride;
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

}
