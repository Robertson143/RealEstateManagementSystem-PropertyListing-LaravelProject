

<style>
  .logo img{
    margin-left: 10%;
    margin-top: -65px;
    width: 36vw;
    animation: rotate 20s infinite;
  }
  
  @keyframes rotate{
    0%{
      transform: rotateX(0deg) rotateY(360deg) rotateZ(0deg);
    }
    100%{
      transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
  
    }
    
  }
  </style>
<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg" style="width: 19%; background: #16041a">

      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{ route('index') }}">
      <img src="{{ asset('assets/img/ama.png') }}" class="logo" alt="" style="width: 100px; margin-left: 80px;">
</a>
<h5 class="text-center"> Realtor Dashboard </h5>
    
      </div>
      <img src="{{ asset('assets/img/background2.jpg') }}" class="logs" alt="" style="width: 256px; height: 85%;">
      <div class="sidebar-wrapper" style="margin-left: -10px; margin-top: -550px;">
        <ul class="nav">
          <li class="nav-item {{ Request::is('dashboards') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('agentfolder.index') }}">
              <i class="material-icons"  style="color: 	#00ffff;">dashboard</i>
              <h5  style="color: #00ffff; margin-top: 6px;">Dashboard</h5>
            </a>
          </li>
        
          <li class="nav-item {{ Request::is('agentreviews') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('agentfolder.agentreviews') }}">
              <i class="material-icons"  style="color: #00ffff;">library_books</i>
              <h5  style="color: #00ffff; margin-top: 6px;">Reservation</h5>
            </a>
</li>
<li class="nav-item {{ Request::is('agentlisting') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('agentfolder.agentlisting') }}">
              <i class="material-icons" style="color: #00ffff;">content_paste</i>
              <h5  style="color: #00ffff; margin-top: 5px;">Properties</h5>
            </a>
</li>

<li class="nav-item {{ Request::is('form') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('agentfolder.form') }}">
              <i class="material-icons" style="color: #00ffff;">list</i>
              <h5  style="color: #00ffff; margin-top: 5px;">Client Form</h5>
            </a>
</li>
<li class="nav-item {{ Request::is('salesreport') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('agentfolder.salesreport') }}">
              <i class="material-icons" style="color: #00ffff;">bubble_chart</i>
              <h5  style="color: #00ffff; margin-top: 5px;">Sales & Reports</h5>
            </a>
</li>
<!--<li class="nav-item {{ Request::is('#') ? 'active':'' }}">
            <a class="nav-link" href="{{ route('agentfolder.agentlisting') }}">
              <i class="material-icons" style="color: #00ffff;">language</i>
              <h5  style="color: #00ffff; margin-top: 5px;">Survey</h5>
            </a>
</li> -->
        </ul>
      </div>
    </div>