<?php

namespace HelloPlugin\Controllers;

use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function index()
    {
        // Return the "home" view
        return view('HelloPlugin::home');
    }
}
