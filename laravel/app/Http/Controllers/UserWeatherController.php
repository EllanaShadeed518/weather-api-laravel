<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserWeatherController extends Controller
{
    public function index(Request $request){
       // print_r($request->all());
       $lat= $request->lat;
       $long=$request->long;

        $api_key='b3aaf699260ae84eedc6580f158f7e7e';
        $response=Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$long}&appid=$api_key");
//dd($response->json());

return view('weather_info',['cuurent_weather'=>$response->json()]);


    }
}
