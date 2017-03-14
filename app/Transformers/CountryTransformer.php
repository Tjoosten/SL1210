<?php

namespace App\Transformers;

use App\Countries;
use League\Fractal;

class CountryTransformer extends Fractal\TransformerAbstract
{
    public function transform(Countries $country)
    {
        return [

        ];
    }
}