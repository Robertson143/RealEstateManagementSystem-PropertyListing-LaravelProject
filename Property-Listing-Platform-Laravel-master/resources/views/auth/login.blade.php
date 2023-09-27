@extends('site.base')

@section('content')

<style>
  a:hover{
    border-radius: 10px;
    transform: scale(1.1);
	transition: all ease 0.5s;
  }
  .pic {
  animation: Images 4s ease-in-out infinite;
}
  @keyframes Images{
    0%{
      transform: translateY(0);
    }
    50%{
      transform: translateY(-1.8rem);
    }
    100%{
      transform: translateY(0);

    }  
}
  </style>
  <div style="margin-left: 35px;" data-poster-url="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg" data-video-urls="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4,https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-autoplay="true" data-loop="true" data-wf-ignore="true" class="background-video-5 w-background-video w-background-video-atom"><video id="9830173a-3eec-fc45-3f0b-9ff15e6fc086-video" autoplay="" loop="" style="background-image:url(&quot;https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-poster-00001.jpg&quot;)" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.mp4" data-wf-ignore="true"><source src="https://assets.website-files.com/60ffaf8413237b5d479a8592/6103afd0e63b63bdf2d5d3c7_HOUSE MODEL BG LOOP-transcode.webm" data-wf-ignore="true"></video></div>
<section id="login" class="py-5" style="background: rgba(0, 0, 0, 0.2);">
<img src="{{ asset('assets/img/ama.png') }}" class="pic" alt="" style=" margin-left: 100px; width: 40%; margin-top: -900px;">
    <div class="container" style="margin-top: -650px;">
      <div class="row"> 
        <div class="col-md-5" style="margin-left: 60%;">
          <div class="cards" style="height: -150px; margin-top: -120px; background: white;">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif

            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-sign-in-alt"></i> Sign in</h4>
            </div>
            <h6 class="text-success" style="margin-left: 120px; margin-top: 20px;">Sign in with the form below.</h6>
            <hr>
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="username">Email :</label>
                  <input type="text" name="email" placeholder="Email"class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="password2">Password :</label>
                  <input type="password" name="password" placeholder="••••••••••" class="form-control" required>
                </div>

                <input type="submit" value="Sign in" class="btn btn-secondary btn-block" style=" margin-top: -1px; width: 120px; margin-left: 140px;"> <br><br>
                <a href="#" style="margin-left: 140px; font-size -20px;"> Forgot Password? </a>
                <hr>
                <a style="background: #0f0f49; color: white; margin-left: 85px; font-size: 25px;" href="{{ route('register') }}">&nbsp Create New Account &nbsp</a>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
