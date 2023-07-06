@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Driver entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Driver</h3>
      </div>
        
        <div class="card-body">
        <form method="POST" action="{{ route('driver.update', ['driver' => $driver->id]) }}"
          class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')

            <div class="col-md-6">
                <label for="name" class="form-label">Name :</label>
                <input type="text" name = "name" class="form-control" id="name" value ="{{$driver->name}}" placeholder ="Name" required>
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="licence" class="form-label">Licence :</label>
                <input type="text" name = "licence" class="form-control" id="licence" value ="{{$driver->licence}}" placeholder ="Licence" required>
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label">Phone :</label>
                <input type="number" name = "phone" class="form-control" id="phone" value ="{{$driver->phone}}" placeholder ="Phone">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="vehicle" class="form-label">Vehicle :</label>
                <input type="text" name = "vehicle" class="form-control" id="vehicle" value ="{{$driver->vehicle}}" placeholder ="Vehicle">
                <div class="invalid-feedback">
                </div>
            </div>
          
        </div>
          <div class="col-12">
          <input name="id" type="hidden"  id="id" value="{{ $driver->id }}" >
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
