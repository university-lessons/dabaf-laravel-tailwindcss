<?php

namespace App\Http\Controllers;

use App\Models\Car;

class LessonController extends Controller
{
    public function example(){

        $car = Car::factory()->make();
        // $car = null;
        $cars = Car::factory()->count(5)->make();
        // $cars = [];

        return view('example', ['car' => $car, 'cars' => $cars]);
    }
}
