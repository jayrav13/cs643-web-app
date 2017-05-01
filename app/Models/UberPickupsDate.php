<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UberPickupsDate extends Model
{

	protected $table = "uber_pickups_dates";

	protected $fillable = [
		"timestamp", "count"
	];

}
