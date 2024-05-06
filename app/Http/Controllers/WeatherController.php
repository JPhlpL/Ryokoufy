<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    //
    public function getWeather()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => 'Tokyo',
                'APPID' => 'e6145b33c2c7c72e566aa779a0ea57bb',
                'units' => 'metric'
            ]
        ]);

        $weatherData = json_decode($response->getBody(), true);

        return $weatherData;

        // return view('weather', ['weatherData' => $weatherData]);
    }
}
