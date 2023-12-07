@extends('user_dashboard.layout.master')
@section('content')

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
   
    <!-- Visitor entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <h3 class="card-title text-center text-uppercase mb-4" style="color: #3498db;">Edit Floor</h3>
        <form method="POST" action="{{ route('floors.update', ['floor' => $floor->id]) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="floor_name" class="form-label">Floor Name :</label>
            <input name="floor_name" type="text" class="form-control" id="floor_name" placeholder="floor Name" value="{{ $floor->floor_name }}" required>
            <div class="invalid-feedback">
            </div>
          </div>


            <div class="col-12 mt-3">
                <button style="margin-left: 3px" class="btn btn-primary rounded-0 float-end" type="submit">
                    <i class="fas fa-refresh"></i> Update
                </button>
                <a href="{{ url('floors') }}" class="btn btn-primary rounded-0 float-end">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        
        
        </form>
      </div>
    </div>
  </div>
</div>

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