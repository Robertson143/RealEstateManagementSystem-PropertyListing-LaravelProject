@extends('site.base')

@section('content')
    <!-- Showcase -->
   
    <section id="showcase">
        <div class="container text-center">
            <div class="home-search p-5">
                <div class="overlay p-5" style="background: rgba(0, 0, 0, 0.8);">
                    <div class="home" id="home">
                    <div class="home-content">
                    <h3>Make Wise Investment in Real Estate</h3>
			<h1></h1>
			<h3>Discover what awaits you at<br><span class="multiple-text"></span></h3>
			<p>Make it your home and experience what it's like <br>to get more and better.</p>
            <div class="social-media">
				<a href="https://web.facebook.com/?_rdc=1&_rdr"><i class='fab fa-facebook' ></i></a>
				<a href="https://twitter.com/"><i class='fab fa-twitter' ></i></a>
				<a href="https://www.instagram.com/"><i class='fab fa-instagram' ></i></a>
				<a href="https://www.linkedin.com/in/robertson-anghag-685b6623a/"><i class='fab fa-linkedin' ></i></a>
			</div>
			<a href="{{ route('login') }}" class="btn">Get Connected</a>
		</div>   
        <div class="home-img">
        <img src="{{ asset('assets/img/earth1.png') }}" class="logo" alt="">
		</div>    
                </div>
            </div>
        </div>
    </section>

    <!-- Listings -->
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
<div style="margin-left: 30px; margin-top: 20px;" data-poster-url="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg" data-video-urls="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4,https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-5 w-background-video w-background-video-atom"><video id="9830173a-3eec-fc45-3f0b-9ff15e6fc086-video" autoplay="" loop="" style="background-image:url(&quot;https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4" data-wf-ignore="true"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-wf-ignore="true"></video></div>
    <section id="listings" class="py-5" style="background: rgba(0, 0, 0, 0.1); margin-top: -755px;">
        <div class="container">
            <h1 class="text-center mb-3 text-white" style="background-color: #0f0f49; margin-top: -20px;">LATEST PROPERTY</h1>
            <div class="row">
                <!-- Listings -->
                <!-- for listing in listings -->
                @foreach ($latest_listings as $listing)
       
                <div class="col-md-6 col-lg-4 mb-4" style="margin-top: 20px;">
                    <div class="card listing-preview">
                    <img class="card-img-top" src="{{ url($listing ->thumbnail_0)}}" alt="">
                      <div class="card-img-overlay">
                        <h2>
                          <span class="badge badge-secondary text-white">₱{{ $listing -> price }}</span>
                        </h2>
                      </div>
                      <div class="card-body">
                        <div class="listing-heading text-center">
                          <h4 style="color: #0f0f49;">{{ $listing -> title }}</h4>
                          <p style="color: #0f0f49;">
                            <i class="fas fa-map-marker text-secondary"></i>
                            {{ $listing -> city }} {{ $listing -> country }}
                        
                        </p>
                        </div>
                        <hr>
                        <div class="row py-2 text-secondary">
                          <div class="col-6" style="color: #0f0f49;">
                            <i class="fas fa-th-large text-success"></i> Sqft: 2500</div>
                          <div class="col-6" style="color: #0f0f49;">
                            <i class="fas fa-car text-success"></i> Garage: {{ $listing -> garage }}</div>
                        </div>
                        <div class="row py-2" style="color: #0f0f49;">
                          <div class="col-6">
                            <i class="fas fa-bed text-success"></i> Bedrooms: {{ $listing -> bedroom }}</div>
                          <div class="col-6">
                            <i class="fas fa-bath text-success"></i> Bathrooms: {{ $listing -> bathroom }}</div>
                        </div>
                        <hr>
                        <div class="row py-2" style="color: #0f0f49;">
                          <div class="col-12">
                            <i class="fas fa-user text-success"></i> {{ $listing -> realtor-> name }}</div>
                        </div>
                        <div class="row text-secondary pb-2">
                          <div class="col-6" style="color: #0f0f49;">
                            <i class="fas fa-clock text-success"></i> {{ $listing -> created_at->diffForHumans() }} 
                        </div>
                        </div>
                        <hr>
                        <a href="{{ route('single.listing', $listing->id) }}" class="btn btn-primary btn-block" style="margin-left: 1px;">More Info</a>
                      </div>
                    </div>
                  </div>
                
                @endforeach
 

            </div>
        </div>
    </section>
<!-- Loader -->
   <!-- <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
 <path fill="#fff" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3 c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
      <animateTransform 
         attributeName="transform" 
         attributeType="XML" 
         type="rotate"
         dur="2s" 
         from="0 50 50"
         to="360 50 50" 
         repeatCount="indefinite" />
  </path>
 <path fill="#fff" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7 c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
      <animateTransform 
         attributeName="transform" 
         attributeType="XML" 
         type="rotate"
         dur="1s" 
         from="0 50 50"
         to="-360 50 50" 
         repeatCount="indefinite" />
  </path>
 <path fill="#fff" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5 L82,35.7z">
      <animateTransform 
         attributeName="transform" 
         attributeType="XML" 
         type="rotate"
         dur="2s" 
         from="0 50 50"
         to="360 50 50" 
         repeatCount="indefinite" />
  </path>
</svg>
-->
    <section id="services" class="py-5 bg-secondary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-comment fa-4x mr-4"></i>
                    <hr>
                    <h3>Consulting Services</h3>
                    <p>Our real estate consulting services offer comprehensive and strategic guidance for selling, or investing in property.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-home fa-4x mr-4"></i>
                    <hr>
                    <h3>Property Management</h3>
                    <p>Our property management services in real estate provide clients with professional and reliable management solutions for their properties.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-suitcase fa-4x mr-4"></i>
                    <hr>
                    <h3>Selling Management</h3>
                    <p>Our selling services in real estate are designed to provide clients with a seamless and successful selling experience.</p>
                </div>
            </div>
        </div>
    </section>
   
@endsection