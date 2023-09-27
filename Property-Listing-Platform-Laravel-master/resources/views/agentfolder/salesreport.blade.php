@extends('agent.includes.agent')

@section('content')

@php
$total_payments = 0;
@endphp

<div class="card">
    <div class="card-header">
        <h2 class="text-center text-primary" style="background: #00ffff; margin-top: 40px;">&nbsp;Unit Sales & Reports</h2>
    </div>
    <div class="card-body">
        <table class="table">
            <thead style="background: purple; color: #00ffff;">
                <tr>
                    <th scope="col">Unit Name</th>
                    <th scope="col">Available Unit</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Total Cost</th>
                   <!-- <th scope="col">Payment</th> -->
                </tr>
            </thead>
            <tbody style="color: purple;">
                @php
                $totalPrice = 0; // Initialize the total price variable
                @endphp
                @foreach($published_listings as $listing)
                <tr>
                    <td>{{ $listing->title }}</td>
                    <td>{{ $listing->available }}</td>
                    <td>₱ {{ $listing->price }}</td>
                    <td>₱ {{ $listing->available * $listing->price }}</td>
                   <!-- <td>₱ {{ $listing->available * $listing->price }}</td> -->
                </tr>
                @php
                $totalPrice += ($listing->available * $listing->price); // Calculate the total available unit price
                @endphp
                @endforeach
                @foreach($payment as $payments)
                @php
                $total_payments += $payments->tax;
                @endphp
                @endforeach
            </tbody>
        </table>
        <div class="totals bg-primary text-light text-center" style="margin-left: 70%; margin-top: 10px;">
            <hr>
            <h5>Overall Unit Cost: ₱ {{ $totalPrice }}</h5>
            <hr>
</div>
            <div class="totals bg-primary text-light text-center" style="margin-left: 70%; margin-top: 10px;">
            <hr>    
            <h5>Total Payments: ₱ {{ $total_payments }}</h5>
            <hr>
</div>
            <div class="totals bg-primary text-light text-center" style="margin-left: 70%; margin-top: 10px;">
            <hr>
            @php
            $remainingBalance = $totalPrice - $total_payments;
            @endphp
            <h5>Total Cost Balance: ₱ {{ $remainingBalance }}</h5>
            <hr>
        </div>
    </div>
</div>

@endsection