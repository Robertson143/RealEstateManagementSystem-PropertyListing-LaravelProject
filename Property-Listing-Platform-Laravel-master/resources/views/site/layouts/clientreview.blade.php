
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
                                   <!-- <h6 style="margin-left: 20px;">
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
                    <div class="table-responsive m-t-20 p-1" style="width: 700px; margin-top: -100px;">
                    <h5 class="text-center text-light" style="background: #0062cc;"> List of Reservation  </h5><br>
                        <table class="table table-bordered table-responsive-lg">
                            <thead class="bg-primary" style="color: white;">
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Realtor</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Unit Name</th>
                                    <th scope="col">Status</th> 
                                    <th scope="col">Action</th> 
                                </tr>
                            </thead>
                            <tbody style="color: white; background: #0062cc;">

                                @foreach($inquiries as $inquiry)
                                <tr id="row_{{$inquiry->id}}">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $inquiry -> name }}</td>
                                    <td>{{ $inquiry -> listing -> realtor -> name }}</td>
                                    <td>{{ $inquiry -> email }}</td>
                                    <td>{{ $inquiry -> contact_number }}</td>
                                    <td>{{ $inquiry -> listing-> title }}</td>
                                    <td>{{ $inquiry -> status == '0' ? 'Pending' : 'Approved' }}</td> 
                                    <td>
                                        <a href="{{ url('myreviews/'.$inquiry -> id ) }}" style="width: -50px;"><span class="btn-sm btn-rounded btn-primary">View</span></a>                                   
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>           
                         </div>        
                        </div>
                    </div>
                    
                </div>
                
            </form>           
        </div>
       


          
@endsection