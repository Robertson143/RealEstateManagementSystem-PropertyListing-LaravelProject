<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equity;
use PDF;

class EquityController extends Controller
{
    public function updateequity(Request $request)
    {
        $equity = new Equity();

        $equity->paymentdate = $request->input('paymentdate');
        $equity->monthlypayment = $request->input('monthlypayment');
        $equity->principal = $request->input('principal');
        $equity->interest = $request->input('interest');
        $equity->save();
        return redirect()->back()->with('status', 'Client Equity Updated Successfully');
    }

    public function updatestatus(Request $request, $id)
    {
        $equity = Equity::findOrFail($id);
        $equity->stats = $request->input('equity_stats');
        $equity->update();
        return redirect(route('admin.layouts.payment'))->with('status', 'Client Equity Updated Successfully');
    }
  
}   
