<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Contact;
use App\ClientForm;
use App\Equity;

class DashboardController extends Controller
{
    public function index()
    {
        $payment = Payment::all();
        $total_payment = Payment::count();
        $total_inquiries = Contact::count();
        $total_category = ClientForm::count();
        return view('agentfolder.index', compact('payment', 'total_payment', 'total_inquiries', 'total_category'));
    }

    public function clientdetails($id)
    {
    
    $payment = Payment::find($id);
    $equity = Equity::all();
        $totalInterest = 0;
        foreach($equity as $equities){
            $totalInterest += $equities->interest;
        }
    return view('agentfolder.clientdetails', compact('payment','equity', 'totalInterest'));
    }


}
