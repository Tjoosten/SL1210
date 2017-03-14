<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Transformers\CountryTransformer;
use League\Fractal\Resource\Collection;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class CountryController extends Controller
{
    private $countries; /** @var collection $countries The database model for the countries. */

    /**
     * CountryController constructor.
     * 
     * @param Countries $countries
     */
    public function __construct(Countries $countries)
    {
        $this->countries = $countries;
    }

    /**
     *
     */
    public function all()
    {
        $country   = $this->countries->paginate(25);
        $countries = $country->getCollection();
        $resource  = new Collection($countries, new CountryTransformer);

        return $resource->setPaginator(new IlluminatePaginatorAdapter($country));
    }

	/**
	 * 
	 */
	public function callingcode() 
	{
		//
	}

	/**
	 * 
	 */
	public function region()
	{
		//
	}
}
