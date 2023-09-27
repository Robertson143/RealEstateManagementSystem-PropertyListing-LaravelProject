@extends('site.base')

@section('content')

<style>
.pics {
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

<section id="register" class="py-3" style="background: rgba(0, 0, 0, 0.2);">
<img src="{{ asset('assets/img/ama.png') }}" class="pics" alt="" style="  margin-left: 100px; width: 40%; margin-top: 168px;">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="margin-left: 55%; margin-top: -30%;">
          <div class="cards" style="background: white;">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-user-plus"></i> Sign up</h4>
            </div>
            <h6 class="text-secondary" style="margin-left: 200px; margin-top: 20px;">It's quick and easy.</h6>
            <hr>
            <div class="card-body" style="margin-top: -20px;">
                <form action="{{ route('register') }}" method="POST">
                @csrf
                  <div class="form-group">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                  <label for="first_name">First Name:</label>
                  <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                </div>
                <div class="form-group">
                 <!-- <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" required>
                </div> -->
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password2">Password :</label>
                  <input type="password" name="password" placeholder="••••••••••" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="password">Confirm Password :</label>
                  <input type="password" name="password_confirmation" placeholder="••••••••••" class="form-control" required>
                </div>
                <p class="terms" style="color: #0f0f49; font-size: -40px; margin-left: 50px;">By clicking 'Sign up' you agree to the <a href="#" class="text-secondary">Terms &amp; Conditions</a>.</p>
                <input type="submit" value="Sign up" class="btn btn-secondary btn-block" style=" margin-top: -1px; width: 120px; margin-left: 180px;">
                <hr>
                <a style="background: #0f0f49; color: white; margin-left: 120px; font-size: 20px;" href="{{ route('login') }}">&nbsp Already have an Account? &nbsp</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
