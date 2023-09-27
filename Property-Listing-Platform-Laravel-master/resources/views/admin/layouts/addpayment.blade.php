@extends('admin.base')

@section('content')


<div class="card" style="margin-top: -20px;">
    <div class="card-header">
        <h2 style=" text-align: center; margin-bottom: 40px; margin-top: 50px; background: #036161; color: white;">Client Payment & Requirements Method</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('insertpayment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="">FullName:</label>
                <input type="text" value="{{ $category->name }}" class="form-control" name="name">
</div>
<div class="col-md-6 mb-3">
    <label for="">Client Address:</label>
    <input type="text" value="{{ $category->description }}" class="form-control" name="address">
</div>
<div class="col-md-6 mb-3">
    <label for="">Unit Name:</label>
    <input type="text" value="{{ $category->slug }}" class="form-control" name="unit">
</div>
                             
<div class="col-md-6 mb-3">
  <label for="">Unit Price:</label>
  <select class="form-control" name="price">
            <option selected>Select Unit Price</option>
            @foreach($listings as $listing)
                <option value="{{$listing -> price }}">{{ $listing -> price }}</option> 
                @endforeach
            </select>
</div>
<div class="col-md-6 mb-3">
    <label for="">Phase</label>
    <input  type="text" value="{{ $category->phase }}" class="form-control" name="phase"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Street</label>
    <input  type="text" value="{{ $category->street }}" class="form-control" name="street"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Block:</label>
    <input  type="text" value="{{ $category->block }}" class="form-control" name="block"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Unit Number:</label>
    <input  type="text" value="{{ $category->unitnumber }}" class="form-control" name="unitnumber"> 
</div>
<div class="col-md-6 mb-3">
  <label for="">Bank Connected:</label>
  <select class="form-control" name="bank">
            <option selected>Select Bank</option>
                <option value="BDO">BDO</option> 
                <option value="BPI">BPI</option> 
                <option value="China Bank">China Bank</option> 
            </select>
</div>

<div class="col-md-6 mb-3">
    <label for="">DownPayment:</label>
    <input type="number" placeholder="₱" class="form-control" name="downpayment"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">Reservation Fee:</label>
    <input type="number" placeholder="₱" class="form-control" name="reservation"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">Balance:</label>
    <input type="number" placeholder="₱" class="form-control" name="balance"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">Monthly Payment:</label>
    <input type="number" placeholder="₱" class="form-control" name="monthly"> 
</div>

<div class="col-md-6 mb-3">
    <label for="">Total Payment:</label>
    <input type="number" placeholder="₱" class="form-control" name="tax"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Year of Contract:</label>
    <input type="text" placeholder="Contract" class="form-control" name="contract"> 
</div>
<div class="col-md-6 mb-3">
    <label for="">Months Available:</label>
    <input type="text" placeholder="Availablity" class="form-control" name="total"> 
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Pre Selling</label>
    <input type="checkbox" name="status">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Ready For Occupancy</label>
<input type="checkbox" name="popular">
</div>
<h3 style="margin-left: 35%; margin-top: 15px; background: #036161; color: white; margin-bottom: 15px;">&nbspSubmitted Requirements &nbsp</h3>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Valid ID:</label>
    <input type="checkbox" {{ $category->checklist1 == "1" ? 'checked' : ''}} name="checklist1">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Job Contract:</label>
<input type="checkbox" {{ $category->checklist2 == "1" ? 'checked' : ''}} name="checklist2">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Birth Certificate:</label>
    <input type="checkbox" {{ $category->checklist3 == "1" ? 'checked' : ''}} name="checklist3">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">TIN Number:</label>
<input type="checkbox" {{ $category->checklist4 == "1" ? 'checked' : ''}} name="checklist4">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Proof of Billing:</label>
    <input type="checkbox" {{ $category->checklist5 == "1" ? 'checked' : ''}} name="checklist5">
</div>

<div class="col-md-6 mb-3" style="margin-top: 20px;">
<label for="">Brgy Clearance:</label>
<input type="checkbox" {{ $category->checklist6 == "1" ? 'checked' : ''}} name="checklist6">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Proof of Income:</label>
    <input type="checkbox" {{ $category->checklist7 == "1" ? 'checked' : ''}} name="checklist7">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">2x2 Picture:</label>
    <input type="checkbox" {{ $category->checklist8 == "1" ? 'checked' : ''}} name="checklist8">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">DownPayment:</label>
    <input type="checkbox" {{ $category->checklist9 == "1" ? 'checked' : ''}} name="checklist9">
</div>
<div class="col-md-6 mb-3" style="margin-top: 20px;">
    <label for="">Reservation Fee:</label>
    <input type="checkbox" {{ $category->checklist10 == "1" ? 'checked' : ''}} name="checklist10">
</div>
</div>

<button type="submit" class="btn btn-success" style="margin-left: 44%; margin-top: 15px;">Submit Payment</button>
</div>
</div>
</form> 
</div>
</div>

<script>
    // Retrieve the necessary input elements
    const unitPriceInput = document.querySelector('select[name="price"]');
    const downPaymentInput = document.querySelector('input[name="downpayment"]');
    const reservationFeeInput = document.querySelector('input[name="reservation"]');
    const monthlyPaymentInput = document.querySelector('input[name="monthly"]');
    const balanceInput = document.querySelector('input[name="balance"]');
    const totalPaymentInput = document.querySelector('input[name="tax"]');

    // Event listener for unit price selection
    unitPriceInput.addEventListener('change', () => {
        const selectedUnitPrice = parseFloat(unitPriceInput.value);
        balanceInput.value = selectedUnitPrice.toFixed(2);
        calculateBalance();
    });

    // Event listeners for input changes
    downPaymentInput.addEventListener('input', calculateBalance);
    reservationFeeInput.addEventListener('input', calculateBalance);
    monthlyPaymentInput.addEventListener('input', calculateBalance);

    function calculateBalance() {
        const unitPrice = parseFloat(unitPriceInput.value);
        const downPayment = parseFloat(downPaymentInput.value) || 0;
        const reservationFee = parseFloat(reservationFeeInput.value) || 0;
        const monthlyPayment = parseFloat(monthlyPaymentInput.value) || 0;

        const totalPayment = downPayment + reservationFee + monthlyPayment;
        const balance = unitPrice - totalPayment;

        balanceInput.value = balance.toFixed(2);
        totalPaymentInput.value = totalPayment.toFixed(2);

    }

    // Retrieve the necessary input elements
const contractYearInput = document.querySelector('input[name="contract"]');
const monthsAvailableInput = document.querySelector('input[name="total"]');

// Event listener for year of contract input
contractYearInput.addEventListener('input', calculateMonthsAvailable);

function calculateMonthsAvailable() {
  const contractYear = parseInt(contractYearInput.value) || 0;
  const monthsAvailable = contractYear * 12;
  monthsAvailableInput.value = monthsAvailable.toString();
}
</script>
@endsection