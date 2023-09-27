@extends('admin.base')

@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                      <!--  <h4 class="page-title">Seller Of the Month</h4> -->
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <!--  <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Seller Of the Month</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                    </div>
            </div>
            
            <div class="container-fluid" style="background: #036161;">
            <h2 class="page-title text-light text-center" style="margin-left: -15%; margin-bottom: 20px;">Top Realtor</h2>
                
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
                @endif
                <div class="row">
                       
                    <div class="col-lg-8 col-xlg-8 col-md-8 offset-1">
                    <div class="card">
                    @if($som)
                    <a  href="{{ route('som.show', $som->id ) }}"><span style="top:64px;z-index:999" class="tr btn btn-sm btn-rounded btn-success">Change Top Realtor</span></a>
                    
                            <div class="card-body">
                                <center class="m-t-30"> 
                                    
                                    @if($som)
                                    <img src="{{ url($som->realtor->image) }}" class="rounded-circle mb-5" width="150" height="150" />
                                    @endif
                                    <h4 class="card-title m-t-10">{{ $som->realtor-> name }}</h4>
                                    <label>Fullname</label>
                                </center>
                            </div>
                
                                <hr>
                            <div class="card-body"> 
                                    <small class="text-muted">Email Address </small>
                                    <h6>{{ $som->realtor-> email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                    <h6>{{ $som->realtor-> contact_number }}</h6> <small class="text-muted p-t-30 db">Address</small>
                                    <h6>{{ $som->realtor-> address }}</h6>
                            </div>
                                
                            
                            @else
                            <form action="{{ route('som.store') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                            @csrf
                            <div class="card-body"> 
                                <div class="form-group">
                                        <label class="col-sm-12">Realtor :</label>
                                    <div class="col-sm-12">
                                        <select  name="realtor_id" class="form-control form-control-line" required>
                                        <option selected style="display:none">Select Realtor</option>
                                        @foreach($realtors as $realtor)
                                            <option value="{{ $realtor->id }}" >{{ $realtor->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" style="margin: 0 auto;
                                display: block;" class="mt-5 btn btn-success">Add Som</button>
                            </div>

                        @endif
                    </div>
                    </div>      
                            </div>
                        </div>
                    </div>
                  
                </div>
             
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection