@extends('admin.base')

@section('content')

<div class="card">
    <div class="card-header">
       <h2 style="margin-top: 30px; background: #036161; text-align: center; color: white;">List of Submitted Form</h2> 
</div>
<div class="card-body">
    <table class="table" style="background: #036161;">
    <thead style="background: #03a614; color: white;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Realtor</th>
                <th>Unit Name </th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
               <th>Action</th> 
</tr>
<thead>
    <tbody style="color: white;">
        @foreach($category as $items)

        <tr id="row_{{$items->id}}">
            <th scope="row">{{ $loop->iteration }}</th>
            <td> {{ $items->name }} </td>
            <td> {{ $items -> realtor  }}</td>
            <td> {{ $items->slug }} </td>
            <td> {{ $items->description }} </td>
            <td> {{ $items->meta_keywords}} </td>
            <td> {{ $items->meta_title}} </td>
            <td>{{ $items -> stats == '0' ? 'Pending' : 'Approved' }}</td> 
            <td>
 <a href="{{ route('viewforms', ['id' => $items->id]) }}" class="btn btn-success">View</a>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
@endsection