<?php

namespace App\Http\Controllers;

use App\Service\OpenWeatherMap;

class HomeController extends Controller
{
    public function index()
    {
        $weather = OpenWeatherMap::forecast();
        $weather = collect($weather)->skip(1);

        $current = OpenWeatherMap::current();

        return view('index', compact('current', 'weather'));
    }
}
