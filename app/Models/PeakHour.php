<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeakHour extends Model
{

	protected $table = "peak_hours";

	protected $fillable = [
		"name", "hour", "count"
	];

}
