@extends('agent.includes.agent')

@section ('content')
<div class="card" style="width: 130%; height: 150%;">
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6" style=" background: #00ffff; margin-left: 10px;">
              <div class="card card-stats" style=" background: purple;">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category" style="color: yellow;">Total Reservation</p>
                  <h2 class="card-title" style="color: yellow;">{{ $total_inquiries }}</h2>
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-success">warning</i>
                    <a href="javascript:;" style="color: yellow;">View Reservations</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left: 10px; background: #00ffff;">
              <div class="card card-stats bg-warning">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category" style="color: green;">My Total Clients</p>
                  <h2 class="card-title" style="color: green;"> {{ $total_payment }}</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i>  
                    <a href="javascript:;" style="color: green;">View total Clients</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left: 10px; background: #00ffff;">
              <div class="card card-stats bg-success">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category" style="color: purple;">Total Forms</p>
                  <h2 class="card-title" style="color: purple;">{{ $total_category }}</h2>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i>
                      <a href="javascript:;" style="color: purple;">View total Forms</a>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-lg-7 col-md-12 text-center" style="margin-left: 110px;">
              <div class="card bg-success" style="width: 110%;">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">My Client Payment Details</h4>
                <!--  <p class="card-category">New Client Month of April 1, 2023</p> -->
                </div>
                <div class="card-body table-responsive"> 
                  <table class="table table-hover">
                  <thead style="color: #00ffff; background: purple;">
                      @foreach($payment as $payments)
                      <th>ID</th>
                      <th>Name</th>
                      <th>Unit</th>
                      <th>DownPayment</th>
                      <th>Monthly Payment</th>
                      <th>Balance</th>
                      <th>Action</th>
                     
                    </thead>
                    <tbody  class="bg-warning" style="color: purple;">
                  <tr id="row_{{$payments->id}}">
            <td scope="row">{{ $loop->iteration }}</td> 
                        <td>{{ $payments->name }}</td>
                        <td>{{ $payments->unit }}</td>
                        <td>₱ {{ $payments->downpayment }}</td>
                        <td>₱ {{ $payments->monthly }}</td>
                        <td>₱ {{ $payments->balance }}</td>
                        <td><a href="{{ url('clientdetails/'. $payments -> id ) }}"><span class="btn btn-sm btn-rounded btn-primary">View</span></a></td>
                        
                      </tr>
                    </tbody>
                  </table>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
           
            
          </div> 
          
</div>


@endsection