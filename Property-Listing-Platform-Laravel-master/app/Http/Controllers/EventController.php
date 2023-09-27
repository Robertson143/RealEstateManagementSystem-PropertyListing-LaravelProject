<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function events(){
        return view('site.layouts.events');
    }
}
