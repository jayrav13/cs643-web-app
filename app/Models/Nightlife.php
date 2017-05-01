<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nightlife extends Model
{

	protected $table = "nightlife";

	protected $fillable = [
		"timestamp", "latitude", "longitude", "count"
	];

}
