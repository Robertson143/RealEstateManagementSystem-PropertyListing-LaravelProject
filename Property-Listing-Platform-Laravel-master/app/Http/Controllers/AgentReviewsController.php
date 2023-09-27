<?php

namespace App\Http\Controllers;

use App\Reviews;
use App\Contact;
use Illuminate\Http\Request;

class AgentReviewsController extends Controller
{
    public function agentreviews()
    {
        $inquiries = Contact::orderBy('id', 'DESC')->paginate(50);
        return view('agentfolder.agentreviews', compact('inquiries'));
    }

    public function views($id)
    {
        $inquiry = Contact::findOrFail($id);
        return view('agentfolder.views', compact('inquiry'));
    }

    public function updatestatus(Request $request, $id)
    {
        $inquiry = Contact::find($id);
        $inquiry->status = $request->input('inquiry_status');
        $inquiry->update();
        return redirect('agentreviews')->with('status', 'Client Reservation Approved Successfully');
    }

    public function reply(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
            'message'=>'required',
            'listing_id' => 'required',
            'user_id' => 'required',

        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact_number' => $request->get('contact_number'),
            'description' => $request->get('message'),
            'listing_id' => $request->get('listing_id'),
            'user_id' => $request->get('user_id'),

        ]);

        $isSuccess =$contact->save();
        if ($isSuccess) {
            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );
            
            return redirect('agentfolder.views')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somthing Went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }
}


