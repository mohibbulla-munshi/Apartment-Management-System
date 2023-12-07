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
        <h3 class="card-title text-center text-uppercase mb-4" style="color: #3498db;">Edit Unit</h3>
        <form method="POST" action="{{ route('units.update', ['unit' => $unit->id]) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="floor_name" class="form-label">Floor No :</label>
            <select name="floor_name" class="form-select" id="floor_name" required>
                <option value="" selected disabled style="color: #6c757d;">-- Select Floor --</option>
                @foreach($floors as $floor)
                    <option value="{{ $floor->floor_name }}" {{ old('floor_name', $unit->floor_name) == $floor->floor_name ? 'selected' : '' }}>
                        {{ $floor->floor_name }}
                    </option>
                @endforeach
            </select>
            
            <div class="invalid-feedback">
            </div>
          </div>
          <div class="col-md-6">
            <label for="unit_name" class="form-label">Unit No :</label>
            <input name="unit_name" type="text" class="form-control" id="unit_name" placeholder="Unit Name" value="{{ $unit->unit_name }}" required>
            <div class="invalid-feedback">
            </div>
          </div>


            <div class="col-12 mt-3">
                <button style="margin-left: 3px" class="btn btn-primary rounded-0 float-end" type="submit">
                    <i class="fas fa-refresh"></i> Update
                </button>
                <a href="{{ url('units') }}" class="btn btn-primary rounded-0 float-end">
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