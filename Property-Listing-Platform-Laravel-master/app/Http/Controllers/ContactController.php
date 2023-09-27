<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Form;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
            'schedule'=>'required',
            //'message'=>'required',
            'listing_id' => 'required',
            'user_id' => 'required',

        ]);

        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact_number' => $request->get('contact_number'),
            'schedule' => $request->get('schedule'),
            //'description' => $request->get('message'),
            'listing_id' => $request->get('listing_id'),
            'user_id' => $request->get('user_id'),

        ]);

        $isSuccess =$contact->save();
        if ($isSuccess) {
            $notification = array(
                'message' => 'Reservation Created successfully!',
                'alert-type' => 'success'
            );
            
            return redirect('clientreview')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somthing Went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function sendform(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'zip'=>'required',
            'source'=>'required',
            'income'=>'required',
            'fee'=>'required',
            'contact_number'=>'required',
            'message'=>'required',
            'listing_id' => 'required',
            'user_id' => 'required',
        ]);

        $form = new Form([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'zip' => $request->get('zip'),
            'source' => $request->get('source'),
            'income' => $request->get('income'),
            'fee' => $request->get('fee'),
            'contact_number' => $request->get('contact_number'),
            'description' => $request->get('message'),
            'listing_id' => $request->get('listing_id'),
            'user_id' => $request->get('user_id'),

        ]);

        $isSuccess = $form->save();
        if ($isSuccess) {
            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );
            
            return redirect('/')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somthing Went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }
 }

