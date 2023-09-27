<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function payments(){
        return view('site.layouts.payments');
    }
}
