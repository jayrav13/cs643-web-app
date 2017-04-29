<?php

namespace App\Http\Controllers;
use App\Models\Ride;
use Response;

use Illuminate\Http\Request;

class RidesController extends Controller
{

	public function index(Request $request)
	{
		$rides = Ride::take(5)->get();
		return Response::json($rides);
	}

}
