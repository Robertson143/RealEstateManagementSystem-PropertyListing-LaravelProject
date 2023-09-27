@extends('agent.includes.agent')
@section('content')

<div class="card" style="margin-top: -20px;">
    <div class="card-header text-center text-primary">
        <h2 style="  margin-top: 90px; background: #00ffff;">Client Application Form</h2>
    </div>
    <form action="{{ url('update-form/'.$category->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @csrf
    <div class="card-body" style="background: white;">
        <div class="row" >
            <div class="col-md-6 mb-3" style="color: white;">
                <label for="">FullName:</label>
                <input style="background: purple; color: white;" type="text" value="{{ $category->name }}"class="form-control" name="name">
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Unit Name:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->slug }}" class="form-control" name="slug">
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Address</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->description }}" class="form-control" name="description"> 
</div>

<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Email:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->meta_title }}" class="form-control" name="meta_title"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Phone Number:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->meta_keywords }}" class="form-control" name="meta_keywords">
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Birthday:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->birthday }}" class="form-control" name="birthday"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Phase</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->phase }}" class="form-control" name="phase"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Street</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->street }}" class="form-control" name="street"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Block:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->block }}" class="form-control" name="block"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Unit Number:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->unitnumber }}" class="form-control" name="unitnumber"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Monthly Payment:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->income }}" class="form-control" name="income"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Downpayment:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->meta_descrip }}" class="form-control" name="meta_description"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Reservation Fee:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->unit }}" class="form-control" name="unit"> 
</div>
<div class="col-md-6 mb-3" style="color: white;">
    <label for="">Unit Price:</label>
    <input style="background:  purple; color: white;" type="text" value="{{ $category->meta_descrip }}" class="form-control" name="meta_description"> 
</div>

<!--<div class="col-md-6">
<label for="">Primary ID</label>
    <input type="file" name="image" class="form-control">
</div> -->

<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">Pre Selling</label>
    <input type="checkbox" {{ $category->status == "1" ? 'checked':''}} name="status">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
<label for="">Ready For Occupancy</label>
<input type="checkbox" {{ $category->popular == "1" ? 'checked':''}} name="popular">
</div>

    <h3 style="margin-left: 40%; margin-top: 20px;color: white;"> Client 2x2 Picture: </h3>
@if ($category->image)
 <img src="{{ asset('assets/uploads/category/'. $category->image) }}" class="cate-image w-50 h-50" alt="Category image" style="margin-top: 10px; margin-left: 24%;">
 @endif

<h3 style="margin-left: 35%; margin-top: 15px; background: white; color: white; margin-bottom: 15px; background: purple;">&nbsp Client Requirements &nbsp</h3>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">Valid ID:</label>
    <input type="checkbox" {{ $category->checklist1 == "1" ? 'checked' : ''}} name="checklist1">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
<label for="">Job Contract:</label>
<input type="checkbox" {{ $category->checklist2 == "1" ? 'checked' : ''}} name="checklist2">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">Birth Certificate:</label>
    <input type="checkbox" {{ $category->checklist3 == "1" ? 'checked' : ''}} name="checklist3">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
<label for="">TIN Number:</label>
<input type="checkbox" {{ $category->checklist4 == "1" ? 'checked' : ''}} name="checklist4">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">Proof of Billing:</label>
    <input type="checkbox" {{ $category->checklist5 == "1" ? 'checked' : ''}} name="checklist5">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
<label for="">Brgy Clearance:</label>
<input type="checkbox" {{ $category->checklist6 == "1" ? 'checked' : ''}} name="checklist6">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">Proof of Income:</label>
    <input type="checkbox" {{ $category->checklist7 == "1" ? 'checked' : ''}} name="checklist7">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">2x2 Picture:</label>
    <input type="checkbox" {{ $category->checklist8 == "1" ? 'checked' : ''}} name="checklist8">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">DownPayment:</label>
    <input type="checkbox" {{ $category->checklist9 == "1" ? 'checked' : ''}} name="checklist9">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px; color: white;">
    <label for="">Reservation Fee:</label>
    <input type="checkbox" {{ $category->checklist10 == "1" ? 'checked' : ''}} name="checklist10">
</div>
</div>

<br>
<!--<label for="" style="margin-left: 25%; color: white;">Reservation Status </label>
<form action="{{ route('updatestats', $category -> id) }}" method="POST">
    @csrf
    @method('PUT')
<select class="form-select" name="category_stats" style="margin-left: 25%; width: 40%;">
  <option {{ $category->stats == '0'? 'selected':'' }} value="0">&nbspPending&nbsp</option>
  <option {{ $category->stats == '1'? 'selected':'' }} value="1">&nbspApprove&nbsp</option>
</select> -->
<button type="submit" class="btn btn-primary " style="margin-left: 90%;">Update</button>
</form>
    <!--<button type="submit" class="btn btn-primary" style="margin-left: 45%;">Submit Form</button> -->
</div>
</div>
</form> 
</div>
</div>
@endsection