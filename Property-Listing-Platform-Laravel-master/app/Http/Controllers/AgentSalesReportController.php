<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Payment;

class AgentSalesReportController extends Controller
{
    public function salesreport()
    {
         $payment = Payment::all();
        $listings = Listing::orderBy('id', 'DESC')->get();
        $published_listings = $listings->where('is_published', '1');
        $unpublished_listings = $listings->where('is_published', '0');

        return view('agentfolder.salesreport', compact('payment', 'published_listings', 'unpublished_listings'));
    }

}
