<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
	public function section()
	{
		return $this->belongsTo('Section');
	}
	public function orders()
	{
		return $this->belongsToMany('Order');
	}
}
