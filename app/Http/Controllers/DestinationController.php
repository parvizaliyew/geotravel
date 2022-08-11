<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Info;

class DestinationController extends Controller
{
    public function index()
    {
        $info=Info::first();
        $countries=Country::withTranslations()->get();
       
        return view('front.destination',compact('countries','info'));
    }
}
