 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid" style="background: purple;">
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form" style="margin-left: -90px;">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." style="margin-top: 3px; margin-right: 5px; width: 80%;">
                <button type="submit" class="btn btn-white btn-round btn-just-icon"  style="background: purple; margin-right: -10px; padding: -10px;">
                  <i class="material-icons" style="color: white; ">search</i>    
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons" style="color: white; margin-right: -20px; margin-top: 3px;">notifications</i>
               <!--   <span class="notification" style="margin-right: -20px; margin-top: 2px;"></span> -->
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('agentfolder.agentreviews') }}">View Client Inquiry</a>
                  
                </div>
              </li> 
              <li class="nav-item dropdown text-white">
                <a class="nav-link waves-effect waves-dark pro-pic" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Realtor {{ Auth::user()->username }}
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                 <!-- <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a> 
                  <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->