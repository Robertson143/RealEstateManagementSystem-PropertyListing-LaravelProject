@extends('agent.includes.agent')
@section('content')



<div class="card" style="margin-top: -20px;">
    <div class="card-header">
        <h2 class="text-primary" style=" text-align: center; margin-bottom: 40px; margin-top: 50px; background: #00ffff;">Client Payment Details</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('updatepayment', ['id' => $payment->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">FullName:</label>
                <input type="text" value="{{ $payment->name }}" class="form-control" name="name" style="background: purple; color: white;">
</div>
<div class="col-md-6 mb-3">
    <label for="">Address:</label>
    <input type="text" value="{{ $payment->address }}" class="form-control" name="address" readonly id="Balance" style="background: purple; color: white;">
</div>

<div class="col-md-6 mb-3">
    <label for="">Unit Name:</label>
    <input type="text" value="{{ $payment->unit }}" class="form-control" name="unit" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Unit Price:</label>
    <input type="text" value="{{ $payment->price }}" class="form-control" name="price" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Phase:</label>
    <input type="text" value="{{ $payment->phase }}" class="form-control" name="phase" readonly id="Phase" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Street:</label>
    <input type="text" value="{{ $payment->street }}" class="form-control" name="street" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Block:</label>
    <input type="text" value="{{ $payment->block }}" class="form-control" name="block" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Unit Number:</label>
    <input type="text" value="{{ $payment->unitnumber }}" class="form-control" name="unitnumber" readonly id="UnitNumber" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Bank Connected:</label>
    <input type="text" value="{{ $payment->bank }}"class="form-control" name="bank" readonly id="Balance" style="background: purple; color: white;">
</div>

<div class="col-md-6 mb-3">
    <label for="">DownPayment:</label>
    <input type="text"  value="{{ $payment->downpayment }}" class="form-control" name="downpayment" readonly id="Balance" style="background: purple; color: white;"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">Reservation Fee:</label>
    <input type="text" value="{{ $payment->reservation }}" class="form-control" name="reservation" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Balance:</label>
    <input type="text"value="{{ $payment->balance }}" class="form-control" name="balance" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Monthly Payment:</label>
    <input type="text" value="{{ $payment->monthly }}" class="form-control" name="monthly" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Total Payment:</label>
    <input type="text" value="{{ $payment->tax }}" class="form-control"  readonly id="Balance" name="tax" style="background: purple; color: white;">
    <!--<button type="button" id="myBtn" class="btn btn-success" style="margin-left: 80%; margin-top: -60px;">Add Payment</button> -->
</div>
<div class="col-md-6 mb-3">
    <label for="">Year of Contract:</label>
    <input type="text" value="{{ $payment->contract }}" class="form-control"  readonly id="Balance" name="contract" readonly id="Balance" style="background: purple; color: white;"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Months Available:</label>
    <input type="number" value="{{ $payment->total }}" class="form-control"  readonly id="Balance" name="total" style="background: purple; color: white;"> 
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Pre Selling</label>
    <input type="checkbox" {{ $payment->status == "1" ? 'checked' : ''}} name="status">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Ready For Occupancy</label>
<input type="checkbox" {{ $payment->popular == "1" ? 'checked' : ''}} name="popular">
</div>
<h3 class="text-primary" style="margin-left: 35%; margin-top: 15px; background: #00ffff; color: white; margin-bottom: 15px;">&nbspSubmitted Requirements &nbsp</h3>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Valid ID:</label>
    <input type="checkbox" {{ $payment->checklist1 == "1" ? 'checked' : ''}} name="checklist1">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Job Contract:</label>
<input type="checkbox" {{ $payment->checklist2 == "1" ? 'checked' : ''}} name="checklist2">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Birth Certificate:</label>
    <input type="checkbox" {{ $payment->checklist3 == "1" ? 'checked' : ''}} name="checklist3">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">TIN Number:</label>
<input type="checkbox" {{ $payment->checklist4 == "1" ? 'checked' : ''}} name="checklist4">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Proof of Billing:</label>
    <input type="checkbox" {{ $payment->checklist5 == "1" ? 'checked' : ''}} name="checklist5">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Brgy Clearance:</label>
<input type="checkbox" {{ $payment->checklist6 == "1" ? 'checked' : ''}} name="checklist6">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Proof of Income:</label>
    <input type="checkbox" {{ $payment->checklist7 == "1" ? 'checked' : ''}} name="checklist7">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">2x2 Picture:</label>
    <input type="checkbox" {{ $payment->checklist8 == "1" ? 'checked' : ''}} name="checklist8">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">DownPayment:</label>
    <input type="checkbox" {{ $payment->checklist9 == "1" ? 'checked' : ''}} name="checklist9">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Reservation Fee:</label>
    <input type="checkbox" {{ $payment->checklist10 == "1" ? 'checked' : ''}} name="checklist10">
</div>
  <!--  <button type="submit" class="btn btn-success" style="margin-left: 44%; margin-top: 60px;">Update Payment</button> -->
</div>
</div>
</form> 
<!--<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 170px; margin-left: 82%; margin-top: -1260px; margin-bottom: 115%; background: purple">
  Equity Computation
</button> -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 190%; margin-left: -200px;">
      <div class="modal-header">
      <div class="col-15" style="width: 190%;">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: 95%;"></button>
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"  style="background: #036161; color: white; width: 60%; margin-left: 200px;">Equity Computation</h1>
        <hr>
        <div class="paymentstatus bg-success text-white"><br>
        <h4 class="modal-title fs-5 text-center" id="exampleModalLabel" style="background: #036161; color: white; width: 80%; margin-left: 95px; margin-top: -15px; margin-bottom: 10px;">Payment Details</h4>
        <h2 style="text-align: center;">{{ $payment->name }}</h2>
        <label style="margin-left: 46%;">Fullname</label>
        <h6 style="margin-left: 20%;">Year of Contract: {{ $payment->contract }} Years</h6>
        <h6 style="margin-left: 20%;">Reservation Fee: ₱ {{ $payment->reservation }}</h6>
        <h6 style="margin-left: 20%;">Down Payment: ₱ {{ $payment->downpayment }}</h6>
        <h6 style="margin-left: 20%;">Monthly Payment: ₱ {{ $payment->monthly }}</h6>
        <h6 style="margin-top: -97px; margin-left: 60%;">Available Months: {{ $payment->total }} Months</h6>
        <h6 style="margin-left: 60%;">Unit Price: ₱ {{ $payment->price }}</h6>
        <h6 style="margin-left: 60%;">Total Payment: ₱ {{ $payment->tax }}</h6>
        <h6 style=" margin-left: 60%;">Total Balance: ₱ {{$payment->balance}}</h6>
         
        <br>
       </div>
        <hr>
       
        <div class="table-responsive m-t-20">
    <h4 class="modal-title fs-5 text-center" id="exampleModalLabel" style="background: #036161; color: white; width: 80%; margin-left: 95px; margin-bottom: 10px;">Amortization</h4>
    <table class="table table-success table-striped">
        <thead class="text-success">
            <tr>
                <th scope="col">Payment</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Monthly Payment</th>
                <th scope="col">Principal Payment</th>
                <th scope="col">Payment Interest</th>
            </tr>
        </thead>
        <tbody class="text-success">
            @php
            $totalPrincipalPayment = 0;
            $totalMonthlyPayment = 0;
            @endphp
            @foreach($equity as $equities)
            <tr id="row_{{$equities->id}}">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $equities->paymentdate }}</td>
                <td>₱ {{ $equities->monthlypayment }}</td>
                <td>₱ {{ $equities->principal }}</td>
                <td>₱ {{ $equities->interest }}</td>
            </tr>
            @php
            $totalPrincipalPayment += $equities->principal;
            $totalMonthlyPayment += $equities->monthlypayment;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
<div class="totals bg-primary text-light text-center" style="margin-top: -20px; margin-left: -5px;">
    <hr>
    <h6 style="margin-left: -880px;">{{ $payment->total }}</h6>
    <h6 style="margin-top: -27px; margin-left: -570px;">2023-017-24 - 2033-017-24</h6>
    <h6 style="margin-top: -27px; margin-left: -232px;">₱ {{ $totalMonthlyPayment }}</h6>
    <h6 style="margin-top: -27px; margin-left: 179px;">₱ {{ $totalPrincipalPayment }}</h6>
    <h6 style="margin-top: -27px; margin-left: 590px;">₱ {{ $totalInterest ?? '' }}</h6>
    <h6 style="margin-left: -867px; margin-top: 15px;">Months</h6>
    <h6 style="margin-top: -25px; margin-left: -572px;">Start Date - Date End</h6>
    <h6 style="margin-top: -25px; margin-left: -232px;">Total Monthly</h6>
    <h6 style="margin-top: -25px; margin-left: 179px;">Total Principal</h6>
    <h6 style="margin-top: -25px; margin-left: 590px;">Total Interest</h6>
    <hr>
</div>
<div class="totals bg-primary text-light text-center" style="margin-left: 70%;">
    <hr>
    @php
    $totalBalance = $totalPrincipalPayment - $payment->price;
    @endphp
    <h5>Total Balance: ₱ {{ abs($totalBalance) }}</h5>
    <hr>
</div>
                              
                              <h4 class="modal-title fs-5 text-center" id="exampleModalLabel" style="background: #036161; color: white; width: 80%; margin-left: 95px;">Payment Amortization</h4>
      <div class="modal-footer">
      <form action="{{ route('updateequity') }}" method="POST">
            @csrF
            <div class="form-group">
                <label for="" class="col-form-label text-success" style="margin-left: -700px;">Payment Date:</label>
                <input type="date" name="paymentdate" class="form-control" style="margin-left: -700px;">
              </div>
              <div class="form-group" style="margin-top: -87px;">
                <label for="" class="col-form-label text-success" style="margin-left: -480px;">Monthly Payment:</label>
                <select class="form-control" name="monthlypayment" style="margin-left: -480px;">
            <option selected>Select Payment</option>
                <option value="{{ $payment->monthly }}">{{ $payment->monthly }}</option> 
            </select>
              </div>
              <div class="form-group"  style="margin-top: -86px;">
                <label for="" class="col-form-label text-success" style="margin-left: -260px;">Principal Payment:</label>
            <input type="text" name="principal" class="form-control" style="margin-left: -260px;">
              </div>
              <div class="form-group" style="margin-top: -86px;">
                <label for="" class="col-form-label text-success" style="margin-left: -40px;">Payment Interest:</label>
                <input type="text" name="interest" class="form-control" style="margin-left: -40px;">
              </div>
              <input type="submit" value="Update" class="btn btn-success" style="margin-left: 21%; width: 80%; padding: 5px;">
            </form>
      </div>
      <button class="btn btn-success" onclick="printPaymentDetails()">Print 🖶</button>
                            </div>
                        </div>

                      
      </div>
      
    </div>
  </div>
</div>



<script>
  const addButton = document.getElementById("myBtn");

addButton.addEventListener("click", function(e) {
  // Get the value of the existing payment from the input field
  const oldPayment = parseFloat(document.querySelector('input[name="tax"]').value);

  // Prompt the user to enter the value of the new payment
  const newPayment = parseFloat(prompt("Enter a new payment:"));

  // Calculate the new total payment by adding the old payment and the new payment together
  const totalPayment = oldPayment + newPayment;

  // Get the value of the existing balance from the input field
  const oldBalance = parseFloat(document.querySelector('input[name="balance"]').value);

  // Calculate the new balance by subtracting the new payment from the old balance
  const newBalance = oldBalance - newPayment;

  // Update the value of the "Total Payment" input field with the new total payment
  document.querySelector('input[name="tax"]').value = totalPayment;

  // Update the value of the "Balance" input field with the new balance
  document.querySelector('input[name="balance"]').value = newBalance;
});

    </script>
    
    <script>
  function printPaymentDetails() {
    window.print();
  }
</script>
@endsection