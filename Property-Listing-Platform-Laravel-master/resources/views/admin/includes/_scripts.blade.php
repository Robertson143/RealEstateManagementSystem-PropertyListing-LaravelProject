
<!-- Scripts -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js' ) }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/libs/popper.js/dist/umd/popper.min.js' ) }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.min.js' ) }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/libs/sparkline/sparkline.js' ) }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/dist/js/waves.js' ) }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist/js/sidebarmenu.js' ) }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/sweet-alert.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/ajax-call.js' ) }}"></script>
    <script src="{{ asset('admin/libs/datatable/datatable.js' ) }}"></script>
    <script src="{{ asset('admin/libs/datatable/dataTables.bootstrap.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/bs-custom-file-input.min.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/cdnjs.cloudflare.js') }}"></script>
    <script src="{{ asset('admin/jquery1.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/jquery-3.6.3.min.js') }}"></script>

    <!--This page JavaScript -->
    <!--chartis chart-->
    <!-- <script src="{{ asset('admin/libs/chartist/dist/chartist.min.js' ) }}"></script>
    <script src="{{ asset('admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js' ) }}"></script>
     -->
    
    <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard1.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/bootstrap.bundle.min.js' ) }}" ></script>
    <script src="{{ asset('admin/dist/js/bootstrap-material-design.min.js' ) }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if(session('status'))
    <script>
        swal("{{ session('status') }}");
        </script>
        @endif
    @yield('scripts')