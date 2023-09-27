@extends('agent.includes.agent')

@section ('content')
<div class="card">
    <div class="card-body" style="background: #00ffff;">
    <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center text-primary" style="margin-bottom: 20px; margin-top: 20px; background: #00ffff;">Client Reservation</h2>
                    </div>
                    <div class="table-responsive m-t-20 p-1">
                        <table class="table table-bordered table-responsive-lg">
                        <thead style="color: #00ffff; background: purple;">
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Unit Name</th>
                                    <th scope="col">Status</th> 
                                    <th scope="col">Action</th> 
                                </tr>
                            </thead>
                            <tbody style="color: purple;">

                                @foreach($inquiries as $inquiry)
                                <tr id="row_{{$inquiry->id}}">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $inquiry -> name }}</td>
                                    <td>{{ $inquiry -> email }}</td>
                                    <td>{{ $inquiry -> contact_number }}</td>
                                    <td>{{ $inquiry -> listing-> title }}</td>
                                    <td>{{ $inquiry -> status == '0' ? 'Pending' : 'Approve' }}</td> 
                                    <td>
                                        <a href="{{ url('views/'.$inquiry -> id ) }}"><span class="btn btn-sm btn-rounded btn-primary">View</span></a>
                                    </td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endsection