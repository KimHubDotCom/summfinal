<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class BikeController extends Controller
{
    public function index(){
        $bikes = Bike::get();
        return inertia('Bike', [
            'bikes' => $bikes
        ]);
    }
}