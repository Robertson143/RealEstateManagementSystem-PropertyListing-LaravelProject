  <!-- Top Bar -->


  

  <!-- Navbar -->

  <style>
    a{
      color: black;
    
    
    }
  a:hover{
    border-radius: 10px;
    transform: scale(1.1);
	transition: all ease 0.5s;
 
  }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('assets/img/ama.png') }}" class="logo" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
        <li class="nav-item {{ (request()->routeIs('index')) ? 'active' : '' }}  mr-3">
            <a class="nav-link" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('about')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('about') }}">Realtor</a>
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('listings')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('listings') }}">Properties</a>
          </li>
         <!-- <li class="nav-item mr-3 {{ (request()->routeIs('aboutus')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('aboutus') }}">About us</a> -->
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('events')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('events') }}">News & Events</a>
          </li>
         
        </ul>

        <ul class="navbar-nav ml-auto">
          @auth
          <li class="nav-item mr-3">
            <li class="nav-item dropdown {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="{{ route('dashboard') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->get_full_name() }}</a>
                  <div class="dropdown-menu dropdown-menu-right user-dd animated" style="width: -50px; margin-right: -30px;">
                  <a class="dropdown-item" href="{{route('dashboard') }}" style="color: white; background-color: #0f0f49;"> <i class="fas fa-sign-in-alt"></i> Profile</a>
                <!-- <a class="dropdown-item" href="{{route('payments') }}" style="color: white; background-color: #0f0f49;"> <i class="fas fa-sign-in-alt"></i> Form</a> -->
                        <a class="dropdown-item" href="{{ route('logout') }}" style="color: white; background-color: #0f0f49;" onclick="event.preventDefault(); 
                        document.getElementById('frm-logout').submit();">
                     <i class="fas fa-sign-in-alt"></i> Sign Out</a>
                      <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                  </div>
              </li>
          @else
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('login')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('login') }}">
              <i class="fas fa-sign-in-alt"></i>

              Sign in</a>
          </li>
          <li class="nav-item mr-3 {{ (request()->routeIs('register')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('register') }}">
              <i class="fas fa-user-plus"></i> Sign up</a>
         
          @endif
        </ul>
      </div>
    </div>
  </nav>
  
<style>
  .to-top{
    background: white;
    position: fixed;
    bottom: 16px;
    right: 32px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    font-size: 32px;
    color: green;
    text-decoration: none;
    opacity: 0;
    pointer-events: none;
    transition; all .4s;
  }
.to-top.active{
  bottom: 32px;
  pointer-events: auto;
  opacity: 1;

}
  </style>
    <a href="#" class="to-top">
      <i class="fa fa-chevron-up"></i>
</a>

<script>
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
    {
      else
    }
    toTop.classList.remove("active");
  }
});
</script>

  </section>
