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
                        <h4 class="page-title text-light">List of Model Unit</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb" >
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
            <div class="container-fluid" style="background: #036161;">
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
                <div class="row" style="background: #036161;">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card" style="background: #036161;">
                        <div class="card-body">
                            <center class="m-t-30"> <h6 style="color: white;"> House Model Image</h6>
                            <img src="{{ url($listing->thumbnail_0) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: white;">Floor Plan Image</h6>
                            @if($listing->thumbnail_1)
                            <img src="{{ url($listing->thumbnail_1) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: white;"> Show Room Image #1</h6>
                            @endif
                            @if($listing->thumbnail_2)
                            <img src="{{ url($listing->thumbnail_2) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: white;"> Show Room Image #2</h6>
                            @endif
                            @if($listing->thumbnail_3)
                            <img src="{{ url($listing->thumbnail_3) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: white;"> Show Room Image #3</h6>
                            @endif
                            @if($listing->thumbnail_4)
                            <img src="{{ url($listing->thumbnail_4) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: white;"> Show Room Image #4</h6>
                            @endif
                            @if($listing->thumbnail_5)
                            <img src="{{ url($listing->thumbnail_5) }}" class="mb-5" width="300" height="150" />
                            <h6 style="color: white;"> Show Room Image #5</h6>
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
                            <div class="card-body">
                            <form action="{{ route('listings.update', $listing -> id) }}" method="POST" class="form-horizontal m-t-30" enctype="multipart/form-data"> 
                        @csrf
                        @method('PATCH') 
                        
                        <div class="form-group">
                            <label>Unit Name :</label>
                            <input style="background: #036161; color: white;" type="text" name="title" class="form-control" value="{{ $listing -> title }}" placeholder="Name">
                        </div>
                        <div class="col-md-6 mb-1" style="margin-left: 51%;">
                            <label>Price :</label>
                            <input type="number" name="price" class="form-control" value="{{ $listing -> price }}"  placeholder="Price">
                        </div>
                        <div class="col-md-6 mb-1" style="margin-left: 51%;">
                            <label>Available Units:</label>
                            <input type="text" name="available" class="form-control" value="{{ $listing -> available }}"  placeholder="Available">
                        </div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
 <label for="">Phase:</label>
 <input style="background: #036161; color: white;" type="text" placeholder="Phase" class="form-control" value="{{ $listing -> phase }}" name="phase"> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
 <label for="">Street:</label>
 <input style="background: #036161; color: white;" type="text" placeholder="Street" class="form-control" value="{{ $listing -> city }}" name="city"> 
</div>
     <div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Block:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Block" value="{{ $listing -> block }}" class="form-control" name="block"> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" value="{{ $listing -> unit1 }}" class="form-control" name="unit1"> 
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button>
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist1 == "1" ? 'checked' : ''}} name="checklist1"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist2 == "1" ? 'checked' : ''}} name="checklist2"></label>  
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control"  value="{{ $listing -> unit2 }}" name="unit2"> 
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button> 
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist3 == "1" ? 'checked' : ''}} name="checklist3"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist4 == "1" ? 'checked' : ''}} name="checklist4"></label> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit3 }}" name="unit3"> 
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button> 
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist5 == "1" ? 'checked' : ''}} name="checklist5"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist6 == "1" ? 'checked' : ''}} name="checklist6"></label> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit4 }}" name="unit4"> 
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button> 
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist7 == "1" ? 'checked' : ''}} name="checklist7"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist8 == "1" ? 'checked' : ''}} name="checklist8"></label> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit5 }}" name="unit5">
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button> 
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist9 == "1" ? 'checked' : ''}} name="checklist9"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist10 == "1" ? 'checked' : ''}} name="checklist10"></label> 
</div>

<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit6 }}" name="unit6">
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button>  
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist11 == "1" ? 'checked' : ''}} name="checklist11"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist12 == "1" ? 'checked' : ''}} name="checklist12"></label> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit7 }}" name="unit7">
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button>  
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist13 == "1" ? 'checked' : ''}} name="checklist13"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist14 == "1" ? 'checked' : ''}} name="checklist14"></label> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> unit8 }}" name="unit8">
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button>  
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist15 == "1" ? 'checked' : ''}} name="checklist15"></label>
    <label for="" style="margin-left: 30px;">Cash:   <input type="checkbox" {{ $listing->checklist16 == "1" ? 'checked' : ''}} name="checklist16"></label> 
</div>
<div class="col-md-6 mb-1" style="margin-left: 51%;">
    <label for="">Unit Number:</label>
    <input style="background: #036161; color: white;" type="text" placeholder="Unit Number" class="form-control" value="{{ $listing -> street }}" name="street">
    <button type="button" id="myBtn" class="btn btn-success" style="margin-left: 70%; margin-top: -60px;">Add Owner</button>  
    <label for="" style="margin-left: 30px;">Installment:  <input type="checkbox" {{ $listing->checklist17 == "1" ? 'checked' : ''}} name="checklist17"></label>
    <label for="" style="margin-left: 30px;">Cash:  <input type="checkbox" {{ $listing->checklist18 == "1" ? 'checked' : ''}} name="checklist18"></label> 
</div>

                            <div class="col-md-6 mb-1" style="margin-top: -213%;">
                            <label>Floor Area :</label>
                            <input style="background: #036161; color: white;" type="number" name="square_feet" class="form-control" value="{{ $listing -> square_feet }}"  placeholder="Square Feet">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Lot Area :</label>
                            <input style="background: #036161; color: white;" type="number" name="lot_size" class="form-control"  value="{{ $listing -> square_feet }}" placeholder="Lot Size">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Porch Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="porch" class="form-control"  value="{{ $listing -> porch }}" placeholder="Porch Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Living Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="living" class="form-control"  value="{{ $listing -> living }}" placeholder="Living Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Kitchen Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="kitchen" class="form-control"  value="{{ $listing -> kitchen }}" placeholder="Kitchen Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Dining Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="dining" class="form-control"  value="{{ $listing -> dining }}" placeholder="Dining Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Den Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="den" class="form-control"  value="{{ $listing -> den }}" placeholder="Den Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Bedroom :</label>
                            <input style="background: #036161; color: white;" ="number" name="bedroom" class="form-control" value="{{ $listing -> bedroom }}" placeholder="Bedroom">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Bedroom Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="bedarea" class="form-control"  value="{{ $listing -> bedarea }}" placeholder="Bedroom Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Toilet & Bathroom :</label>
                            <input style="background: #036161; color: white;" type="number" name="bathroom" class="form-control" value="{{ $listing -> bathroom }}" placeholder="Bathroom">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Toilet & Bathroom Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="toilet" class="form-control"  value="{{ $listing -> toilet }}" placeholder="Toilet & Bath Area">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Garage :</label>
                            <input style="background: #036161; color: white;" type="number" name="garage" class="form-control"  value="{{ $listing -> garage }}" placeholder="Garage">
                        </div>
                        <div class="col-md-6 mb-1">
                            <label>Garage Area :</label>
                            <input style="background: #036161; color: white;" type="text" name="garagearea" class="form-control"  value="{{ $listing -> garagearea }}" placeholder="Garage Area">
                        </div>
                       
                        
                        
                      


                                            
                       <!-- <div class="form-group">
                            <label>Country :</label>
                            <input type="text" name="country" class="form-control"  value="{{ $listing -> country }}" placeholder="Country">
                        </div> -->
                        <div class="col-md-6 mb-1">
                            <label>Additional Details :</label>
                            <textarea style="background: #036161; color: white;" name="description" class="form-control" rows="5">{{ $listing -> description }}</textarea>
                        </div>

                        <div class="form-group" style="margin-top: 350px;">
                            <label>House Model Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input style="background: #036161; color: white;" type="file" name="image" class="custom-file-input">
                                <label for="image" class="custom-file-label">Choose Image</label>
                                
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Floor Plan Image :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_one" class="custom-file-input">
                                <label for="image_one" class="custom-file-label">Choose Image</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Show Room Image #1:</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_two" class="custom-file-input">
                                <label for="image_two" class="custom-file-label">Choose Image</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Show Room Image #2 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_three" class="custom-file-input">
                                <label for="image_three" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Show Room Image #3 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_four" class="custom-file-input">
                                <label for="image_four" class="custom-file-label">Choose Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Show Room Image #4 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_five" class="custom-file-input">
                                <label for="image_five" class="custom-file-label">Choose Image</label>                           
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Show Room Image #5 :</label>
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_six" class="custom-file-input">
                                <label for="image_six" class="custom-file-label">Choose Image</label>                           
                                
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Realtor :</label>
                            <div class="col-sm-12">
                                <select style="background: #036161; color: white;" name="realtor_id" class="form-control form-control-line" required>
                                <option  style="display:none">Select Realtor</option>
                                    <option value="{{ $listing -> realtor-> id }}" selected >{{ $listing -> realtor-> name }}</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-12">Is Publish :</label>
                            <div class="col-sm-12">
                                <select  name="is_published" class="form-control form-control-line"  required>
                                <option selected style="display:none">Select Publish/UnPublish</option>
                                    <option value="1" 
                                    @if($listing -> is_published == '1')
                                     selected
                                    @endif >Publish</option>
                                    
                                    <option value="0" 
                                    @if($listing -> is_published == '0')
                                     selected
                                    @endif
                                    >Unpublish</option>
    
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
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

<script>
   // Get the "Add Owner" buttons
   var addOwnerButtons = document.querySelectorAll("#myBtn");

// Add a click event listener to each "Add Owner" button
addOwnerButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    // Get the unit number and value of the corresponding input field
    var unitNumber = this.parentElement.querySelector("label").textContent;
    var inputField = this.previousElementSibling;
    var inputValue = inputField.value;

    // Get the value of the existing payment from the input field
    const oldAvailable = parseFloat(document.querySelector('input[name="available"]').value);

    // Prompt the user to enter a name for the owner
    var ownerName = prompt("Enter the owner's name:");

    // Update the input field with the entered name
    inputField.value = inputValue + " - " + ownerName;

    // Get the value of the existing balance from the input field
    //const totalAvailable = oldAvailable - 1;

    // Create a new <span> element to display the owner name
    var ownerSpan = document.createElement("span");
    ownerSpan.textContent = " (" + ownerName + ")";

    // Append the <span> element to the parent element
    this.parentElement.appendChild(ownerSpan);

    // Create a new <br> element to add some space between units
    var br = document.createElement("br");
    this.parentElement.appendChild(br);

    // Update the value of the "Balance" input field with the new balance
   // document.querySelector('input[name="available"]').value = totalAvailable;
  });
});
    </script>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
@endsection