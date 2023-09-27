
@extends('site.base')

@section('title') Realtor | @endsection
@section('content')

<style>
  .slider-container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: 60px;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  padding: 1px 10px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.team-card {
        margin: 15px 0;
    }

    /* Optional: If you want the cards to be full-width on smaller screens */
    @media (max-width: 767px) {
        .col-md-3 {
            flex-basis: 100%;
        }
    }
</style>

<section id="team" class="py-5" style="background: rgba(0, 0, 0, 0.1); margin-bottom: 15px;">
    <div class="container">
        <h2 class="text-center text-white" style="background-color: #0f0f49; margin-top: -35px;">FEATURED REALTORS</h2>
        <div class="row justify-content-center text-center" style="margin-top: -25px;">
  </div>
  </div>
  </section>
<section id="showcase-inner" class="py-5 text-white" style="margin-top: -40px;">
        <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
            <a class="navbar-brand" href="{{ route('listings') }}">
        <img src="{{ asset('assets/img/ama.png') }}" class="logo" alt="">
      </a>
            <h1 class="display-4">AMA Real Estate Developer</h1>
            <p class="lead">From a yearning to live life’s sweeter comforts or a longing to widen one’s horizons, the dream of a better lifestyle unfolds in AMA Real Estate.

With more expansive spaces that evoke warmth and welcoming neighborhoods that ensure nothing but peace of mind, AMA Real Estate is the perfect private escape where individuals and families can grow.

Embark on a bigger milestone with a place that matches your desire for community, more meaningful life experiences, connections, and undeniable comfort.

Fulfill a brighter future at AMA Real Estate.</p>
            </div>
        </div>
        </div>
    </section>

  <!-- Team -->
  <section id="team" class="py-5" style="background: rgba(0, 0, 0, 0.1);">
    <div class="container" style="margin-top: -55px; margin-bottom: -35px;">
       <!-- <h2 class="text-center text-white" style="background-color: #0f0f49; margin-top: -35px;">FEATURED REALTORS</h2> -->
        <div class="row justify-content-center text-center" >
            @foreach ($realtors as $realtor)
            <div class="col-md-3 mt-4 ml-4" style="background: rgba(0, 0, 0, 0.2);">
                <img src="{{ url($realtor->image) }}" alt="" class="rounded-circle mb-3">
                <h4 class="text-success" style="background: #0f0f49;">{{ $realtor->name }}</h4>
                <p style="color: #0f0f49;"><i class="fas fa-award mb-1 text-success"></i> Realtor</p>
                <hr>
                <p class="bg-success" style="color: #0f0f49;"><i class="fas fa-phone" style="color: #0f0f49;"></i> {{ $realtor->contact_number }}</p>
                <p class="bg-success" style="color: #0f0f49;"><i class="fas fa-envelope-open" style="color: #0f0f49;"></i> {{ $realtor->email }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


    
    <!-- Breadcrumb -->
    <section id="bc" class="mt-3">
        <div class="container">
       
        </nav>
        </div>
    </section>

    <section id="about" class="py-4">
        <div class="container">
        <div class="row">
            <div class="col-md-8">
            <h2 class="text-center">We Develop a Perfect Home</h2>
            <p class="lead text-center">AMA Real Estate shall be the preferred developer for the first time Filipino <br>homebuyer who seeks to live in a nurturing community.</p>
            <h2 class="text-success" style="margin-left: 36%;">Subdivision Map</h2>
            <img src="assets/img/map.jpg" alt="" style="width: 100%;">
            <p class="mt-4 text-center">AMA Real Estate Developer has always been true to its core ideals and is in constant collaboration with its affiliates to provide and share best practices as we are deeply committed to improving the lives of the communities we serve.</p>
            <h2 class="text-center">Memories for a Lifetime.</h2>
            <p class="lead text-center">Achieve your DREAM HOME here at AMA Real Estate, and we give you the perfect setting to create memories for a lifetime.</p>
            <h2 class="text-success" style="margin-left: 40%;">Amenities</h2>
            <div class="slider-container">
  <div class="mySlides">
    <div class="numbertext">1 / 4</div>
    <div class="numbertext text-success" style="margin-left: 50px; background-color: #0f0f49;"> <h6>Swimming Pool Area </h6></div>
    <img src="assets/img/amen4.jpg" alt="">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 4</div>
    <div class="numbertext text-success" style="margin-left: 50px; background-color: #0f0f49;"> <h6>Basketball Court Area</h6></div>
    <img src="assets/img/amen2.jpg" alt="">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 4</div>
    <div class="numbertext text-success" style="margin-left: 50px; background-color: #0f0f49;"> <h6>KTV Lounge Area</h6></div>
    <img src="assets/img/amen3.jpg" alt="">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 4</div>
    <div class="numbertext text-success" style="margin-left: 50px; background-color: #0f0f49;"> <h6>Event Room Area</h6></div>
    <img src="assets/img/amen1.jpg" alt="">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row" style="margin-left: 150px;">
    <div class="column">
    <img class="demo cursor" src="assets/img/amen4.jpg" style="height: 60px;" alt="" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
    <img class="demo cursor" src="assets/img/amen2.jpg" style="height: 60px;" alt="" onclick="currentSlide(2)" alt="The Woods">
    </div>
    <div class="column">
    <img class="demo cursor" src="assets/img/amen3.jpg" alt="" style="height: 60px;" alt="" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="assets/img/amen1.jpg" style="height: 60px;" alt=""  onclick="currentSlide(4)" alt="Northern Lights">
    </div>
  </div>
</div>

            <p class="mt-4 text-center">Live in comfort and style as you make room for more unforgettable memories with those who matter most.  At AMA Real Estate Developer, we have designed a beautiful master planned community with generous open spaces and resort-like amenities to match the kind of lifestyle you want to live out with your family.</p>
            </div>
            <div class="col-md-4" style="margin-top: 10px;">
            <h2 class="text-success"  style="margin-bottom: 10px; margin-left: 75px;">  <i class="fas fa-award mb-1 text-success"></i> Top Realtor </h2>
            @if($som)
            <div class="card">
                <img class="card-img-top" src="{{ url($som -> realtor-> image) }}" alt="Seller of the month"> <br>
                <div class="card-body">
              <!--  <h5 class="card-title">Seller Of The Month</h5> -->
              <h5 class="card-title text-center" style="color: #0f0f49;">{{ $som ->realtor-> name }}</h5>
                <h6 class="text-secondary" style="margin-left: 95px;">Property Realtor</h6>
                <p class="card-text">
                </p>
                </div>
            </div>
            @endif
            <h3 class="text-success" style="margin-top: 70px; margin-left: 100px;"> Site Location </h3>
            <div class="map-section wf-section">  
              <div class="map-copy">
                <div class="top-gradient-copy">
                </div><div class="bot-gradient-copy">
                </div>
                <div bind="a3352adc-e36e-7d5e-2142-64fed2312025" class="html-embed-6 w-embed w-iframe">
                  <iframe src="https://snazzymaps.com/embed/330838" width="100%"  style="border:none; height: 600px;"></iframe>
                  </div></div></div>
</div>
        </div>
        </div>
    </section>

    <section id="work" class="we-work bg-secondary text-white text-center">
        <h2 class="display-4">We Work For You</h2>
        <h4 style="margin-top: 10px;">The company itself is a very successful company. However, we wants to open, so something like that!</h4>
        <hr>
    <a href="{{ route('listings') }}" class="btn text-white btn-lg" style="background: #0f0f49; margin-top: 5px;">&nbsp View Properties &nbsp</a>
    </section>
    <section id="top-bar" class="p-2" style="background-color: white;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-phone"></i> 
         <!-- site_config.phone  -->
         +639556516989
        </div>
        <div class="col-md-4">
          <i class="fas fa-envelope-open"></i> 
          <!-- site_config.email  -->
          amarealestatedeveloper@gmail.com
        </div>
        <div class="col-md-4">
          <div class="social text-right">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    <!-- Work -->
    

@endsection