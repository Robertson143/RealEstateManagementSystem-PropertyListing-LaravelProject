@extends('site.base')
@section('title')Search Result | @endsection
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

           <!-- <div class="col-md-4 mb-3">
              <label class="sr-only">State</label>
              <select name="state" class="form-control">
                <option selected="true" disabled="disabled">State (All)</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div> -->
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
          <button class="btn btn-secondary btn-block mt-4" type="submit" style="width: 50%; margin-left: 28%;">Search</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Breadcrumb -->
<section id="bc" class="mt-2">
  <div class="container">
    <nav aria-label="breadcrumb">
    <h1 class="text-center mb-3 text-white" style="background-color: #0f0f49; margin-top: 20px;">Searched Properties</h1>
      <ol class="breadcrumb">
        
        <li class="breadcrumb-item active"> Search Results</li>
      </ol>
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
<section id="listings" class="py-4">
  <div class="container">
    <div class="row">
      @if(count($listings) > 0)
      <!-- Listing 1 -->
      @foreach($listings as $listing)
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card listing-preview">
          <img class="card-img-top" src="{{ url($listing ->thumbnail_0)}}" alt="">
          <div class="card-img-overlay">
            <h2>
              <span class="badge badge-secondary text-white">${{ $listing ->price }}</span>
            </h2>
          </div>
          <div class="card-body">
            <div class="listing-heading text-center">
              <h4 class="text-primary">{{ $listing ->title }} </h4>
              <p style="color: #0f0f49;">
                <i class="fas fa-map-marker text-secondary"></i> {{ $listing ->city }}  {{ $listing ->state }}</p>
            </div>
            <hr>
            <div class="row py-2 text-secondary">
              <div class="col-6" style="color: #0f0f49;">
                <i class="fas fa-th-large text-secondary"></i> Sqft: {{ $listing ->sqft }} </div>
              <div class="col-6" style="color: #0f0f49;">
                <i class="fas fa-car text-secondary"></i> Garage: {{ $listing ->garage }}</div>
            </div>
            <div class="row py-2 text-secondary">
              <div class="col-6" style="color: #0f0f49;">
                <i class="fas fa-bed text-secondary"></i> Bedrooms: {{ $listing ->bedroom }}</div>
              <div class="col-6" style="color: #0f0f49;">
                <i class="fas fa-bath text-secondary"></i> Bathrooms: {{ $listing ->bathroom }}</div>
            </div>
            <hr>
            <div class="row py-2" style="color: #0f0f49;">
                          <div class="col-12">
                            <i class="fas fa-user text-success"></i> {{ $listing -> realtor-> name }}</div>
                        </div>
            <div class="row text-secondary pb-2">
              <div class="col-6" style="color: #0f0f49;">
                <i class="fas fa-clock text-secondary"></i> {{ $listing -> created_at->diffForHumans() }} </div>
            </div>
            <hr>
            <a href="{{ route('single.listing', $listing -> id) }}" class="btn btn-primary btn-block" style="margin-left: 1px;">More Info</a>
          </div>
        </div>
      </div>

      @endforeach
      @endif


    </div>
  </div>
</section>
@endsection
