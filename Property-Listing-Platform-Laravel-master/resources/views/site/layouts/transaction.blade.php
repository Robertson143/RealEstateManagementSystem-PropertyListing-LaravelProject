
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

.alert {
  padding: 20px;
  background-color: #4287f5;
  color: white;
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
                                 <!--   <h6 style="margin-left: 20px;">
                                        Client
                                    </h6> -->
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Requirements Status</a>
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
                            <a href="{{  route('clientreview') }}">Reservation</a><br>
                            <a href="{{ route('transaction') }}">Requirements</a>        
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab bg-primary" id="myTabContent" style="margin-top: -19%; width: 100%;"><br>
                        <h5 style="margin-bottom: 50px; margin-left: 150px; color: white;">List of Requirements</h5> 
                        @foreach($payment as $payments)                
                                <div class="row" style="margin-left: 30px; color: white;">
                                            <div class="col-md-3">
                                                <label>Valid ID:</label>
                                            </div>
                                            <div class="col-md-3">
                                            <p><input type="checkbox" {{ $payments->checklist1 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                            </div>
                                        </div> 
                                        <div class="row" style="margin-left: 30px; color: white;">
                                            <div class="col-md-3">
                                                <label>Job Contract:</label>
                                            </div>
                                            <div class="col-md-3">
                                            <p><input type="checkbox" {{ $payments->checklist2 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-left: 30px; color: white;">
                                            <div class="col-md-3">
                                                <label>Birth Certificate:</label>
                                            </div>
                                            <div class="col-md-3">
                                            <p><input type="checkbox" {{ $payments->checklist3 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-left: 30px; color: white;" >
                                            <div class="col-md-3">
                                                <label>TIN Number:</label>
                                            </div>
                                            <div class="col-md-3">
                                            <p><input type="checkbox" {{ $payments->checklist4 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                            </div>
                                        </div>
                                       
                                        <div class="row" style="margin-left: 30px; color: white;">
                                            <div class="col-md-3">
                                                <label>Proof of Billing:</label>
                                            </div>
                                            <div class="col-md-3">
                                            <p><input type="checkbox" {{ $payments->checklist5 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                       </div>                     
                                    </div>
                                    <div class="row" style="margin-left: 37%; margin-top: -200px; color: white;">
                                            <div class="col-md-4">
                                                <label>Brgy Clearance:</label>
                                            </div>
                                            <div class="col-md-4">
                                            <p><input type="checkbox" {{ $payments->checklist6 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                       </div>                     
                                    </div>
                                    
                                    <div class="row" style="margin-left: 37%; color: white;">
                                            <div class="col-md-4">
                                                <label>Proof of Income:</label>
                                            </div>
                                            <div class="col-md-4">
                                            <p><input type="checkbox" {{ $payments->checklist7 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                       </div>                     
                                    </div>
                                    <div class="row" style="margin-left: 37%; color: white;">
                                            <div class="col-md-4">
                                                <label>2x2 Picture:</label>
                                            </div>
                                            <div class="col-md-4">
                                            <p><input type="checkbox" {{ $payments->checklist8 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                       </div>                     
                                    </div>
                                    <div class="row" style="margin-left: 37%; color: white;">
                                            <div class="col-md-4">
                                                <label>DownPayment:</label>
                                            </div>
                                            <div class="col-md-4">
                                            <p><input type="checkbox" {{ $payments->checklist9 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                       </div>                     
                                    </div>
                                    <div class="row" style="margin-left: 37%; color: white;">
                                            <div class="col-md-4">
                                                <label>Reservation Fee:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><input type="checkbox" {{ $payments->checklist10 == "1" ? 'checked' : ''}} name="checklist10"></p>
                                       </div>                     
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>


          
@endsection