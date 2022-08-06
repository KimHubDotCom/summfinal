<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return inertia('Home');
    }

    public function about(){
        return inertia('About');
    }

    public function newsevents(){
        return inertia('News&Events');
    }



}