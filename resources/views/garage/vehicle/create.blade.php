@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Vehicle entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Vehicle</h3>
      </div>
        
      <div class="card-body">
        <form method="POST" action="{{ route('vehicle.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

        <div class="col-md-6">
            <label for="driver_id" class="form-label">Driver :</label>
            <select name="driver_id" class="form-select" id="driver_id" required>
            <option value="0">--Select--</option>
            @php foreach($drivers as $value){ @endphp
              <option value="@php echo $value->id; @endphp"> @php echo $value->name; @endphp</option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
            </div>
        </div>
          
        <div class="col-md-6">
            <label for="number_plate " class="form-label">Number Plate :</label>
            <input type="text" name = "number_plate" class="form-control" id="number_plate" placeholder ="Number Plate">
            <div class="invalid-feedback">
            </div>
        </div>
      
        <div class="col-md-6">
            <label for=" engine_no" class="form-label">Engine No :</label>
            <input type="text" name = "engine_no" class="form-control" id=" engine_no" placeholder ="Engine No" required>
            <div class="invalid-feedback">
            </div>
        </div>
       
        <div class="col-md-6">
            <label for="thises_no" class="form-label">Thises No :</label>
            <input type="text" name = "thises_no" class="form-control" id="thises_no" placeholder ="Thises No">
            <div class="invalid-feedback">
            </div>
        </div>
       
        <div class="col-md-6">
            <label for="model" class="form-label">Model :</label>
            <input type="text" name = "model" class="form-control" id="model" placeholder ="Model" required>
            <div class="invalid-feedback">
            </div>
        </div>
          
        <div class="col-md-6">
            <label for="coler" class="form-label">Coler :</label>
            <input type="text" name = "coler" class="form-control" id="coler" placeholder ="Coler">
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