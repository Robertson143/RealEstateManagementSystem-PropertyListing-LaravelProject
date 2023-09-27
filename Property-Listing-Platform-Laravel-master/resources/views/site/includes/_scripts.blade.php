


<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.6.3.min.js' ) }}" defer> </script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js' ) }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js' ) }}"></script>
<script src="{{ asset('assets/js/main.js' ) }}"></script>
<script src="{{ asset('assets/js/typed.umd.js') }}"></script>
<script src="{{ asset('assets/js/scrollreveal.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('status'))
<script>
swal("{{ session('status') }}");
    </script>
@endif
