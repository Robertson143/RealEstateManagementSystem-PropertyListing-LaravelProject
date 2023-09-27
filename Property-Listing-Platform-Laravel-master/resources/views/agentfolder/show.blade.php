@extends('agent.includes.agent')
@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb" style="background: #00ffff;">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title text-primary">List of Model Unit</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                   <!-- <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Property</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                    </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
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
                <div class="row" style="background: #00ffff;">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center class="m-t-30"> <h6 style="color: purple;"> House Model Image</h6>
                            <img src="{{ url($listing->thumbnail_0) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: purple;"> Floor Plan Image</h6>
                            @if($listing->thumbnail_1)
                            <img src="{{ url($listing->thumbnail_1) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: purple;"> Show Room Image #1</h6>
                            @endif
                            @if($listing->thumbnail_2)
                            <img src="{{ url($listing->thumbnail_2) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: purple;"> Show Room Image #2</h6>
                            @endif
                            @if($listing->thumbnail_3)
                            <img src="{{ url($listing->thumbnail_3) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: purple;"> Show Room Image #3</h6>
                            @endif
                            @if($listing->thumbnail_4)
                            <img src="{{ url($listing->thumbnail_4) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: purple;"> Show Room Image #4</h6>
                            @endif
                            @if($listing->thumbnail_5)
                            <img src="{{ url($listing->thumbnail_5) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: purple;"> Show Room Image #5</h6>
                            @endif
                            @if($listing->thumbnail_6)
                            <img src="{{ url($listing->thumbnail_6) }}" class="mb-5" width="300" height="150" />
                            @endif

                            </center>
                        </div>
                        <div>
                            <hr> </div>

                    </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body" style="margin-bottom: 50%;">
                            <form action="{{ url('update/'. $listing -> id) }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                        @method('PATCH') 
                        
                        <div class="form-group">
                            <label style="color: purple;">Unit Name :</label>
                            <input type="text" name="title" class="form-control" value="{{ $listing -> title }}" placeholder="Name" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1" style="margin-left: 51%;">
                            <label style="color: purple;">Price :</label>
                            <input type="number" name="price" class="form-control" value="{{ $listing -> price }}"  placeholder="Price" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1" style="margin-left: 51%;">
                            <label style="color: purple;">Available Units:</label>
                            <input type="number" name="available" class="form-control" value="{{ $listing -> available }}"  placeholder="Available" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1" style="margin-left: 51%;">
 <label for="" style="color: purple;">Phase:</label>
 <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> phase }}" name="phase" style="background: purple; color: white;"> 
</div>  
<div class="col-md-6 mb-1" style="margin-left: 51%;">
<label style="color: purple;">Street :</label>
<input type="text" name="city" class="form-control"  value="{{ $listing -> city }}" placeholder="City" style="background: purple; color: white;">
</div>    
     <div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Block:</label>
    <input type="text" placeholder="Block" value="{{ $listing -> block }}" class="form-control" name="block" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" value="{{ $listing -> unit1 }}" class="form-control" name="unit1" style="background: purple; color: white;"> 
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist1 == "1" ? 'checked' : ''}} name="checklist1"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist2 == "1" ? 'checked' : ''}} name="checklist2"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control"  value="{{ $listing -> unit2 }}" name="unit2" style="background: purple; color: white;"> 
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist3 == "1" ? 'checked' : ''}} name="checklist3"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist4 == "1" ? 'checked' : ''}} name="checklist4"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit3 }}" name="unit3" style="background: purple; color: white;"> 
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist5 == "1" ? 'checked' : ''}} name="checklist5"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist6 == "1" ? 'checked' : ''}} name="checklist6"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit4 }}" name="unit4" style="background: purple; color: white;">
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist7 == "1" ? 'checked' : ''}} name="checklist7"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist8 == "1" ? 'checked' : ''}} name="checklist8"></label>   
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit5 }}" name="unit5" style="background: purple; color: white;">
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist9 == "1" ? 'checked' : ''}} name="checklist9"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist10 == "1" ? 'checked' : ''}} name="checklist10"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit6 }}" name="unit5" style="background: purple; color: white;">
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist11 == "1" ? 'checked' : ''}} name="checklist11"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist12 == "1" ? 'checked' : ''}} name="checklist12"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit7 }}" name="unit5" style="background: purple; color: white;">
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist13 == "1" ? 'checked' : ''}} name="checklist13"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist14 == "1" ? 'checked' : ''}} name="checklist14"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit8 }}" name="unit8" style="background: purple; color: white;">
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist15 == "1" ? 'checked' : ''}} name="checklist15"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist16 == "1" ? 'checked' : ''}} name="checklist16"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="" style="color: purple;">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> street }}" name="unit8" style="background: purple; color: white;">
    <label for="" style="margin-left: 30px; margin-top: 10px;">Installment:  <input type="checkbox" {{ $listing->checklist17 == "1" ? 'checked' : ''}} name="checklist17"></label>
    <label for="" style="margin-left: 30px; margin-top: 10px;">Cash:  <input type="checkbox" {{ $listing->checklist18 == "1" ? 'checked' : ''}} name="checklist18"></label>  
</div>
                            <div class="col-md-6 mb-1" style="margin-top: -202%;">
                            <label style="color: purple;">Floor Area  :</label>
                            <input type="number" name="square_feet" class="form-control" value="{{ $listing -> square_feet }}"  placeholder="Square Feet" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Lot Area :</label>
                            <input type="number" name="lot_size" class="form-control"  value="{{ $listing -> square_feet }}" placeholder="Lot Size" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Porch Area :</label>
                            <input style="background: purple; color: white;" type="text" name="porch" class="form-control"  value="{{ $listing -> porch }}" placeholder="Porch Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Living Area :</label>
                            <input style="background: purple; color: white;" type="text" name="living" class="form-control"  value="{{ $listing -> living }}" placeholder="Living Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Kitchen Area :</label>
                            <input style="background: purple; color: white;" type="text" name="kitchen" class="form-control"  value="{{ $listing -> kitchen }}" placeholder="Kitchen Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Dining Area :</label>
                            <input style="background: purple; color: white;" type="text" name="dining" class="form-control"  value="{{ $listing -> dining }}" placeholder="Dining Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Den Area :</label>
                            <input style="background: purple; color: white;" type="text" name="den" class="form-control"  value="{{ $listing -> den }}" placeholder="Den Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Bedroom :</label>
                            <input type="number" name="bedroom" class="form-control" value="{{ $listing -> bedroom }}" placeholder="Bedroom" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Bedroom Area :</label>
                            <input style="background: purple; color: white;" type="text" name="bedarea" class="form-control"  value="{{ $listing -> bedarea }}" placeholder="Bedroom Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Toilet & Bathroom :</label>
                            <input type="number" name="bathroom" class="form-control" value="{{ $listing -> bathroom }}" placeholder="Bathroom" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Toilet & Bathroom Area :</label>
                            <input style="background: purple; color: white;" type="text" name="toilet" class="form-control"  value="{{ $listing -> toilet }}" placeholder="Toilet & Bath Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Garage :</label>
                            <input type="number" name="garage" class="form-control"  value="{{ $listing -> garage }}" placeholder="Garage" style="background: purple; color: white;">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Garage Area :</label>
                            <input style="background: purple; color: white;" type="text" name="garagearea" class="form-control"  value="{{ $listing -> garagearea }}" placeholder="Garage Area">
                        </div>

                                          
                       <!-- <div class="form-group">
                            <label>Country :</label>
                            <input type="text" name="country" class="form-control"  value="{{ $listing -> country }}" placeholder="Country">
                        </div> -->
                        <div class="col-md-6 mb-1">
                            <label style="color: purple;">Additional Details:</label>
                            <textarea name="description" class="form-control" rows="5" style="background: purple; color: white;"> {{ $listing -> description }}</textarea>
                        </div>

                      <!--  <div class="form-group">
                            <label>Thumbnail :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input">
                                <label for="image" class="custom-file-label">Choose Image</label>
                                
                                </div>
                            </div>

                        </div>
                       <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_one" class="custom-file-input">
                                <label for="image_one" class="custom-file-label">Choose Image</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_two" class="custom-file-input">
                                <label for="image_two" class="custom-file-label">Choose Image</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_three" class="custom-file-input">
                                <label for="image_three" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_four" class="custom-file-input">
                                <label for="image_four" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_five" class="custom-file-input">
                                <label for="image_five" class="custom-file-label">Choose Image</label>                           
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Other Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_six" class="custom-file-input">
                                <label for="image_six" class="custom-file-label">Choose Image</label>                           
                                
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-6 mb-1">
                            <label class="col-sm-12" style="color: purple;">Is Publish :</label>
                            <div class="col-sm-12" style="background: purple; color: white;">
                                <select  name="is_published" class="form-control form-control-line"  required>
                                <option selected style="display:none">Select Publish/Draft</option>
                                    <option value="1" 
                                    @if($listing -> is_published == '1')
                                     selected
                                    @endif >Publish</option>    
                                    
                                    <option value="0" 
                                    @if($listing -> is_published == '0')
                                     selected
                                    @endif
                                    >Draft</option>
    
                                </select>
                            </div>
                        </div>
                        <!--<button type="submit" class="btn btn-success">Update</button> -->
                    </form>                    
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->


<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection