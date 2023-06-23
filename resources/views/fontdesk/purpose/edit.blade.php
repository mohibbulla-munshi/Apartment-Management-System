@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Visitor Purpose</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('purpose.update', ['purpose' => $purpose->id]) }}"
          class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="date" class="form-label">Date :</label>
            <input name="purpose" type="text" class="form-control" id="purpose" value="{{ $purpose->purpose }}" placeholder = "Visitor Purpose">
            <div class="invalid-feedback">
            </div>
          </div>
          
          </div>
          <div class="col-12">
          <input name="id" type="hidden"  id="id" value="{{ $purpose->id }}" >
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
