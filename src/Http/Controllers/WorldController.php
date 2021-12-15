<?php

namespace  Devsbuddy\Laraworld\Http\Controllers;

use App\Http\Controllers\Controller;
use Devsbuddy\Laraworld\Models\City;
use Devsbuddy\Laraworld\Models\Country;
use Devsbuddy\Laraworld\Models\State;

class WorldController extends Controller
{
    public function getCountries()
    {
        return response()->json(['data' => Country::all()], 200);
    }

    public function getStates()
    {
        return response()->json(['data' => State::where('country_id', request()->get('country_id'))->get()], 200);
    }

    public function getCities()
    {
        return response()->json(['data' => City::where('state_id', request()->get('state_id'))->get()], 200);
    }
}