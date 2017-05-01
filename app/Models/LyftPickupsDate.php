<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LyftPickupsDate extends Model
{

	protected $table = "lyft_pickups_dates";

	protected $fillable = [
		"timestamp", "count"
	];

}
