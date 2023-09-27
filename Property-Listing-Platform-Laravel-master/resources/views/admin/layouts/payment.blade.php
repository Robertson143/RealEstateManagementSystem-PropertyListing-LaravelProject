@extends('admin.base')

@section('content')

@php
$total_payments = 0;
@endphp

<div class="card">
    <div class="card-header">
       <h2 style="background: #036161; color: white; margin-top: 40px;">&nbsp Client Payment Reports</h2>  <a href="{{ route('admin.layouts.addpayment') }}"><span class="tr btn btn-sm btn-rounded btn-success" style="margin-top: 35px; margin-left: 87%;">Create Payment</span></a>
    </div>
    <div class="card-body">
        <table class="table" style="background: #036161;">
            <thead style="background: #03a614; color: white; ">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Unit Name </th>
                    <th>Unit Number </th>
                    <th>Price</th>
                    <th>Monthly</th>
                    <th>Balance</th>
                    <th>Payment</th>
                 <!--   <th>Date </th> -->
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody style="color: white;">
                @foreach($payment as $payments)
                @php
                    $total_payments += $payments->tax;
                @endphp
                <tr id="row_{{$payments->id}}">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td> {{ $payments->name }} </td>
                    <td> {{ $payments->unit }} </td>
                    <td> {{ $payments->unitnumber }} </td>
                    <td>₱ {{ $payments->price }} </td>
                    <td>₱ {{ $payments->monthly }} </td>
                    <td>₱ {{ $payments->balance }} </td> 
                    <td>₱ {{ $payments->tax }} </td>
                    <!--<td> {{ $payments -> created_at->diffForHumans() }} </td> -->
                    <td>
                        <a href="{{ route('viewpayment', ['id' => $payments->id]) }}" class="btn btn-success">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="totals bg-primary text-light text-center" style="margin-left: 75%; margin-top: 10px;">
            <hr>
            <h5>Total Payments: ₱ {{ $total_payments }}</h5>
            <hr>
        </div>
    </div>
</div>
@endsection