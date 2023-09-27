<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ReservationController extends Controller
{
    public function reservation()
    {
        $inquiries = Contact::orderBy('id', 'DESC')->paginate(50);
        return view('admin.layouts.reservation', compact('inquiries'));
    }
}
