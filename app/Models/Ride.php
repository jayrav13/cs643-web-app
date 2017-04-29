<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{

	protected $table = "rides";

	protected $fillable = [
		"name", "base", "type", "timestamp", "latitude", "longitude"
	];

}
