<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SubDevisions
 * 
 * @package App
 */
class SubDevisions extends Model 
{
    /**
     * The database table name. 
     * 
     * @var string
     */
    protected $table = 'devisions';

	/**
	 * Mass-assign fields for the database table. 
     * 
	 * @var array
	 */
	protected $fillable = ['ISO_3166_2', 'name'];
}