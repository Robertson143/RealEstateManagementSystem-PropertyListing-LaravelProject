@extends('agent.includes.agent')
@section('content')

<div class="card">
    <div class="card-header">
        <h2 class="text-primary" style="background: #00ffff;">&nbspList of My Client Application Form</h2>  <a href="{{ route('agentfolder.clientform') }}"><span class="tr btn btn-sm btn-rounded btn-primary" style="margin-top: -5px; margin-left: 87%;">Create Form</span></a>
</div>
<div class="card-body">
    <table class="table">
        <thead style="color: #00ffff; background: purple;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Unit Name </th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
               <th>Status</th> 
               <th>Action</th> 
</tr>
<thead>
    <tbody style="color: purple;">
        @foreach($category as $item)
        
        <tr id="row_{{$item->id}}">
            <td scope="row">{{ $loop->iteration }}</td>
            <td> {{ $item->name }} </td>
            <td> {{ $item->slug }} </td>
            <td> {{ $item->description }} </td>
            <td> {{ $item->meta_keywords}} </td>
            <td> {{ $item->meta_title}} </td>
            <td>{{ $item -> stats == '0' ? 'Pending' : 'Approved' }}</td> 
            <td>
<a href="{{ url('edit-form/'. $item->id) }}" class="btn btn-primary">View</a> 
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection