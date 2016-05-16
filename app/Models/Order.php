<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function status()
	{
		return $this->belongsTo('OrderStatus');
	}

	public function points()
	{
		return $this->belongsToMany('Point');
	}
}
