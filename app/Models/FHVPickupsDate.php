<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FHVPickupsDate extends Model
{

	protected $table = "fhv_pickups_dates";

	protected $fillable = [
		"timestamp", "count"
	];

}
