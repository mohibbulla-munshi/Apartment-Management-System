@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Parking Spot entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Parking Spot</h3>
      </div>
        
      <div class="card-body">
            <form method="POST" action="{{ route('parkingspot.store') }}" class="row g-3 needs-validation" novalidate>
              @csrf

            <div class="col-md-6">
                <label for="date" class="form-label">Parking Spot :</label>
                <input type="text" name = "type" class="form-control" id="type" placeholder ="Parking Spot" required>
                <div class="invalid-feedback">
                </div>
            </div>
 
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
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