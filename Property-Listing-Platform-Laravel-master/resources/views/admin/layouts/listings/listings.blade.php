@extends('admin.base')

@section('content')

        <!-- Page wrapper  -->
        <!-- ============================================================== -->
   
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb" style="background: #036161;">
                <div class="row">
                    <div class="col-5 align-self-center">
                                         
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                
                                    <li class="breadcrumb-item">
                                      <!--  <a href="{{ route('listings.create') }}">Add Property</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Property List</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================== ================================ -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="background: #036161;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row" style="background: #036161;">
                <h2 class="page-title text-light text-center" style="margin-left: 38%; margin-bottom: 20px; margin-top: -30px;">Lists of Model Units</h2> 
            <!--    <a href="{{ route('listings.create') }}"><span class="tr btn btn-sm btn-rounded btn-success">&nbsp List Unit &nbsp</span></a> -->
               
                <div class="col-12">
                    @if(count($unpublished_listings) > 0)
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">New Listings</h4>
                                
                            </div>
                            <div class="table-responsive m-t-20">
                                <table id="" class="table table-bordered table-responsive-lg">
                                    <thead>
                                        <tr>

                                            <th scope="col">ID</th>
                                            <th scope="col">Unit Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Units Available</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($unpublished_listings as $listing)
                                        <tr id="row_{{$listing->id}}">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $listing -> title }}</td>
                                            <td>{{ $listing -> price }}</td>    
                                            <td>{{ $listing -> available }}</td>                                 
                                            <td><img src="{{ url($listing -> thumbnail_0) }}" alt="" srcset="" style="width:70px;height:50px"></td>
                                            <td>@if ( $listing -> is_published == '1' )
                                                    Published
                                                @else
                                                    Un Publish
                                                @endif
                                            </td>
                                            <td>{{ $listing -> created_at->diffForHumans() }}</td>
                                        
                                            <td>
                                            <a href="{{ route('listings.show', $listing -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>

                                            {{-- <form style="display:inline-block" method="POST" action="{{ route('listings.destroy', $listing -> id) }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                        <!--<button  type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
                                            </form> --}}
                                        <button onclick="deleteData('{{ route('listings.destroy', $listing -> id) }}','{{ $listing -> id }}')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button> -->

                                        </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if(count($published_listings) > 0)
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title text-success">All Model Unit Lists</h4>
                                <a href="{{ route('listings.create') }}"><span class="tr btn btn-sm btn-rounded btn-success">&nbsp List Unit &nbsp</span></a>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table id="" class="table table-bordered table-responsive-lg">
                                    <thead style="background: #03a614; color: white; ">
                                        <tr>

                                            <th scope="col">ID</th>
                                            <th scope="col">Unit Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Units Available</th>
                                            <th scope="col">Realtor</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: #03a614;">
                                        @foreach($published_listings as $listing)
                                        
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $listing -> title }}</td>
                                            <td>₱{{ $listing -> price }}</td>
                                            <td>{{ $listing -> available }}</td>
                                            <td>{{ $listing -> realtor-> name }}</td>
                                            <td><img src="{{ url($listing -> thumbnail_0) }}" alt="" srcset="" style="width:70px;height:50px"></td>
                                            <td>@if ( $listing -> is_published == '1' )
                                                    Published
                                                @else
                                                    Un Publish
                                                @endif
                                            </td>
                                            <td>{{ $listing -> created_at->diffForHumans() }}</td>
                                            
                                            <td>
                                            <a href="{{ route('listings.show', $listing -> id ) }}"><span class="btn btn-sm btn-rounded btn-success">View</span></a>

                                          <!--  {{-- <form style="display:inline-block" method="POST" action="{{ route('listings.destroy', $listing -> id) }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button  type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button>
                                            </form> --}}
                                            <button onclick="deleteData('{{ route('listings.destroy', $listing -> id) }}','{{ $listing -> id }}')" type="submit" class="btn btn-sm btn-rounded btn-danger">Delete</button> -->

                                        </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
      
                            </div>
                        </div>
                    @endif

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