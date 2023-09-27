@extends('admin.base')

@section('content')
 
 
<style>
    .alert {
  padding: 20px;
  background-color: #4287f5;
  color: white;

  
}

    </style>

<h1 class="text-light" style="text-align: center; background: #036161; margin-left: 10px; margin-top: 50px;"> Client Reservation</h1>
 <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5" style="background: #036161; margin-left: 10px;">
                        <div class="card">
                            <div class="card-body">
                            <center class="m-t-30">
                                    <h2 class="card-title m-t-10" style="color: #03a614;">{{ $inquiry -> name }}</h2>
                                    <small class="text-muted">Name</small>
                            </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address: </small>
                                <h3 style="color: #03a614;">{{ $inquiry -> email }}</h2> <small class="text-muted p-t-30 db">Phone Number:</small>
                                <h3  style="color: #03a614;">{{ $inquiry -> contact_number }}</h3> 
                                <br/>
                                <small class="text-muted p-t-30 db">Unit Listing:</small>
                                        <div class="col-md-12 text-primary">
                                            <h3 style="text-align: center; color: #03a614;">{{ $inquiry -> listing -> title }}</h3>
                                            <td class="mr-5">
                                                <a href="{{ route('single.listing', $inquiry -> listing -> id ) }}"><span class="btn btn-sm btn-rounded btn-success" style="margin-left: 85px; ">View Unit List</span></a>
                                            </td>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7" style="margin-left: -10px; background: #036161;">
                        <div class="card">
                            <div class="card-body">
                                    <div class="form-group">
                        <div class="card">
                            <div class="card-body">
                                    <div class="form-group">
                                        <div class="schedule">
                                        <label class="col-md-12 text-center" style="color: #03a614;">Schedule</label>
                                        <div class="alert">
  <span>
  {{ $inquiry -> schedule }}
  </span> 
                                        </div>
                                  <!--      <label class="col-md-12 text-center">Client Message</label>
                                            <div class="alert">
  <span>
  {{ $inquiry -> description }}
  </span> 
</div> -->
<label for="" style="margin-left: 70%; color: #03a614;">Reservation Status </label>
<form action="{{ url('update-inquiry/'.$inquiry->id) }}" method="POST">
    @csrf
    @method('PUT')
    
</div>
<select class="form-select" name="inquiry_status" style="margin-left: 73%; height: 35px; background: #03a614; color:white; width: 100px;">
  <option style="background: #00ffff; height: 50px;" {{ $inquiry->status == '0'? 'selected':'' }} value="0">&nbspPending&nbsp</option>
  <option style="background: #00ffff; height: 50px;" {{ $inquiry->status == '1'? 'selected':'' }} value="1">&nbspApprove&nbsp</option>
</select>
<!--<button type="submit" class="btn btn-primary">Update</button> -->
</form>

                                          
                                   <!--     <div class="col-md-12 text-success">
                                            <h3 style="margin-left: 350px;">{{ $inquiry -> reply }} </h3>
                                            <div class="form-group">
                                                <br>
                         <form action="{{ url('reply') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                            <label>Reply :</label>
                            <textarea name="message" class="form-control" required></textarea>
                        </div>  
                        <button type="submit" class="btn btn-primary" style="margin-left: 85%;">Reply</button>
</form> -->
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

@endsection