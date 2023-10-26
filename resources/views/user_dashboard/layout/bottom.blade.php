<script src="{{ asset('themes/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('themes/vendors/simplebar/js/simplebar.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Toaster --}}
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


<script>
    @if (Session:: has('alert-success'))
    Toastify({
        text: "{{ Session::get('alert-success') }}", duration: 2000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();

    @elseif(Session:: has('alert-warning'))
    Toastify({
        text: "{{ Session::get('alert-warning') }}", duration: 2000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();

    @elseif(Session:: has('alert-danger'))
    Toastify({
        text: "{{ Session::get('alert-danger') }}", duration: 2000,
        style: { background: "#c0392b" }
    }).showToast();

    @endif
</script>