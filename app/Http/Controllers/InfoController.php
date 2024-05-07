<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

class InfoController extends Controller
{
    //
    public function getWeather($place)
    {
        $apiKey = 'e6145b33c2c7c72e566aa779a0ea57bb';
        $url = 'http://api.openweathermap.org/data/2.5/weather';
        $params = [
            'q' => $place,
            'APPID' => $apiKey,
            'units' => 'metric'
        ];

        $client = new Client();
        $response = $client->request('GET', $url, ['query' => $params]);
        $weatherData = json_decode($response->getBody(), true);

        // Return only the necessary weather data
        return [
            'temperature' => $weatherData['main']['temp'],
            'humidity' => $weatherData['main']['humidity'],
            'wind_speed' => $weatherData['wind']['speed'],
        ];
    }

    public function getGeo($place)
    {
        $geoApiKeys = [
            'Tokyo' => '51626a4b1d64786140592fc5b01e52d74140f00101f901d58b170000000000c00208',
            'Yokohama' => '518a2f247160746140590382efece1b84140f00101f901ca09290000000000c0020792030b3233312d303031372b6a70',
            'Kyoto' => '5198a3c7ef2df86040590470b378b1824140f00101f901a275050000000000c00208',
            'Osaka' => '51749e0ce90bf0604059ea6fae06cd584140f00101f9011279050000000000c00208',
            'Sapporo' => '5115e7035d56ab614059f838d384ed874540f00101f901f5573e0000000000c00208',
            'Nagoya' => '5145903985cb1c614059d5eb1681b1974140f00101f901aad6450000000000c00208',
        ];

        $apiKey = 'd12313bff883411daba68521418ad8ad';
        $url = 'https://api.geoapify.com/v2/place-details';
        $params = [
            'id' => $geoApiKeys[$place],
            'apiKey' => $apiKey
        ];

        $client = new Client([
            'handler' => HandlerStack::create(),
            'curl' => [
                CURLOPT_CAINFO => dirname(dirname(dirname(__DIR__))). '/cacert.pem',
                CURLOPT_SSL_VERIFYPEER => true,
            ],
        ]);


        $response = $client->request('GET', $url, ['query' => $params]);
        $geoData = json_decode($response->getBody(), true);

        return [
            'latitude' => $geoData['features'][0]['properties']['lat'],
            'longitude' => $geoData['features'][0]['properties']['lon'],
            'place' => $geoData['features'][0]['properties']['formatted'],
            'timezone' => $geoData['features'][0]['properties']['timezone']['offset_STD'],
        ];
    }

    public function getInfo($place)
    {
        $weatherData = $this->getWeather($place);
        $geoData = $this->getGeo($place);

        // Merge data
        $data = array_merge($weatherData, $geoData);

        return $data;
    }
}
