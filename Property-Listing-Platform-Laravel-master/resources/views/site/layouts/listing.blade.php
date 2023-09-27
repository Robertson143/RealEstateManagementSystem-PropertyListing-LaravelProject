@extends('site.base')
@section('title'){{ $listing ->title }} | @endsection

@section('content')

  <!-- Breadcrumb -->
  <section id="bc" class="mt-3">
    <div class="container" >
     
        <h1 class="text-center mb-3 text-white bg-success" style=" margin-top: -20px; margin-top: 20px;">{{ $listing ->title }}</li></h1>
        
     
    </div>
  </section>

  <!-- Listing -->
  <section id="listing" class="py-4">
    <div class="container">
      <!--<a href="{{ route('listings') }}" class="mb-4" style="background-color: #0f0f49; color: white; height: 30px;">Back To Property</a> -->
      <div class="row bg-success">
        <div class="col-md-9 bg-primary">
          <!-- Home Main Image -->
          <img src="{{ url($listing -> thumbnail_0) }}" alt="" class="img-main img-fluid mb-3" style="margin-top: 20px;">
          <!-- Thumbnails -->
          <div class="row mb-5 thumbs">
         

          </div>
          <!-- Fields -->
          <h4 class="bg-success text-center" style="margin-top: -40px; margin-bottom: 20px; color: white;"> House Model Details </h4>
          <div class="row mb-5 fields">
            <div class="col-md-6">

              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-money-bill-alt text-success"></i> Asking Price:
                  <span class="float-right" style="color: #0f0f49;">₱{{ $listing ->price }}</span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-bed text-success"></i> Bedroom:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->bedroom }}</span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-bed text-success"></i> Bedroom Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->bedarea }} SQM</span>
                </li>
                <li class="list-group-item " style="color: #0f0f49;">
                  <i class="fas fa-bath text-success"></i> Toilet & Bathroom:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->bathroom }}</span>
                </li>
                <li class="list-group-item " style="color: #0f0f49;">
                  <i class="fas fa-bath text-success"></i> Toilet & Bathroom Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->toilet }} SQM</span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-car text-success"></i> Garage:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->garage }}
                  </span>
                </li> 
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-car text-success"></i> Garage Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->garagearea }} SQM
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-car text-success"></i> Street:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->street }} 
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-car text-success"></i> Phase:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->phase }} 
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-car text-success"></i> Block:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->block }} 
                  </span>
                </li>
                
                
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-th-large text-success"></i> Floor Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->square_feet }} SQM</span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-square text-success"></i> Lot Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->lot_size }} SQM
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-square text-success"></i> Porch Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->porch }} SQM
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-square text-success"></i> Living Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->living }} SQM
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-square text-success"></i> Kitchen Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->kitchen }} SQM
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-square text-success"></i> Dining Area:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing ->dining }} SQM
                  </span>
                </li>
              
                <li class="list-group-item"  style="color: #0f0f49;">
                  <i class="fas fa-user text-success"></i> Realtor:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing -> realtor-> name }}
                  </span>
                </li>
                <li class="list-group-item" style="color: #0f0f49;">
                  <i class="fas fa-calendar text-success"></i> Listing Date:
                  <span class="float-right" style="color: #0f0f49;">{{ $listing -> created_at->diffForHumans() }}</span>
                </li>
                <li class="list-group-item"  style="color: #0f0f49;">
                  <i class="fas fa-bed text-success"></i> Available Units:
                  <span class="float-right"  style="color: #0f0f49;">{{ $listing -> available }}
                  </span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Description -->
          <h4 class="bg-success text-center" style="margin-top: -40px; margin-bottom: 20px; color: white;"> Additional Details </h4>
          <div class="row mb-5">
            <div class="col-md-12 text-white">
             <h4> {{ $listing ->description }} </h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-3">
          
            <div class="card-body bg-primary">
            <img class="card-img-top" src="{{ url($listing -> realtor-> image) }}" alt="Seller of the month"><br><br>
            <h5 class="text-center text-white">{{ $listing -> realtor-> name }}</h5>
<h6 class="text-center text-success">Property Realtor</h6>
            </div>
          </div>
          @if (Auth::check())
    <button class="btn-primary btn-block btn-lg" data-toggle="modal" data-target="#inquiryModal">Reserve</button>
@else
    <a class="btn-primary btn-block btn-lg text-center" href="{{ route('login') }}">Reserve</a>
@endif
<h5 class="text-center text-success" style="margin-top: 20px; margin-left: 1px; margin-bottom: 20px; background: #0f0f49;">Floor Plan </h5>
@if ($listing ->thumbnail_1)
            <div class="col-md-12" style="margin-top: 10px;">
            <a href="{{ url($listing ->thumbnail_1) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_1) }}" alt="" class="img-fluid">
              </a>
            </div>
            @endif
            <h5 class="text-center text-success" style="margin-top: 20px; margin-left: 1px; margin-bottom: 20px; background: #0f0f49;">Show Room </h5>
            @if ($listing ->thumbnail_2)
            <div class="col-md-12" style="margin-top: 10px;">
              <a href="{{ url($listing ->thumbnail_2) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_2) }}" alt="" class="img-fluid">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_3)
            <div class="col-md-12" style="margin-top: 10px;">
              <a href="{{ url($listing ->thumbnail_3) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_3) }}" alt="" class="img-fluid">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_4)
            <div class="col-md-12" style="margin-top: 10px;">
              <a href="{{ url($listing ->thumbnail_4) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_4) }}" alt="" class="img-fluid">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_5)
            <div class="col-md-12" style="margin-top: 10px;">
              <a href="{{ url($listing ->thumbnail_5) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_5) }}" alt="" class="img-fluid">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_6)
            <div class="col-md-12" style="margin-top: 10px;">
              <a href="{{ url($listing ->thumbnail_6) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_6) }}" alt="" class="img-fluid">
              </a>
            </div>
            @endif
<a href="{{ route('listings') }}" class="btn text-white btn-lg" style="background: #0f0f49; margin-top: 20%; margin-left: 90px; margin-bottom: 20px;"> &nbsp ⇐ Back &nbsp</a>
     <!--     <button class="btn-primary btn-block btn-lg" data-toggle="modal" data-target="#inquiryModals">Form</button> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Inquiry Modal -->
  <!-- Inquiry Modal -->
  <div class="modal fade" id="inquiryModal" role="dialog">
    <div class="modal-dialog" style="height: 60%;">
      <div class="modal-content bg-primary" style="width: 250%; margin-left: -380px;">
        <div class="modal-header">
          <h2 class="modal-title bg-success text-light" id="inquiryModalLabel" style="margin-left: 35%;">&nbsp&nbsp&nbsp&nbsp&nbsp Make Reservation &nbsp&nbsp&nbsp&nbsp&nbsp</h2>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div><br>
        <h2 class="bg-primary w-50 text-light" style="margin-left: 10px;"> List of <span>Requirements:</span></h2>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> 2 Valid ID<span> (Primary & Secondary).</span> </h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> Job Contract <span>(Indicated Salary).</span></h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> Birth Certificate <span>(PSA).</span> </h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> TIN Number <span>(Updated).</span></h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> Proof of Billing <span>(Old & Latest).</span></h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> Brgy Clearance <span>(Validity Period).</span></h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> Proof of Income <span>(Latest).</span></h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> 2x2 Picture.</h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> DownPayment.</h5>
        <h5 class="bg-primary w-50 text-white" style="margin-left: 25px;"><span>➤</span> Reservation Fee.</h5>
        <div class="modal-body bg-white" style="width: 40%; margin-left: 29%; margin-top: -380px; margin-bottom: 50px;">
        <form action="{{ route('send-message') }}" method="POST">
            @csrf
              <input type="hidden" name="listing_id" value="{{ $listing ->id }}">
              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              <div class="form-group">
                <label for="property_name" class="col-form-label text-primary">Unit Name:</label>
                <input type="text" name="listing" class="form-control" value="{{ $listing ->title }}" disabled="">
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label text-primary">Full Name:</label>
            <input type="text" name="name" class="form-control"   @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label text-primary">Email Address:</label>
                <input type="email" name="email" class="form-control"  @auth value="{{ Auth::user()->email }}" @endif required>
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label text-primary">Phone Number:</label>
                <input type="text" name="contact_number" class="form-control">
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label text-primary">Set Schedule:</label>
                <input type="date" name="schedule" class="form-control">
              </div>
             <!-- <div class="form-group">
                <label for="message" class="col-form-label text-primary">Message:</label>               
                <textarea name="message" class="form-control" required></textarea>
              </div> -->
              <hr>
              <input type="submit" value="Reserve" class="btn-block btn-secondary" style="margin-left: 61%; width: 30%; padding: 5px;">
          
            </form>
        </div>
        <h3 class="bg-primary text-light" style="margin-left: 69%; margin-top: -47%;"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Bank loan required  <span style="margin-left: 110px;">Amortization </span></h3>
        <img src="{{ asset('assets/img/vita.jpg') }}" class="picxcs" alt="" style="width: 28%; margin-top: 10px; margin-left: 70%; margin-bottom: 60px;">
    </div>
      </div>
  </div>

 <!-- <div class="modal fade" id="inquiryModals" role="dialog">
    <div class="modal-dialog" >
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inquiryModalLabel" style="margin-left: 40%;">Client Information Form</h4>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('sendform') }}" method="POST">
          @method('POST')
            @csrf
              <input type="hidden" name="listing_id" value="{{ $listing ->id }}">
              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              <div class="form-group">
                <label for="property_name" class="col-form-label">Property:</label>
                <input type="text" name="listing" class="form-control" value="{{ $listing ->title }}" disabled="">
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Full Name:</label>
            <input type="text" name="name"  class="form-control"  @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Address:</label>
            <input type="text" name="name" class="form-control"   @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label">Zip Code:</label>
                <input type="text" name="contact_number" class="form-control">
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Source of Income:</label>
            <input type="text" name="name" class="form-control"   @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Monthly Income:</label>
            <input type="text" name="name" class="form-control"   @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Client Upon Fee:</label>
            <input type="text" name="name" class="form-control"   @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" name="email" class="form-control"  @auth value="{{ Auth::user()->email }}" @endif required>
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="text" name="contact_number" class="form-control">
              </div>
              <div class="form-group">
                <label for="message" class="col-form-label">Message:</label>
                <textarea name="message" class="form-control" required></textarea>
              </div>
              <hr>
              <input type="submit" value="Submit Form" class="btn-block btn-secondary" style="margin-left: 38%; width: 30%; padding: 5px;">
            </form>
           </div>
            <h4 style="margin-left: 10px;"> Required Bank Loan Amortization:</h4>
        <img src="{{ asset('assets/img/magnumamortization.jpg') }}" class="picxcs" alt="" style="width: 28%; margin-top: 10px;">
        </div>
      </div>
    </div>
  </div>
-->
 
@endsection