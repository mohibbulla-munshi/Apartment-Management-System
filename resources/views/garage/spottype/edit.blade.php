@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Spot Type</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('parkingspot.update', ['parkingspot' => $parkingspot->id]) }}"
          class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="date" class="form-label">Spot Type :</label>
            <input name="type" type="text" class="form-control" id="type" value="{{ $parkingspot->type }}" placeholder = "Spot Type">
            <div class="invalid-feedback">
            </div>
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">Status :</label>
            <select name="status" class="form-select" id="status" >
              <option value="1" {{ $parkingspot->status == '1' ? 'selected' : '' }}>Active</option>
              <option value="0" {{ $parkingspot->status == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <div class="invalid-feedback">
            </div>
          </div>
          
          </div>
          <div class="col-12">
          <input name="id" type="hidden"  id="id" value="{{ $parkingspot->id }}" >
            <button class="btn btn-primary" type="submit">Update</button>
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
