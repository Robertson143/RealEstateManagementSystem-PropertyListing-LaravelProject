<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientForm;
use App\Listing;

class ClientFormController extends Controller
{
    public function form()
    {
        $category = ClientForm::all();
        return view('agentfolder.form', compact('category'));
    }

    public function clientform()
    {
        $listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->get();
        return view('agentfolder.clientform', compact('listings'));
    }


    public function insertform(Request $request)
    {
        $category = new ClientForm();
        if($request->hasFile('image'))
      
    {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('assets/uploads/category',$filename);
        $category->image = $filename;
      
    }

    $category->name = $request->input('name');
    $category->slug = $request->input('slug');
    $category->description = $request->input('description');
    $category->status = $request->input('status') == TRUE ? '1':'0';
    $category->popular = $request->input('popular') == TRUE ? '1':'0';
    $category->meta_title = $request->input('meta_title');
    $category->meta_keywords = $request->input('meta_keywords');
    $category->meta_descrip = $request->input('meta_description');
    $category->birthday = $request->input('birthday');
    $category->phase = $request->input('phase');
    $category->street = $request->input('street');
    $category->block = $request->input('block');
    $category->unitnumber = $request->input('unitnumber');
    $category->price = $request->input('price');
    $category->unit = $request->input('unit');
    $category->income = $request->input('income');
    $category->checklist1 = $request->input('checklist1') == TRUE ? '1':'0';
    $category->checklist2 = $request->input('checklist2') == TRUE ? '1':'0';
    $category->checklist3 = $request->input('checklist3') == TRUE ? '1':'0';
    $category->checklist4 = $request->input('checklist4') == TRUE ? '1':'0';
    $category->checklist5 = $request->input('checklist5') == TRUE ? '1':'0';
    $category->checklist6 = $request->input('checklist6') == TRUE ? '1':'0';
    $category->checklist7 = $request->input('checklist7') == TRUE ? '1':'0';
    $category->checklist8 = $request->input('checklist8') == TRUE ? '1':'0';
    $category->checklist9 = $request->input('checklist9') == TRUE ? '1':'0';
    $category->checklist10 = $request->input('checklist10') == TRUE ? '1':'0';
    $category->save();
    return redirect('/form')->with('status',"Form Created Successfully");

    }

    public function editform($id)
    {
        $category = ClientForm::find($id);
        return view('agentfolder.editform', compact('category'));
    }

    public function updateform(Request $request, $id)
    {
        $category = ClientForm::findOrFail($id);

    $category->checklist1 = $request->input('checklist1') == TRUE ? '1':'0';
    $category->checklist2 = $request->input('checklist2') == TRUE ? '1':'0';
    $category->checklist3 = $request->input('checklist3') == TRUE ? '1':'0';
    $category->checklist4 = $request->input('checklist4') == TRUE ? '1':'0';
    $category->checklist5 = $request->input('checklist5') == TRUE ? '1':'0';
    $category->checklist6 = $request->input('checklist6') == TRUE ? '1':'0';
    $category->checklist7 = $request->input('checklist7') == TRUE ? '1':'0';
    $category->checklist8 = $request->input('checklist8') == TRUE ? '1':'0';
    $category->checklist9 = $request->input('checklist9') == TRUE ? '1':'0';
    $category->checklist10 = $request->input('checklist10') == TRUE ? '1':'0';
    $category->save();
    return redirect('/form')->with('status',"Form Updated Successfully");
    }

}

   