<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    Agent Dashboard
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

  <link href="{{ asset('agent/css/material-dashboard.css') }}" rel="stylesheet">
  <link href="{{ asset('agent/css/style.min.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
@include('agent.includes.sidebar')

<div class="main-panel">
  @include('agent.includes.agentnav')

  <div class="content">
    @yield('content')
</div>
@include('agent.includes.footer')
</div>
</div>

<script src="{{ asset('agent/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('agent/js/popper.min.js') }}" defer></script>
<script src="{{ asset('agent/js/bootstrap-material-design.min.js') }}" defer></script>
<script src="{{ asset('agent/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
<script src="{{ asset('agent/js/bootstrap-notify.js') }}" defer></script>
<script src="{{ asset('agent/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('agent/js/custom.js') }}" defer></script>
<script src="{{ asset('agent/js/custom.min.js') }}" defer></script>
<script src="{{ asset('agent/js/datatable.js') }}" defer></script>
<script src="{{ asset('agent/js/dataTables.bootstrap.js') }}" defer></script>
<script src="{{ asset('agent/js/bs-custom-file-input.min.js') }}" defer></script>
<script src="{{ asset('agent/cdnjs.cloudflare.js') }}" defer></script>




<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('status'))
<script>
  swal("{{ session('status') }}");
</script>
  @endif


@yield('scripts')


</body>
</html>
