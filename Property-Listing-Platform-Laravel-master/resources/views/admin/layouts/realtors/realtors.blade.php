@extends('admin.base')

@section('content')

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
   
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb" >
                <div class="row">
                    <div class="col-5 align-self-center">
                        {{-- <h4 class="page-title">Basic Table</h4> --}}
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                  
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
            <div class="container-fluid" >
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                <div class="col-12">
                        <div class="card" style="background: #036161;">
                            <div class="card-body" style="background: #036161;">
                                <h4 class="card-title text-light">All Realtors</h4> 
                                <a href="{{ route('realtors.create') }}"><span class="tr btn btn-sm btn-rounded btn-success">Add Realtors</span></a>
                                <a href="{{ route('som.index') }}"><span class="tr btn btn-sm btn-rounded btn-success" style="margin-right: 100px; margin-top 5px;">Top Realtor</span></a>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table class="table table-bordered table-responsive-lg">
                                    <thead style="color: white; background: #03a614;">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: white;">
                                        @foreach($realtors as $realtor)
                                        <tr id="row_{{$realtor->id}}">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $realtor -> name }}</td>
                                            <td>{{ $realtor -> email }}</td>
                                            <td>{{ $realtor -> contact_number }}</td>
                                            <td>{{ $realtor -> address }}</td>
                                            <td>
                                            <a href="{{ route('realtors.show', $realtor -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>

                                            <form style="display:inline-block" method="POST" action="{{ route('realtors.destroy', $realtor -> id) }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                        </form>
                                    <!--<button onclick="deleteData('{{ route('realtors.destroy', $realtor -> id) }}','{{ $realtor -> id }}')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button> -->
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