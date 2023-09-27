@extends('admin.base')

@section('content')


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb" style="background: #036161;">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title text-light">Dashboard</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <!-- <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" style="background: #036161;">
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row" style="background: #036161;">
            <div class="col-md-6 col-sm-6 col-lg-3">
                <a href="{{ route('users.index') }}">
                    <div class="mini-stat clearfix bx-shadow">
                        <span class="mini-stat-icon bg-info"><i class="mdi mdi-account-location"></i></span>
                        <div class="mini-stat-info text-right text-muted">
                            <span class="counter">{{ $total_users }}</span>
                            Total User
                        </div>
                        <div class="tiles-progress">
                            <div class="m-t-20">
                                {{-- <h5 class="text-uppercase">Sales <span class="pull-right">60%</span></h5> --}}
                                <div class="progress progress-sm m-0">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        {{-- <span class="sr-only">60% Complete</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>    
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
                <a href="{{ route('listings.index') }}">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-info"><i class="mdi mdi-account-network"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter">{{ $total_listing }}</span>
                        Total Units
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            {{-- <h5 class="text-uppercase">Orders <span class="pull-right">90%</span></h5> --}}
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    {{-- <span class="sr-only">90% Complete</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            
            <div class="col-md-6 col-sm-6 col-lg-3">
                <a href="{{ route('admin.layouts.payment') }}">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-success"><i class="mdi mdi-calendar"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter">{{ $total_payment }}</span>
                        Total Clients
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            {{-- <h5 class="text-uppercase">Visitors <span class="pull-right">60%</span></h5> --}}
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    {{-- <span class="sr-only">60% Complete</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-3">
            <a href="{{ route('realtors.index') }}">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-success"><i class="mdi mdi-face"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter">{{ $total_realtors }}</span>
                        Total Realtors
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            {{-- <h5 class="text-uppercase">Users <span class="pull-right">57%</span></h5> --}}
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                    {{-- <span class="sr-only">57% Complete</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>


@php
 $total_payments = 0;
@endphp           

@php
 $totalPrice = 0; // Initialize the total price variable
@endphp
@foreach($published_listings as $listing)

@php
 $totalPrice += ($listing->available * $listing->price); // Calculate the total available unit price
@endphp
@endforeach
@foreach($payment as $payments)
@php
 $total_payments += $payments->tax;
@endphp
@endforeach
            <div class="col-md-6 col-sm-6 col-lg-4">
            <a href="{{ route('admin.layouts.sales') }}">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-purple"><i class="mdi mdi-cash"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter"> ₱ {{ $totalPrice }}</span>
                        Overall Unit Cost
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            {{-- <h5 class="text-uppercase">Orders <span class="pull-right">90%</span></h5> --}}
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    {{-- <span class="sr-only">90% Complete</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-4">
            <a href="{{ route('admin.layouts.sales') }}">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-warning"><i class="mdi mdi-cash"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter"> ₱ {{ $total_payments }}</span>
                        Total Payments
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            {{-- <h5 class="text-uppercase">Users <span class="pull-right">57%</span></h5> --}}
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-primary bg-warning" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                    {{-- <span class="sr-only">57% Complete</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            @php
            $remainingBalance = $totalPrice - $total_payments;
            @endphp
            <div class="col-md-6 col-sm-6 col-lg-4">
            <a href="{{ route('admin.layouts.sales') }}">
                <div class="mini-stat clearfix bx-shadow">
                    <span class="mini-stat-icon bg-purple"><i class="mdi mdi-cash"></i></span>
                    <div class="mini-stat-info text-right text-muted">
                        <span class="counter"> ₱ {{ $remainingBalance }}</span>
                        Total Cost Balance
                    </div>
                    <div class="tiles-progress">
                        <div class="m-t-20">
                            {{-- <h5 class="text-uppercase">Orders <span class="pull-right">90%</span></h5> --}}
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                    {{-- <span class="sr-only">90% Complete</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div> 
        </div> 
       <!-- <h1 class="text-center text-light"> Sales Performance Data</h1> -->

        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->

      <!--  <div class="row text-center">
            <div class="col-md-4">
              <div class="card card-chart bg-info text-white">
                <div class="card-header card-header-success" style="color: white;">
                  <div class="ct-chart" id="dailySalesChart" style="margin-left: 30px;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="63.18973214285714" x2="63.18973214285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="86.37946428571428" x2="86.37946428571428" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="109.56919642857143" x2="109.56919642857143" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="132.75892857142856" x2="132.75892857142856" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="155.94866071428572" x2="155.94866071428572" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="179.13839285714286" x2="179.13839285714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C63.19,79.2,63.19,79.2,63.19,79.2C86.379,103.2,86.379,103.2,86.379,103.2C109.569,79.2,109.569,79.2,109.569,79.2C132.759,64.8,132.759,64.8,132.759,64.8C155.949,76.8,155.949,76.8,155.949,76.8C179.138,28.8,179.138,28.8,179.138,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="63.18973214285714" y1="79.2" x2="63.19973214285714" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="86.37946428571428" y1="103.2" x2="86.38946428571428" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="109.56919642857143" y1="79.2" x2="109.57919642857144" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="132.75892857142856" y1="64.8" x2="132.76892857142855" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="155.94866071428572" y1="76.8" x2="155.9586607142857" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="179.13839285714286" y1="28.799999999999997" x2="179.14839285714285" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="23.189732142857142" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="63.18973214285714" y="125" width="23.189732142857142" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="86.37946428571428" y="125" width="23.189732142857146" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="109.56919642857143" y="125" width="23.18973214285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="132.75892857142856" y="125" width="23.18973214285714" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="155.94866071428572" y="125" width="23.189732142857153" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 23px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="179.13839285714286" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Sales</h4>
                  <p class="card-category">
                   <i class="fa fa-long-arrow-up"></i>{{ $total_payment }}% increase in today sales.</p>
                </div>
                <div class="card-footer">
                  
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart bg-success text-white">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart" style="margin-left: 30px;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="197.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="197.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="197.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="197.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="197.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="197.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="46.555338541666664" x2="46.555338541666664" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="59.666015625" x2="59.666015625" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="72.77669270833334" x2="72.77669270833334" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="85.88736979166667" x2="85.88736979166667" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="98.99804687500001" x2="98.99804687500001" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="112.10872395833334" x2="112.10872395833334" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="125.21940104166667" x2="125.21940104166667" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="138.330078125" x2="138.330078125" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="151.44075520833334" x2="151.44075520833334" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="164.55143229166666" x2="164.55143229166666" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="177.662109375" x2="177.662109375" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="190.77278645833334" x2="190.77278645833334" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="13.110677083333334" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="53.110677083333336" y="125" width="13.110677083333334" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="66.22135416666667" y="125" width="13.110677083333332" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="79.33203125" y="125" width="13.110677083333336" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="92.44270833333334" y="125" width="13.110677083333336" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="105.55338541666667" y="125" width="13.110677083333329" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="118.6640625" y="125" width="13.110677083333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="131.77473958333334" y="125" width="13.110677083333329" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="144.88541666666669" y="125" width="13.110677083333329" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="157.99609375" y="125" width="13.110677083333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="171.10677083333334" y="125" width="13.110677083333343" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 13px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="184.21744791666669" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Monthly Sales</h4>
                  <p class="card-category"></i> {{ $total_payment }}% increase in last month sales.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart bg-primary text-white">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart" style="margin-left: 30px;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="60.291015625" x2="60.291015625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="80.58203125" x2="80.58203125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="100.873046875" x2="100.873046875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="121.1640625" x2="121.1640625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="141.455078125" x2="141.455078125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="161.74609375" x2="161.74609375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="182.037109375" x2="182.037109375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="202.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,92.4C60.291,30,60.291,30,60.291,30C80.582,66,80.582,66,80.582,66C100.873,84,100.873,84,100.873,84C121.164,86.4,121.164,86.4,121.164,86.4C141.455,91.2,141.455,91.2,141.455,91.2C161.746,96,161.746,96,161.746,96C182.037,97.2,182.037,97.2,182.037,97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="60.291015625" y1="30" x2="60.301015625" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="80.58203125" y1="66" x2="80.59203125" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="100.873046875" y1="84" x2="100.883046875" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="121.1640625" y1="86.4" x2="121.1740625" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="141.455078125" y1="91.2" x2="141.465078125" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="161.74609375" y1="96" x2="161.75609375" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="182.037109375" y1="97.2" x2="182.047109375" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="60.291015625" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="80.58203125" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="100.873046875" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="121.1640625" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="141.455078125" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="161.74609375" y="125" width="20.291015625" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 20px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="182.037109375" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Yearly Sales</h4>
                  <p class="card-category"></i>{{ $total_payment }}% increase in last year sales.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
          </div> -->
         
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


@endsection