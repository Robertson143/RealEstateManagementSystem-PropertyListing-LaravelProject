<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutus()
    {
        return view('site.layouts.aboutus');
    }
}
