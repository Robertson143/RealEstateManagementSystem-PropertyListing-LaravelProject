@extends('admin.base')

@section('content')

<div class="row">
            <!-- column -->
          <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mt-2 text-light" style="background: #036161;">Client Reservation</h2>
                    </div>
                    <div class="table-responsive m-t-20 p-1">
                        <table class="table table-bordered table-responsive-lg">
                        <thead style="background: #03a614; color: white; ">
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Unit Name</th>
                                    <th scope="col">Status</th>
                                 <!--  <th scope="col">User</th> --> 
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody style="color: #03a614;">

                                @foreach($inquiries as $inquiry)
                                <tr id="row_{{$inquiry->id}}">
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $inquiry -> name }}</td>
                                    <td>{{ $inquiry -> email }}</td>
                                    <td>{{ $inquiry -> contact_number }}</td>
                                    <td>{{ $inquiry -> listing-> title }}</td>
                                    <td>{{ $inquiry -> status == '0' ? 'Pending' : 'Approved' }}</td> 
                                    <!--<td>{{ $inquiry -> user-> username }}</td> -->
                                    <td>
                                        <a href="{{ route('inquiries.show', $inquiry -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>
                                    </td> 
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection 