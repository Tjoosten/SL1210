<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
	protected $fillable = []; 

	public function subDevisions() 
	{
		return $this->belongsToMany(SubDevisions::class)
			->withTimestamps();
	}
}
