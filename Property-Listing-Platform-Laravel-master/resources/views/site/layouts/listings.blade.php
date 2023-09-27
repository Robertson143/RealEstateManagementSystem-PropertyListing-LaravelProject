@extends('site.base')
@section('title')All Properties | @endsection
@section('content')

<section id="showcase-inner" class="showcase-search text-white py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
      <h2 style="margin-top: -30px;"> Search Available Property</h2> <br>
        <form method="GET" action="{{ route('search') }}">
          <!-- Form Row 1 -->
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label class="sr-only">Keywords</label>
              <input type="text" name="keywords" class="form-control" placeholder="Keyword (Pool, Garage, etc)">
            </div>

            <div class="col-md-4 mb-3">
              <label class="sr-only">Street</label>
              <input type="text" name="city" class="form-control" placeholder="Street">
            </div>

          <!-- Form Row 2 -->
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label class="sr-only">Bedrooms</label>
              <select name="bedrooms" class="form-control">
                <option selected="true" disabled="disabled">Bedrooms (Any)</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <select name="price" class="form-control">
                <option selected="true" disabled="disabled">Max Price (All)</option>
                <option value="100000">₱100,000</option>
                <option value="200000">₱200,000</option>
                <option value="300000">₱300,000</option>
                <option value="400000">₱400,000</option>
                <option value="500000">₱500,000</option>
                <option value="600000">₱600,000</option>
                <option value="700000">₱700,000</option>
                <option value="800000">₱800,000</option>
                <option value="900000">₱900,000</option>
                <option value="1000000">₱1M+</option>
              </select>
            </div>
          </div>
          <button class="btn btn-secondary btn-block mt-4" type="submit" style="width: 50%; margin-left: 28%;" >Search Property </button>
        </form>
      </div>
    </div>
  </div>
</section>
  <!-- Breadcrumb -->
  <section id="bc" class="mt-3" >
    <div class="container">
      <nav aria-label="breadcrumb">
      <h1 class="text-center mb-3 text-white" style=" background: #0f0f49; margin-top 20px;">AVAILABLE PROPERTIES</h1>
        
      </nav>
    </div>
  </section>
  <style>
    .card{
	color: #FFFFFF;
	transition: color 0.3s ease;
}
.card:hover{
	background-color: rgba(0, 0, 0, 0.2);
	border-radius: 10px;
  
}
  .btn:hover{
    transform: scale(1.1);
	transition: all ease 0.5s;

  }
</style>
  <!-- Listings -->
 <!-- <div style="margin-left: 30px; margin-top: -65px;" data-poster-url="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg" data-video-urls="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4,https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-5 w-background-video w-background-video-atom"><video id="9830173a-3eec-fc45-3f0b-9ff15e6fc086-video" autoplay="" loop="" style="background-image:url(&quot;https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4" data-wf-ignore="true"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-wf-ignore="true"></video></div>
  <div style="margin-left: 30px; margin-top: -65px;" data-poster-url="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg" data-video-urls="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4,https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-5 w-background-video w-background-video-atom"><video id="9830173a-3eec-fc45-3f0b-9ff15e6fc086-video" autoplay="" loop="" style="background-image:url(&quot;https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4" data-wf-ignore="true"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-wf-ignore="true"></video></div> -->
  <section id="listings" class="py-4" style="background: rgba(0, 0, 0, 0.1);">
    <div class="container">
      <div class="row">
        <!-- Listing 1 -->
@if(count($listings) > 0)
        @foreach($listings as $listing)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card listing-preview">
            <img class="card-img-top" src="{{ url($listing ->thumbnail_0)}}" alt="">
            <div class="card-img-overlay">
              <h2>
                <span class="badge badge-secondary text-white">₱{{ $listing ->price }}</span>
              </h2>
            </div>
            <div class="card-body">
              <div class="listing-heading text-center" style="color: #0f0f49;">
                <h4 class="text-primary">{{ $listing ->title }} </h4>
                <p>
                  <i class="fas fa-map-marker text-secondary"></i> {{ $listing ->city }}  {{ $listing ->state }}</p>
              </div>
              <hr>
              <div class="row py-2" style="color: #0f0f49;">
                <div class="col-6">
                  <i class="fas fa-th-large text-secondary" ></i> Lot Area: {{ $listing ->lot_size }} </div>
                <div class="col-6">
                  <i class="fas fa-car text-secondary"></i> Garage: {{ $listing ->garage }}</div>
              </div>
              <div class="row py-2" style="color: #0f0f49;">
                <div class="col-6">
                  <i class="fas fa-bed text-secondary"></i> Bedrooms: {{ $listing ->bedroom }}</div>
                <div class="col-6">
                  <i class="fas fa-bath text-secondary"></i> Bathrooms: {{ $listing ->bathroom }}</div>
              </div>
              <hr>
              <div class="row py-2" style="color: #0f0f49;">
                <div class="col-12">
                  <i class="fas fa-user text-secondary"></i> {{ $listing -> realtor-> name }}</div>
              </div>
              <div class="row pb-2" style="color: #0f0f49;">
                <div class="col-6">
                  <i class="fas fa-clock text-secondary"></i> {{ $listing -> created_at->diffForHumans() }} </div>
              </div>
              <hr>
              <a href="{{ route('single.listing', $listing -> id) }}" class="btn btn-primary btn-block" style="margin-left: 1px;">More Info</a>
            </div>
          </div>
        </div>

        @endforeach
      @else
          No Details found. Try to search again !!
      @endif

      </div>
      </div>
  </section>
  @endsection