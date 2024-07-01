<?php

namespace App\Service;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class OpenWeatherMap
{
    private static $pointers = [
        'forecast' => '/2.5/forecast',
        'weather' => '/2.5/weather'
    ];


    /**
     * Fetches weather data for a given location.
     *
     * @param string $query city or region name
     * @return object all list weather information relevant to the location
     */
    public static function forecast($query = "Uzbekistan,Tashkent")
    {
        $url = config('app.openweathermap_url') . self::$pointers['forecast'];

        $response = Http::withOptions(['verify' => false])->get($url, [
            'q' => $query,
            'units' => 'metric',
            'appid' => config('app.openweathermap_appid')
        ]);

        $response = $response->json();

        // Assuming $response['list'] contains all the forecasted data
        foreach ($response['list'] as $item) {
            $date = date('Y-m-d', strtotime($item['dt_txt']));
            $time = date('H:i:s', strtotime($item['dt_txt']));

            // Store only one forecast per day (for simplicity, based on the date)
            $weeklyForecast[$date]['date'] = Carbon::parse($date)->format('d F Y');
            $weeklyForecast[$date]['dayName'] =  Carbon::parse($date)->format('D');

            $weeklyForecast[$date]['weather'][] = [
                'time' => Carbon::parse($time)->format('H:i'),
                'temperature' => $item['main']['temp'],
                'description' => $item['weather'][0]['description'],
                'icon' => $item['weather'][0]['icon'],
                'main' => $item['main'],
                'wind' => $item['wind']
            ];
        }

        // dd($weeklyForecast);

        return $weeklyForecast;
    }

    /**
     * Fetches weather data for a given location.
     *
     * @param string $location city or region name
     * @return object all weather information relevant to the location
     */
    public static function current($location = "Tashkent")
    {
        $url = config('app.openweathermap_url') . self::$pointers['weather'];

        $response = Http::withOptions(['verify' => false])->get($url, [
            'q' => $location,
            'units' => 'metric',
            'appid' => config('app.openweathermap_appid')
        ]);

        return $response->json();
    }
}
