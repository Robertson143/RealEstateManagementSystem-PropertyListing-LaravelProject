<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Listing,
    Realtor,
    User,
    Contact,
    Payment
};

class AdminController extends Controller
{
    public function index()
    {
        $payment = Payment::all();
        $listings = Listing::orderBy('id', 'DESC')->get();
        $published_listings = $listings->where('is_published', '1');
        $unpublished_listings = $listings->where('is_published', '0');
        
        $listings = Listing::orderBy('id', 'DESC')->get();
        $total_listing = $listings->where('is_published', '1')->count();
        $total_new_listing = $listings->where('is_published', '0')->count();
        $users = User::all();
        $total_admins = $users->where('role', '0')->count();
        $total_users = $users->where('role', '2')->count();
        $total_realtors = Realtor::count();
        $inquiries = Contact::orderBy('id', 'DESC')->get();
        $total_payment = Payment::count();
       

        return view('admin.layouts.dashboard', compact('total_listing','total_admins' ,'total_users','listings',
                    'total_new_listing','inquiries','total_realtors', 'total_payment', 'payment','published_listings','unpublished_listings' ));
    }
}
