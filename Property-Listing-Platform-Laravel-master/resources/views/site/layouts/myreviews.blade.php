
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
                                  <!--  <h6 style="margin-left: 20px;">
                                        Client
                                    </h6> -->
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                               
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Reservation Status</a>
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
                        <div class="tab-content profile-tab" id="myTabContent">  
                                <div class="row">
                                    <div class="col-md-12" style="margin-top: -120px;">
                                    <div class="schedule">  
                                    <label style="margin-left: 42%;">My Schedule</label>
                                    <div class="alert">
                                  <span style="color: white;">
                                 {{ $inquiry -> schedule }}
                                  </span> 
                                </div>
                             </div>



                                     <!--   <label style="margin-left: 42%;">Message</label><br/>
                                        <div class="alert">
  <span style="color: white;">
  {{ $inquiry -> description }}
  </span> 

</div> -->
<!--<div class="alert">
  <span style="color: white; margin-left: 70%;">
  {{ $inquiry -> reply }}
  </span> 

</div> -->
<!--<form action="{{ url('reply') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                            <label>Reply :</label>
                            <textarea name="message" class="form-control" required></textarea><br>
                        <button type="submit" class="btn btn-primary" style="margin-left: 85%;">&nbsp Reply &nbsp</button>
</form> -->
<a href="{{ route('single.listing', $inquiry -> listing -> id ) }}"><span class="btn-sm btn-rounded btn-primary" style="margin-left: 82%;">View Model Unit</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>


          
@endsection