@extends('agent.includes.agent')
@section('content')

<div class="card" style="margin-top: -20px;">
    <div class="card-header">
        <h2 class="text-primary" style=" text-align: center; margin-bottom: 40px; margin-top: 20px; background: #00ffff; color: purple;">Client Application Form</h2>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-form') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">FullName:</label>
                <input type="text" placeholder="Full Name"class="form-control" name="name">
</div>
<div class="col-md-6 mb-3">
  <label for="">Unit Name:</label>
  <select class="form-control" name="slug">
    <option selected>Select Unit Name</option>
    @foreach($listings as $listing)
    <option value="{{ $listing -> title }}">{{ $listing -> title }}</option>
    @endforeach
  </select>
</div>
<div class="col-md-6 mb-3">
    <label for="">Address:</label>
    <input type="text" placeholder="Address" class="form-control" name="description"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">Email:</label>
    <input type="text" placeholder="Email" class="form-control" name="meta_title"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Phone Number:</label>
    <input type="text" placeholder="Phone Number"class="form-control" name="meta_keywords">
</div>
<div class="col-md-6 mb-3">
    <label for="">Birthday:</label>
    <input type="date" placeholder="mm/dd/years" class="form-control" name="birthday"> 
</div>
<div class="col-md-6 mb-3">
  <label for="">Phase:</label>
  <select class="form-control" name="phase">
            <option selected>Select Phase</option>
            @foreach($listings as $listing)
                <option value="{{ $listing -> phase }}">{{ $listing -> phase }}</option> 
                @endforeach                  
            </select>
</div>
<div class="col-md-6 mb-3">
  <label for="">Street:</label>
  <select class="form-control" name="street">
            <option selected>Select Street</option>
                <option value="1">Camhills Street</option> 
                <option value="2">Galaxy Street</option> 
                <option value="3">Meadows Street</option> 
            </select>
</div>
<div class="col-md-6 mb-3">
  <label for="">Block:</label>
  <select class="form-control" name="block">
            <option selected>Select Block</option>
                <option value="1">A</option> 
                <option value="2">B</option> 
                <option value="3">C</option> 
                <option value="4">A & B</option> 
                <option value="5">A & C</option> 
            </select>
</div>
<div class="col-md-6 mb-3">
  <label for="">Unit Number:</label>
  <select class="form-control" name="unitnumber">
            <option selected>Select Unit Number</option>
                <option value="001">001</option> 
                <option value="002">002</option> 
                <option value="003">003</option> 
                <option value="004">004</option> 
                <option value="005">005</option> 
                <option value="006">006</option> 
                <option value="007">007</option>
                <option value="008">008</option>
                <option value="009">009</option> 
            </select>
</div>
<div class="col-md-6 mb-3">
    <label for="">Monthly Payment:</label>
    <input type="number" placeholder="₱" class="form-control" name="income"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">DownPayment:</label>
    <input type="number" placeholder="₱" class="form-control" name="meta_description"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Reservation Fee:</label>
    <input type="number" placeholder="₱" class="form-control" name="unit"> 
</div>
<div class="col-md-6 mb-3">
  <label for="">Unit Price:</label>
  <select class="form-control" name="price">
            <option selected>Select Unit Price</option>
            @foreach($listings as $listing)
                <option value="{{$listing -> price }}">{{ $listing -> price }}</option> 
                @endforeach
            </select>
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Pre Selling</label>
    <input type="checkbox" name="status">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Ready For Occupancy</label>
<input type="checkbox" name="popular">
</div>
<div class="col-md-12">
<label for="">Insert Client 2x2 Picture:</label>
    <input type="file" name="image" class="form-control">
</div>
<h3 class="text-primary" style="margin-left: 35%; margin-top: 15px; background: #00ffff; color: white; margin-bottom: 15px;">&nbsp Client Requirements  &nbsp</h3>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Valid ID:</label>
    <input type="checkbox" name="checklist1">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Job Contract:</label>
<input type="checkbox" name="checklist2">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Birth Certificate:</label>
    <input type="checkbox" name="checklist3">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">TIN Number:</label>
<input type="checkbox" name="checklist4">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Proof of Billing:</label>
    <input type="checkbox" name="checklist5">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Brgy Clearance:</label>
<input type="checkbox" name="checklist6">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Proof of Income:</label>
    <input type="checkbox" name="checklist7">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">2x2 Picture:</label>
    <input type="checkbox" name="checklist8">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">DownPayment:</label>
    <input type="checkbox" name="checklist9">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Reservation Fee:</label>
    <input type="checkbox" name="checklist10">
</div>
    <button type="submit"  class="btn btn-primary" style="margin-left: 44%; margin-top: 15px;">Submit Form</button>
</div>
</div>
</form> 
</div>
</div>
@endsection