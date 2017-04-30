<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;
use App\Models\PeakLocation;

class LocationsController extends Controller
{

	public function peak(Request $request)
	{
		$locations = PeakLocation::orderBy('count', 'DESC')->take(200)->get();
		return Response::json($locations, 200);
	}

}
