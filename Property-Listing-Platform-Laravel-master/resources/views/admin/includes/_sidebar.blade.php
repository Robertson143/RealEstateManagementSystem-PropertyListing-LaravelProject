
<style>
    .left-sidebar{
        position: fixed;
    }
    </style>
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<aside class="left-sidebar" data-sidebarbg="skin5" style="margin-top: 30px; background: #036161;">
    <!-- Sidebar scroll-->
    <div class="sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" >
        <img src="{{ asset('assets/img/darkbg8.jpg') }}" class="logs" alt="" style="width: 249px; height: 160%;">
            <ul id="sidebarnav" style="margin-top: -420px;">
            
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.index') }}" aria-expanded="false">
                        <i class="mdi mdi-av-timer" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Dashboard</h5>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users.index') }}" aria-expanded="false">
                        <i class="mdi mdi-account-location" style="color: #00bfff;" ></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Users</h5>
                    </a> 
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('listings.index') }}" aria-expanded="false">
                        <i class="mdi mdi-account-network" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Properties</h5>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('realtors.index') }}" aria-expanded="false">
                    <i class="mdi mdi-face" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Realtors</h5>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.layouts.submittedform') }}" aria-expanded="false">
                        <i class="mdi mdi-calendar" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Submitted Form</h5>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.layouts.payment') }}" aria-expanded="false">
                        <i class="mdi mdi-cash" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Payments</h5>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.layouts.sales') }}" aria-expanded="false">
                        <i class="mdi mdi-cash" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Sales & Reports</h5>
                    </a>
                </li>
               <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.layouts.reservation') }}" aria-expanded="false">
                    <i class="mdi mdi-calendar" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Reservation</h5>
                    </a>
                </li>

               <!-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.layouts.reservation') }}" aria-expanded="false">
                    <i class="mdi mdi-arrange-bring-forward" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">Seller of the month</h5>
                    </a>
                </li> 
                  <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                        <i class="mdi mdi-home" style="color: #00bfff;"></i>
                        <h5 class="hide-menu" style="margin-top: 8px;">News & Events</h5>
                    </a>
                </li> -->
               
               
                <!--<li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('inquiries.index') }}" aria-expanded="false">
                        <i class="mdi mdi-border-none"></i>
                        <span class="hide-menu">Inquiry</span> -->
                    </a>
                </li>
                <img src="{{ asset('assets/img/darkbg8.jpg') }}" class="logs" alt="" style="width: 249px; height: 20%;">
                <img src="{{ asset('assets/img/darkbg8.jpg') }}" class="logs" alt="" style="width: 249px; height: 20%;">
                <img src="{{ asset('assets/img/darkbg8.jpg') }}" class="logs" alt="" style="width: 249px; height: 20%;">
            </ul>
        </nav>
      
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->