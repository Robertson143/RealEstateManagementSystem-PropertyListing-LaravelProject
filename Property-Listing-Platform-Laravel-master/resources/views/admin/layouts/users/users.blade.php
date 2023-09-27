@extends('admin.base')

@section('content')

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
   
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <!--<li class="breadcrumb-item">
                                        <a href="{{ route('admin.index') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">users</li> -->
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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row" style="background: #036161;">
                <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="background: #036161;">

                                <h4 class="card-title text-light">All users</h4>
                               <!-- <a href="{{ route('realtors.create') }}"><span class="tr btn btn-sm btn-rounded btn-info">Add Realtor</span></a> -->
                            </div>
                            </div>
                            <div class="table-responsive m-t-20 p-2">
                                <table class="table table-bordered table-responsive-lg">
                                <thead style="background: #03a614; color: white; ">
                                        <tr>
                                            <th scope="col" class="text-white">ID</th>
                                            <th scope="col"  class="text-white">Name</th>
                                           <!-- <th scope="col">Username</th> -->
                                            <th scope="col"  class="text-white">Email</th>
                                            <th scope="col"  class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr id="row_{{$user->id}}">
                                            <th scope="row"  class="text-white">{{ $loop->iteration }}</th>
                                            <td  class="text-white">{{ $user -> get_full_name() }}</td>
                                            <!--<td>{{ $user -> username }}</td> -->
                                            <td  class="text-white">{{ $user -> email }}</td>
                                            <td>
                                            <div class="form-group">
    <label for="role_{{ $user->id }}" class="col-sm-2 control-label text-white">Role:</label>
    <div class="col-sm-10">
        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <select class="form-control" name="role" id="role_{{ $user->id }}">
                <option value="0" {{ $user->role == 0 ? 'selected' : '' }}>Admin</option>
                <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Realtor</option>
                <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Client</option>
            </select>
        </form>
    </div>
</div>                                       
                                            <a href="{{ route('users.show', $user -> id ) }}"><span class="btn btn-sm btn-rounded btn-success" style="margin-left: 25px;">View</span></a>

                                            <form style="display:inline-block" method="POST" action="{{ route('users.destroy', $user -> id) }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                        </form>
                                        <button onclick="deleteData('{{ route('users.destroy', $user -> id) }}','{{ $user -> id }}')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
                                        </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
 
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

        
@endsection