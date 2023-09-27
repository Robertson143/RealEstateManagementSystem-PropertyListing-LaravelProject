@extends('admin.base')

@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb" style="background: #036161;">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title  text-light"  >Add Model Unit List</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <!--  <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Property Listing</li> -->
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
    <div class="container-fluid" style="background: #036161;">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row justify-content-md-center" style="background: #036161;">
            <div class="col-12">
                <div class="card card-body" style="background: #036161;">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                    <form action="{{ route('listings.store') }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                        
                        <div class="form-group text-light">
                            <label>Unit Name :</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Name">
                        </div>
                        <div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
                            <label>Price :</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}"  placeholder="Price">
                        </div>
                        <div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
                            <label>Available Unit:</label>
                            <input type="text" name="available" class="form-control" value="{{ old('available') }}"  placeholder="available">
                        </div>
                        <div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
    <label for="">Phase:</label>
    <input type="text" placeholder="Phase Number" placeholder="₱"class="form-control" name="phase"> 
</div>
<div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
    <label for="">Street:</label>
    <input type="text" placeholder="Street" class="form-control" name="city"> 
</div>
<div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
    <label for="">Block:</label>
    <input type="text" placeholder="Block" class="form-control" name="block"> 
</div>
<div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
    <label for="">Unit Number: </label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit1"> 
</div>
<div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
    <label for="">Unit Number: </label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit2"> 
</div>
<div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit3"> 
</div>
<div class="col-md-6 mb-1 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit4"> 
</div>
<div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit5"> 
</div>
<div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit6"> 
</div>
<div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit7"> 
</div>
<div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="unit8"> 
</div>
<div class="col-md-6 mb-3 text-light" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input type="text" placeholder="Unit Number" class="form-control" name="street"> 
</div>
                          <div class="col-md-6 mb-1 text-light" style="margin-top: -102%;">
                            <label>Floor Area :</label>
                            <input type="number" name="square_feet" class="form-control" value="{{ old('square_feet') }}"  placeholder="Floor Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Lot Area :</label>
                            <input type="number" name="lot_size" class="form-control"  value="{{ old('lot_size') }}" placeholder="Lot Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Porch Area :</label>
                            <input type="text" name="porch" class="form-control"   placeholder="Porch Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Living Area :</label>
                            <input type="text" name="living" class="form-control"   placeholder="Living Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Kitchen Area :</label>
                            <input type="text" name="kitchen" class="form-control"   placeholder="Kitchen Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Dining Area :</label>
                            <input type="text" name="dining" class="form-control"   placeholder="Den Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Den Area :</label>
                            <input type="text" name="den" class="form-control"   placeholder="Den Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Bedroom :</label>
                            <input type="number" name="bedroom" class="form-control" value="{{ old('bedroom') }}" placeholder="Bedroom">
                        </div> 
                        <div class="col-md-6 mb-1 text-light">
                            <label>Bedroom Area :</label>
                            <input type="text" name="bedarea" class="form-control"   placeholder="BedroomArea">
                        </div>                     
                        <div class="col-md-6 mb-1 text-light">
                            <label>Toilet & Bathroom :</label>
                            <input type="number" name="bathroom" class="form-control" value="{{ old('bathroom') }}" placeholder="Toilet & Bathroom">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Toilet & Bathroom Area :</label>
                            <input type="text" name="toilet" class="form-control"   placeholder="Toilet & Bath Area">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Garage :</label>
                            <input type="number" name="garage" class="form-control"  value="{{ old('garage') }}" placeholder="Garage">
                        </div>
                        <div class="col-md-6 mb-1 text-light">
                            <label>Garage Area:</label>
                            <input type="text" name="garagearea" class="form-control"  placeholder="GarageArea">
                        </div>
                       
                        
                       
                       
                          
                      <!--  <div class="form-group  text-light">
                            <label>Street :</label>
                            <input type="text" name="city" class="form-control"  value="{{ old('city') }}" placeholder="Street">
                        </div>                        
                       <div class="form-group">
                            <label>Country :</label>
                            <input type="text" name="country" class="form-control"  value="{{ old('country') }}" placeholder="Country">
                        </div> -->
                        <div class="col-md-6 mb-1 text-light">
                            <label>Additional Details :</label>
                            <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group text-light" style="margin-top: 20px;">
                            <label>House Model Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input">
                                <label for="image" class="custom-file-label">Choose Image</label>
                                
                                </div>
                            </div>

                        </div>
                        <div class="form-group text-light">
                            <label>Floor Plan Image:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_one" class="custom-file-input">
                                <label for="image_one" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-light">
                            <label>Show Room Image #1:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_two" class="custom-file-input">
                                <label for="image_two" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-light">
                            <label>Show Room Image #2 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_three" class="custom-file-input">
                                <label for="image_three" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-light">
                            <label>Show Room Image #3:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_four" class="custom-file-input">
                                <label for="image_four" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-light">
                            <label>Show Room Image #4 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_five" class="custom-file-input">
                                <label for="image_five" class="custom-file-label">Choose Image</label>                           
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-light">
                            <label>Show Room Image #5 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_six" class="custom-file-input">
                                <label for="image_six" class="custom-file-label">Choose Image</label>                           
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12 text-white">Realtor :</label>
                            <div class="col-sm-12">
                                <select  name="realtor_id" class="form-control form-control-line" required>
                                <option selected style="display:none">Select Realtor</option>
                                @foreach($realtors as $realtor)
                                    <option value="{{ $realtor->id }}" >{{ $realtor->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                     

                        <div class="form-group  text-light">
                            <label class="col-sm-12">Is Publish :</label>
                            <div class="col-sm-12">
                                <select  name="is_published" class="form-control form-control-line"  required>
                                <option selected style="display:none">Select Publish/Draft</option>
                                    <option @if (old('is_published') == "1") {{ 'selected' }} @endif value="1">Publish</option>
                                    <option @if (old('is_published') == "0") {{ 'selected' }} @endif  value="0">Draft</option>
                                </select>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
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

<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection