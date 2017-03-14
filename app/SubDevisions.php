<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDevisions extends Model 
{
	protected $fillable = ['ISO_3166_2', 'name'];
}