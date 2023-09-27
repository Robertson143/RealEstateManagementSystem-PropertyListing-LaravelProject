
@extends('site.base')

@section('title') Profile | @endsection
@section('content')


<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
  </style>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img src="{{ asset('assets/img/profile.jpg') }}" class="logs" alt="">
                            <div class="file btn btn-lg btn-primary" style="margin-left: 1px;">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    {{ Auth::user()->get_full_name() }}
                                    </h5>
                                    <!--<h6 style="margin-left: 20px;">
                                        Client
                                    </h6> -->
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Payment Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work text-center" style="margin-top: -75px;">
                            <p>Personal Information</p>
                            <a href="{{ route('dashboard') }}">Profile</a><br>
                            <a href="{{ route('clientreview') }}">Reservation</a><br>
                            <a href="{{ route('transaction') }}">Requirements</a>    
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row" style="margin-top: -100px;">
                                            <div class="col-md-6">
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> {{ Auth::user()->get_full_name() }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Trench Town</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Number:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>911</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Bank Manager</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Monthly Income:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>₱ 69,000</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin-top: -100px;">
                                  @foreach($payment as $payments)    
                                  <div class="row">
                                            <div class="col-md-3">
                                                <label>Unit Name:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p style="margin-left: -80px;">{{ $payments->unit }}</p>
                                            </div>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Unit Price:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>₱ {{ $payments->price }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Downpayment:</label>
                                            </div>
                                            <div class="col-md-2">
                                                <p>₱ {{ $payments->downpayment }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Monthly Payment:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>₱ {{ $payments->monthly }}</p>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Reservation Fee:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>₱ {{ $payments->reservation }} </p>
                                            </div>
                                        </div>   
                                        <div class="row" style="margin-left: 40%; margin-top: -202px;  width: 120%;">
                                            <div class="col-md-3">
                                                <label>Street:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $payments->street }}</p>
                                            </div>
                                        </div>    
                                        <div class="row" style="margin-left: 40%;  width: 120%;">
                                            <div class="col-md-3">
                                                <label>Unit Number:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $payments->unitnumber }} </p>
                                            </div>
                                        </div>    
                                        <div class="row" style="margin-left: 40%;  width: 120%;">
                                            <div class="col-md-3">
                                                <label>Status:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $payments->popular == "1" ? 'RFO' : 'Pre-Selling'}} </p>
                                            </div>
                                        </div>    
                                        <div class="row" style="margin-left: 40%;  width: 120%;">
                                            <div class="col-md-3">
                                                <label>Months Available:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $payments->total }} Months </p>
                                            </div>
                                        </div>    
                                        <div class="row" style="margin-left: 40%;  width: 120%;">
                                            <div class="col-md-3">
                                                <label>Years of Contract:</label>
                                            </div>
                                            <div class="col-md-3">
                                                <p>{{ $payments->contract }} Years</p>
                                        
                                        </div>    
                                       </div>   
                                        <br>                                     
                                       <div class="container text-center">   
 <h2 class="text-center">Payments & Balance</h2>
 <p>Total Payments: ₱ {{ $payments->tax }}</p> 
 <div class="progress">
   <div class="progress-bar progress-bar-striped active text-center" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
     40%
   </div>
 </div>
</div>
<br><br>
<div class="container text-center">

 <p>Available Balance: ₱ {{ $payments->balance }}</p> 
 <div class="progress">
   <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:20%">
     20%
   </div>
 </div>
</div>
@endforeach
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
          
@endsection