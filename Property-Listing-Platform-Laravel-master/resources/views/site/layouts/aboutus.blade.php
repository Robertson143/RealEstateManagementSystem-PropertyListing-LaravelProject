@extends('site.base')

@section('title') Realtor | @endsection
@section('content')

<style>
    *::before,
*::after {
  box-sizing: border-box;
  outline: none;
}

ul, h1, h2, h3, h4, p, figure {
    padding: 0;
    margin: 0;
}
h2 { font-size: 1.5rem; }

a { 
    transition: all 0.3s ease; 
    text-decoration: none;
}

a:hover { text-decoration: none; }
button:focus { outline: none; }
p { 
  color: #666;
  line-height: 1.7; 
  margin-bottom: 35px;
}

h1, h2, h3, h4, h5, h6 { color: #333; }

.container-fluid {
    max-width: 1210px;
    margin-left: auto;
    margin-right: auto;
}

.tm-mb-0 { margin-bottom: 0; }
.tm-mb-1 { margin-bottom: 20px; }
.tm-mb-2 { margin-bottom: 40px; }
.tm-mb-3 { margin-bottom: 60px; }
.tm-mb-4 { margin-bottom: 30px; }
.tm-bg-color-1 { background-color: #9999CC; }
.tm-bg-color-2 { background-color: #CC9999; }
.tm-bg-color-3 { background-color: #666666; }
.tm-bg-color-4 { background-color: #99CCFF; }
.tm-bg-color-5 { background-color: #99CC99; }
.tm-bg-color-6 { background-color: #F2F2F2; }
.tm-bg-color-7 { background-color: #DDD; }
.tm-bg-color-8 { background-color: #EDEEEF; } /* Nav background */
.tm-bg-color-white { background-color: white; }
.tm-text-color-1 { color: #666; }
.tm-text-color-2 { color: #333; }
.tm-text-white { color: #fff; }
.text-center { text-align: center; }

.tm-site-header {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    height: 210px;
}

.tm-site-name-container {
    width: 29.752%;
    min-width: 300px;
    margin-right: 20px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform:uppercase;
}

.tm-nav-container {
  display: flex;
  align-items: flex-end;
  justify-content: flex-end;
  width: 68.595%;
  height: 100%;
  padding: 20px;
}

.tm-nav-item {
  list-style: none;
  display: inline-block;
  width: 145px;
  height: 145px;
  margin-right: 15px;
  background-color: white;
}

.tm-nav-item:last-child {
  margin-right: 0;
}
@media (max-width: 899px) {
  .tm-site-header {
    height: auto;
    flex-direction: column;
  }
  .tm-site-name-container,
  .tm-nav-container {
    width: 100%;
  }

  .tm-site-name-container {
    margin-right: 0;
    padding:50px;
  }
}
@media (max-width: 600px) {
  .tm-nav-item { margin: 10px; }
  .tm-nav-item:last-child { margin-right: 10px; }

  .tm-nav ul {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-end;
    justify-content: flex-end;
  }
}

.tm-nav-link {
  color: #666;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-left: 25%;
  font-size: 1.2rem;
}

.tm-nav-item.current .tm-nav-link,
.tm-nav-link:hover {
  color: white;
  background-color: #CC9999;
}

@media (max-width: 1033px) {
  .tm-nav-item {
    width: 120px;
    height: 120px;
  }

  .tm-nav-link { padding-left: 20px; }
}

.tm-img-responsive {
  max-width: 100%;
  height: auto;
}

.tm-section-1-l {
  width: 57.85%;
  margin-right: 1.65%;
}

.tm-section-1-r {
  padding: 50px 40px;
  width: 40.5%;
}

.tm-row { display: flex; }

.tm-btn {
  display: inline-block;
  padding: 15px 40px;
  font-size: 1.1rem;
  border: none;
  background-color: #CC9999;
  color: white;
}

.tm-btn:hover {
  color: white;
  background-color: #875959;
}

.tm-social-row { padding: 70px; }
.tm-icon { width: 33.3334%; }

.tm-icon-inner {
  max-width: 250px;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.tm-icon-inner > a > * { color: white; }
.tm-icon-inner h3 { line-height: 1.7; }

.tm-section-2-l {
  width: 40.5%;
  margin-right: 1.65%;
}

.tm-section-2-r { width: 57.85%; }
.tm-box-pad { padding: 40px 50px; }

.tm-em-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 65px 60px 45px;
}

.tm-em-box p {
  font-style: italic;
  line-height: 2;
  max-width: 370px;  
}

.tm-btn-2 { background-color: #666768; }

.tm-btn-2:hover {
  color: white;
  background-color: #989A9B;
}

.tm-btn-3 { background-color: #99CC99; }
.tm-btn-3:hover { background-color: #547d54; }

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

    </style>
<br><br>


<h1 class="text-center mb-3 text-success" style=" background: rgba(0, 0, 0, 0.2);">ABOUT US!</h1>
        <div class="tm-bg-color-1 tm-mb-1 tm-row tm-social-row">        
            <div class="tm-icon">
                <div class="tm-icon-inner">

        <img src="{{ asset('assets/img/ama.png') }}" class="picxss" alt="" style="margin-left: 147%; width: 140%; margin-top: -30px; background: #0f0f49;"> 
        
                </div>
            </div>    
            <h1 class="text-center" style="margin-top: 120px;"> AMA Real Estate Developer </h1>
            </div>
            <h3  class="text-center text-success"style="margin-top: -50px; margin-left: 50px; margin-right: 50px;"> From a yearning to live life’s sweeter comforts or a longing to widen one’s horizons, the dream of a better lifestyle unfolds in PHINMA Maayo.

With more expansive spaces that evoke warmth and welcoming neighborhoods that ensure nothing but peace of mind, Maayo is the perfect private escape where individuals and families can grow.

Embark on a bigger milestone with a place that matches your desire for community, more meaningful life experiences, connections, and undeniable comfort.

Fulfill a brighter future at PHINMA Maayo.</h3>
        
        <br>
        <h1 class="text-center mb-3 text-dark" style=" margin-top: -20px; background: rgba(0, 0, 0, 0.1);"><span class="text-secondary">Latest </span><br>News & Events</h1><hr>
        <section class="tm-mb-1 tm-row tm-services-row" id="services">
            <div class="tm-section-2-l">
              
                <article class="tm-bg-color-6 tm-box-pad tm-mb-1" style="margin-left: 5px;">
                <h1 class="text-center mb-3" style="margin-top: -40px;">Latest Events</h1>
                    <h2 class="tm-mb-2">METROTOWNE’S CHROMIUM TOWER TOP-OFF EVENT</h2>
                    <p>Metrotowne‘s Chromium Tower is on its way to provide the driven new homes! Metrotowne recently held a top of ceremony last November 17. This means that we are on the right track to provide homes to the first 330 individuals. Metrotowne is excited for the nearing unveiling of the completed Chromium Tower. The ceremony is to celebrate the impact of the soon-to-be home for the driven individuals looking for that move to become their best selves.</p>
                    <p class="tm-mb-0">Metrotowne is located in the heart of Las Pinas, a premier place for convenience and opportunity.</p>
                </article>
                <div class="tm-bg-color-7 tm-em-box" style="margin-left: 5px;">
                    <p class="tm-text-color-2">Come visit the Metrotowne showroom and imagine your life in Las Pinas, where you can follow your goals and achieve every possibility.</p>
                    <a href="#gallery" class="tm-btn tm-btn-2">Get in Touch</a>
                </div>
            </div>
            <div class="tm-section-2-r" style="margin-right: 5px;">
            <img src="{{ asset('assets/img/comparto.jpg') }}" class="tm-img-responsive" alt="">
            </div>
        </section><br>
        <section class="tm-mb-1" id="about">    
            <div class="tm-row tm-about-row">
                <div class="tm-section-1-l">
                <img src="{{ asset('assets/img/get.jpeg') }}" class="tm-img-responsive" alt="" style="margin-left: 5px;">
                </div>
                <article class="tm-section-1-r tm-bg-color-8" style="margin-right: 5px;">
                <h1 class="text-center mb-3" style="margin-top: -40px;">Latest News</h1>
                    <h2 class="tm-mb-2 tm-title-color">The home investment checklist: What you need to look out for</h2>
                    <p><a rel="nofollow" href="#" target="_parent">Company</a> You need to look into you and your family’s future as early as today. Simply saving your hard-earned money isn’t enough to create a financially stable and comfortable retirement. A driven individual is smart with money and finds opportunities to grow their bank over time.

Investing in properties is among those opportunities. If you’re considering beginning investing for your future, there are a few things you should look out for to make your investment worth it in the long run.<a rel="nofollow" href="https://templatemo.com/contact" target="_parent"></a> if you have any question.</p>
                    <p>This article can be your checklist for knowing the properties or condominiums that can become one of your key investments.</p>
                    
                    <a href="#services" class="tm-btn tm-btn-1 tm-link-to-services">More Detail</a>
                </article>
            </div>
            <br>
        </section>
        
      
       
       
@endsection