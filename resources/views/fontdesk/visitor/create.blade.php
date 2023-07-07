@extends('user_dashboard.layout.master')
@section('content')

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Visitor entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Visitor</h3>
      </div>
        
        <div class="card-body">
        <form method="POST" action="{{ route('visitor.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

            <div class="col-md-6">
                <label for="name" class="form-label">Name :</label>
                <input name="name" type="text"  class="form-control" id="name" placeholder ="Name" required>
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone :</label>
                <input name="phone" type="number"  class="form-control" id="phone" placeholder ="Phone">
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="user_type" class="form-label">Meet User Type :</label>
                <select name="user_type" class="form-select" id="user_type" required>
                    <option selected disabled value="">--Select User--</option>
                    <option value="amin">Amin</option>
                    <option value="abir">Abir</option>
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="visitor_id" class="form-label">Visitor Purpose :</label>
                <select name="visitor_id" class="form-select" id="visitor_id" required>
                    <option value = "0">--Select Purpose--</option>
                    @php foreach($purposes as $value){ @endphp
                       <option value="@php echo $value->purpose; @endphp" > @php echo $value->purpose; @endphp </option>
                    @php } @endphp
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="reference" class="form-label">Reference :</label>
                <input name="reference" type="text"  class="form-control" id="phone" placeholder ="Reference">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-12">
                <label for="note">Note</label>
                <textarea name="note" class="form-control" placeholder="Note" id="note"></textarea>
                <div class="valid-feedback">
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
