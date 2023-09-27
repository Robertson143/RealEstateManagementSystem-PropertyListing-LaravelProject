<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Payment;

class SalesController extends Controller
{
    public function sales(){

        $payment = Payment::all();
        $listings = Listing::orderBy('id', 'DESC')->get();
        $published_listings = $listings->where('is_published', '1');
        $unpublished_listings = $listings->where('is_published', '0');
    
        return view('admin.layouts.sales', compact('payment','published_listings','unpublished_listings'));
    }
}
