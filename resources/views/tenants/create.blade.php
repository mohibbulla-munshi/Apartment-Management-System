@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addTenants') }}
    </span>
    <!-- Tenant Entry Form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <form method="POST" action="{{ route('tenants.store') }}" class="row g-3 needs-validation"
          enctype="multipart/form-data" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="name" class="form-label">Tenant Name :</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">
              Please provide a valid tenant name.
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">
              Please provide a valid email.
            </div>
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <div class="invalid-feedback">
              Please provide a valid password.
            </div>
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label">Contact (With Country Code) :</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
            <div class="invalid-feedback">
              Please provide a valid contact number.
            </div>
          </div>
          <div class="col-md-6">
            <label for="address" class="form-label">Address :</label>
            <textarea class="form-control" id="address" name="address" required></textarea>
            <div class="invalid-feedback">
              Please provide a valid address.
            </div>
          </div>
          <div class="col-md-6">
            <label for="nid" class="form-label">NID (Tenant National ID) :</label>
            <input type="text" class="form-control" id="nid" name="nid" required>
            <div class="invalid-feedback">
              Please provide a valid NID.
            </div>
          </div>
          <div class="col-md-6">
            <label for="floorNo" class="form-label">Floor No :</label>
            <input type="text" class="form-control" id="floorNo" name="floor_no" required>
            <div class="invalid-feedback">
              Please provide a valid floor number.
            </div>
          </div>
          <div class="col-md-6">
            <label for="availableUnitNo" class="form-label">Available Unit No :</label>
            <input type="text" class="form-control" id="availableUnitNo" name="available_unit_no" required>
            <div class="invalid-feedback">
              Please provide a valid available unit number.
            </div>
          </div>
          <div class="col-md-6">
            <label for="advanceRent" class="form-label">Advance Rent :</label>
            <input type="number" class="form-control" id="advanceRent" name="advance_rent" required>
            <div class="invalid-feedback">
              Please provide a valid advance rent amount.
            </div>
          </div>
          <div class="col-md-6">
            <label for="rentPerMonth" class="form-label">Rent Per Month :</label>
            <input type="number" class="form-control" id="rentPerMonth" name="rent_per_month" required>
            <div class="invalid-feedback">
              Please provide a valid rent per month amount.
            </div>
          </div>
          <div class="col-md-6">
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="date" class="form-control" id="issueDate" name="issue_date" required>
            <div class="invalid-feedback">
              Please provide a valid issue date.
            </div>
          </div>
          <div class="col-md-6">
            <label for="rentMonth" class="form-label">Rent Month :</label>
            <input type="text" class="form-control" id="rentMonth" name="rent_month" required>
            <div class="invalid-feedback">
              Please provide a valid rent month.
            </div>
          </div>
          <div class="col-md-6">
            <label for="rentYear" class="form-label">Rent Year :</label>
            <input type="text" class="form-control" id="rentYear" name="rent_year" required>
            <div class="invalid-feedback">
              Please provide a valid rent year.
            </div>
          </div>
          <div class="col-md-6">
            <label for="status" class="form-label">Tenant Status :</label>
            <input type="text" class="form-control" id="status" name="status" required>
            <div class="invalid-feedback">
              Please provide a valid tenant status.
            </div>
          </div>
          <div class="col-md-6">
            <label for="tenantPhoto" class="form-label">Tenant Photo :</label>
            <input type="file" class="form-control" id="tenantPhoto" name="tenant_photo">
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ===date picker== -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script type="text/javascript">
  $('#issueDate').datepicker();
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