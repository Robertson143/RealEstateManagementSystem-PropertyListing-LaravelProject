<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Listing, Realtor
};


class ListingController extends Controller
{

    public function index()
    {
        $listings = Listing::orderBy('id', 'DESC')->get();
        $published_listings = $listings->where('is_published', '1');
        $unpublished_listings = $listings->where('is_published', '0');
        return view('admin.layouts.listings.listings', compact('published_listings','unpublished_listings'));
        // $listings = Listing::where('is_published', '1')->orderBy('id', 'DESC')->get();

    }


    public function create()
    {
        $realtors = Realtor::all();
        return view('admin.layouts.listings.add-listing', compact('realtors'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'available'=> 'required',
            'phase' => 'required',
            'street' => 'required',
            'block' => 'required',
            'unit1' => 'required',
            'unit2' => 'required',
            'unit3' => 'required',
            'unit4' => 'required',
            'unit5' => 'required',
            'unit6' => 'required',
            'unit7' => 'required',
            'unit8' => 'required',
            'square_feet' => 'required',
            'lot_size' => 'required',
            'lot_size' => 'required',
            'garage' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'porch' => 'required',
            'living' => 'required',
            'kitchen' => 'required',
            'dining' => 'required',
            'den' => 'required',
            'toilet' => 'required',
            'bedarea' => 'required',
            'garagearea' => 'required',
            'city' => 'required',
            //'country' => 'required',
            'realtor_id' => 'required',
            'is_published' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $listing = new Listing([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'available' => $request->get('available'),
            'phase' => $request->get('phase'),
            'street' => $request->get('street'),
            'block' => $request->get('block'),
            'unit1' => $request->get('unit1'),
            'unit2' => $request->get('unit2'),
            'unit3' => $request->get('unit3'),
            'unit4' => $request->get('unit4'),
            'unit5' => $request->get('unit5'),
            'unit6' => $request->get('unit6'),
            'unit7' => $request->get('unit7'),
            'unit8' => $request->get('unit8'),
            'square_feet' => $request->get('square_feet'),
            'lot_size' => $request->get('lot_size'),
            'garage' => $request->get('garage'),
            'bedroom' => $request->get('bedroom'),
            'bathroom' => $request->get('bathroom'),
            'porch' => $request->get('porch'),
            'living' => $request->get('living'),
            'kitchen' => $request->get('kitchen'),
            'dining' => $request->get('dining'),
            'den' => $request->get('den'),
            'toilet' => $request->get('toilet'),
            'bedarea' => $request->get('bedarea'),
            'garagearea' => $request->get('garagearea'),
            'city' => $request->get('city'),
            //'country' => $request->get('country'),
            'realtor_id' => $request->get('realtor_id'),
            'is_published' => $request->get('is_published'),

        ]);


        //call custom file upload function
        $isSuccess = $this->massimageUploadHandler($request, $listing);

        if ($isSuccess) {
            
            $listing->save();
            return redirect(route('listings.index'))->with('status', 'Listing Added Successfully!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }


    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('admin.layouts.listings.single-listing', compact('listing'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $listing = Listing::findOrFail($id);


        $listing->title = $request->get('title');
        $listing->description = $request->get('description');
        $listing->price = $request->get('price');
        $listing->available = $request->get('available');
        $listing->phase = $request->get('phase');
        $listing->street = $request->get('street');
        $listing->block = $request->get('block');
        $listing->unit1 = $request->get('unit1');
        $listing->unit2 = $request->get('unit2');
        $listing->unit3 = $request->get('unit3');
        $listing->unit4 = $request->get('unit4');
        $listing->unit5 = $request->get('unit5');
        $listing->unit6 = $request->get('unit6');
        $listing->unit7 = $request->get('unit7');
        $listing->unit8 = $request->get('unit8');
        $listing->square_feet = $request->get('square_feet');
        $listing->lot_size = $request->get('lot_size');
        $listing->garage = $request->get('garage');
        $listing->bedroom = $request->get('bedroom');
        $listing->bathroom = $request->get('bathroom');
        $listing->porch = $request->get('porch');
        $listing->living = $request->get('living');
        $listing->kitchen = $request->get('kitchen');
        $listing->dining = $request->get('dining');
        $listing->den = $request->get('den');
        $listing->toilet = $request->get('toilet');
        $listing->bedarea = $request->get('bedarea');
        $listing->garagearea = $request->get('garagearea');
        $listing->city = $request->get('city');
        $listing->checklist1 = $request->input('checklist1') == TRUE ? '1':'0';
        $listing->checklist2 = $request->input('checklist2') == TRUE ? '1':'0';
        $listing->checklist3 = $request->input('checklist3') == TRUE ? '1':'0';
        $listing->checklist4 = $request->input('checklist4') == TRUE ? '1':'0';
        $listing->checklist5 = $request->input('checklist5') == TRUE ? '1':'0';
        $listing->checklist6 = $request->input('checklist6') == TRUE ? '1':'0';
        $listing->checklist7 = $request->input('checklist7') == TRUE ? '1':'0';
        $listing->checklist8 = $request->input('checklist8') == TRUE ? '1':'0';
        $listing->checklist9 = $request->input('checklist9') == TRUE ? '1':'0';
        $listing->checklist10 = $request->input('checklist10') == TRUE ? '1':'0';
        $listing->checklist11 = $request->input('checklist11') == TRUE ? '1':'0';
        $listing->checklist12 = $request->input('checklist12') == TRUE ? '1':'0';
        $listing->checklist13 = $request->input('checklist13') == TRUE ? '1':'0';
        $listing->checklist14 = $request->input('checklist14') == TRUE ? '1':'0';
        $listing->checklist15 = $request->input('checklist15') == TRUE ? '1':'0';
        $listing->checklist16 = $request->input('checklist16') == TRUE ? '1':'0';
        $listing->checklist17 = $request->input('checklist17') == TRUE ? '1':'0';
        $listing->checklist18 = $request->input('checklist18') == TRUE ? '1':'0';
       // $listing->country = $request->get('country');
        $listing->realtor_id = $request->get('realtor_id');
        $listing->is_published = $request->get('is_published');
        //function for image upload
        $this->massimageUploadHandler($request, $listing);
        $listing->save();
        return redirect(route('listings.index'))->with('status', 'Listing Updated Successfully!');
    }

    
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        $isSuccess = $listing->delete();

        if ($isSuccess) {
            $this->imageDeleteHandler($listing);
        }
        return redirect(route('listings.index'))->with('status', 'Listing Disable Successfully!');
    }


    //method for mass image upload
    private function massimageUploadHandler($request, $listing)
    {
        $isSuccess = FALSE;
        $images = array(
            $request->image,
            $request->image_one,
            $request->image_two,
            $request->image_three,
            $request->image_four,
            $request->image_five,
            $request->image_six,
        );

        foreach ($images as $key => $image) {


            if (file_exists($image)) {

                $isSuccess = $this->imageUploadHandler($image, $listing, $key);
            }
        }
        return $isSuccess;
    }

    //method for image upload

    private function imageUploadHandler($image, $listing, $key)
    {
        $image_new_name = time() . '.' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
        $isScucess = $image->move(public_path('images/listing'), $image_new_name);
        if ($isScucess) {
            $image_url = 'images/listing/' . $image_new_name;
            $table_name = 'thumbnail_' . $key;
            if (file_exists($listing->$table_name)) {
                unlink($listing->$table_name);
            }
            $listing->$table_name = $image_url;

            return TRUE;
            return FALSE;
        }
    }

    //method for delete image from folder
    private function imageDeleteHandler($listing)
    {
        $images = array(
            $listing->thumbnail_0,
            $listing->thumbnail_1,
            $listing->thumbnail_2,
            $listing->thumbnail_3,
            $listing->thumbnail_4,
            $listing->thumbnail_5,
            $listing->thumbnail_6,
        );
        foreach ($images as $image) {
            if (file_exists($image)) {
                unlink($image);
            }
        }
    }
}
