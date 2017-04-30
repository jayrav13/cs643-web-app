<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeakLocation extends Model
{

	protected $table = "peak_locations";

	protected $fillable = [
		"latitude", "longitude", "count"
	];

}
