<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Equity;
use App\Listing;
use App\ClientForm;

class PaymentController extends Controller
{
    public function payment()
    {
        $payment = Payment::all();
        return view('admin.layouts.payment', compact('payment'));
    }

    public function addpayment()

    { 
        $category = ClientForm::first();
        $listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->get();
        return view('admin.layouts.addpayment', compact('listings', 'category'));
    }

    public function viewpayment($id)
    {
        $payment = Payment::find($id);
        $equity = Equity::all();
        $totalInterest = 0;
        foreach($equity as $equities){
            $totalInterest += $equities->interest;
        }
        return view('admin.layouts.viewpayment', compact('payment', 'equity', 'totalInterest'));
    }

    public function updatepayment(Request $request, $id)
    {
        $payment = Payment::find($id);

        $payment->name = $request->input('name');
        $payment->address = $request->input('address');
        $payment->unit = $request->input('unit');
        $payment->price = $request->input('price');
        $payment->phase = $request->input('phase');
        $payment->unitnumber = $request->input('unitnumber');
        $payment->street = $request->input('street');
        $payment->bank = $request->input('bank');
        $payment->block = $request->input('block');
        $payment->downpayment = $request->input('downpayment');
        $payment->reservation = $request->input('reservation');
        $payment->balance = $request->input('balance');
        $payment->monthly = $request->input('monthly');
        $payment->status = $request->input('status') == TRUE ? '1':'0';
        $payment->popular = $request->input('popular') == TRUE ? '1':'0';
        $payment->checklist1 = $request->input('checklist1') == TRUE ? '1':'0';
        $payment->checklist2 = $request->input('checklist2') == TRUE ? '1':'0';
        $payment->checklist3 = $request->input('checklist3') == TRUE ? '1':'0';
        $payment->checklist4 = $request->input('checklist4') == TRUE ? '1':'0';
        $payment->checklist5 = $request->input('checklist5') == TRUE ? '1':'0';
        $payment->checklist6 = $request->input('checklist6') == TRUE ? '1':'0';
        $payment->checklist7 = $request->input('checklist7') == TRUE ? '1':'0';
        $payment->checklist8 = $request->input('checklist8') == TRUE ? '1':'0';
        $payment->checklist9 = $request->input('checklist9') == TRUE ? '1':'0';
        $payment->checklist10 = $request->input('checklist10') == TRUE ? '1':'0';
        $payment->tax = $request->input('tax');
        $payment->contract = $request->input('contract');
        $payment->total = $request->input('total');
        $payment->update();
        return redirect(route('admin.layouts.payment'))->with('status', 'Client Payment Updated Successfully!');

    }


public function insertpayment(Request $request)
{
    $payment = new Payment();

    $payment->name = $request->input('name');
    $payment->address = $request->input('address');
    $payment->unit = $request->input('unit');
    $payment->price = $request->input('price');
    $payment->phase = $request->input('phase');
    $payment->unitnumber = $request->input('unitnumber');
    $payment->street = $request->input('street');
    $payment->bank = $request->input('bank');
    $payment->block = $request->input('block');
    $payment->downpayment = $request->input('downpayment');
    $payment->reservation = $request->input('reservation');
    $payment->balance = $request->input('balance');
    $payment->monthly = $request->input('monthly');
    $payment->status = $request->input('status') == TRUE ? '1' : '0';
    $payment->popular = $request->input('popular') == TRUE ? '1' : '0';
    $payment->checklist1 = $request->input('checklist1') == TRUE ? '1' : '0';
    $payment->checklist2 = $request->input('checklist2') == TRUE ? '1' : '0';
    $payment->checklist3 = $request->input('checklist3') == TRUE ? '1' : '0';
    $payment->checklist4 = $request->input('checklist4') == TRUE ? '1' : '0';
    $payment->checklist5 = $request->input('checklist5') == TRUE ? '1' : '0';
    $payment->checklist6 = $request->input('checklist6') == TRUE ? '1' : '0';
    $payment->checklist7 = $request->input('checklist7') == TRUE ? '1' : '0';
    $payment->checklist8 = $request->input('checklist8') == TRUE ? '1' : '0';
    $payment->checklist9 = $request->input('checklist9') == TRUE ? '1' : '0';
    $payment->checklist10 = $request->input('checklist10') == TRUE ? '1' : '0';
    $payment->tax = $request->input('tax');
    $payment->contract = $request->input('contract');
    $payment->total = $request->input('total');

    // Find the listing by the selected unit title
    $selectedUnitTitle = $request->input('unit');
    $listing = Listing::where('title', $selectedUnitTitle)->first();

    if ($listing) {
        // Check if there are available units for the selected listing
        if ($listing->available > 0) {
            // Decrement the available_units count by 1
            $listing->available--;

            // Save the updated listing
            $listing->save();

            // Save the payment details
            $payment->save();

            return redirect(route('admin.layouts.payment'))->with('status', 'Client Payment Created Successfully');
        } else {
            // Handle the case where there are no available units for the selected listing
            return redirect(route('admin.layouts.payment'))->with('status', 'Error: Selected unit is no longer available.');
        }
    } else {
        // Handle the case where the selected unit is not found in the listings
        return redirect(route('admin.layouts.payment'))->with('status', 'Error: Selected unit not found.');
    }
}

        
}
