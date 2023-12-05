@extends('user_dashboard.layout.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addOwner') }}
    </span>
    <!-- Visitor entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div class="card-body">
        <form method="POST" action="{{ route('owners.store') }}" class="row g-3 needs-validation" novalidate enctype="multipart/form-data">
          @csrf

          <div class="col-md-6">
            <label for="owner_name" class="form-label"><span style="color:red;">*</span> Owner Name :</label>
            <input name="owner_name" type="text" class="form-control" id="owner_name">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label"><span style="color:red;">*</span> Email :</label>
            <input name="email" type="email" class="form-control" id="email">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="contact_no" class="form-label"><span style="color:red;">*</span> Contact No :</label>
            <input name="contact_no" type="text" class="form-control" id="contact_no">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="password" class="form-label"><span style="color:red;">*</span> Password :</label>
            <input name="password" type="password" class="form-control" id="password">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="present_address" class="form-label"><span style="color:red;">*</span> Present Address :</label>
            <input name="present_address" type="text" class="form-control" id="present_address">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="permanent_address" class="form-label"><span style="color:red;">*</span> Permanent Address
              :</label>
            <input name="permanent_address" type="text" class="form-control" id="permanent_address">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="nid" class="form-label"><span style="color:red;">*</span> NID (National ID Card) :</label>
            <input name="nid" type="number" class="form-control" id="nid">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-12">
            <label for="owner_unit_no" class="form-label"><span style="color:red;">*</span> Owner Unit No :</label>
            <br>
            <div class="border p-2">
              @foreach($floorUnits as $floorUnit)
              <input type="checkbox" id="owner_unit_no" name="owner_unit_no[]" value="{{$floorUnit->unit_name}}">
              <label for="owner_unit_no"> {{$floorUnit->unit_name}}</label><br>
              @endforeach
              <div class="invalid-feedback">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <label for="image" class="form-label"><span style="color:red;">*</span> Image :</label>
            <input name="owner_image" type="file" class="form-control" id="image"><br>
          </div>

          <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $('#floor_no').on('change', function () {
      var floorId = $(this).val();
      if (floorId) {
        $.ajax({
          url: "{{ url('/get/unit') }}/" + floorId, // Added a missing slash
          type: "GET",
          dataType: "json",
          success: function (unit) {
            $("#unit_name").empty(); // Corrected the selector
            $.each(unit, function (key, value) {
              $("#unit_name").append('<option value="' + value.unit_name + '">' + value.unit_name + '</option>'); // Fixed the concatenation
            });
          },
        });
      } else {
        alert("Please select Floor");
      }
    });
  });
</script>


<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>



@endsection