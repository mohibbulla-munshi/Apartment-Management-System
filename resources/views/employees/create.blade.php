@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addEmployees') }}
    </span>
    <!-- Employee Entry Form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <form method="POST" action="{{ route('employees.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="name" class="form-label">Name :</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">
              Please provide a valid name.
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
            <label for="presentAddress" class="form-label">Present Address :</label>
            <textarea class="form-control" id="presentAddress" name="present_address" required></textarea>
            <div class="invalid-feedback">
              Please provide a valid present address.
            </div>
          </div>
          <div class="col-md-6">
            <label for="permanentAddress" class="form-label">Permanent Address :</label>
            <textarea class="form-control" id="permanentAddress" name="permanent_address" required></textarea>
            <div class="invalid-feedback">
              Please provide a valid permanent address.
            </div>
          </div>
          <div class="col-md-6">
            <label for="nid" class="form-label">NID (Employee National ID) :</label>
            <input type="text" class="form-control" id="nid" name="nid" required>
            <div class="invalid-feedback">
              Please provide a valid NID.
            </div>
          </div>
          <div class="col-md-6">
            <label for="designation" class="form-label">Designation :</label>
            <input type="text" class="form-control" id="designation" name="designation" required>
            <div class="invalid-feedback">
              Please provide a valid designation.
            </div>
          </div>
          <div class="col-md-6">
            <label for="joiningDate" class="form-label">Joining Date :</label>
            <input type="date" class="form-control" id="joiningDate" name="joining_date" placeholder="Select Date"
              required>
            <div class="invalid-feedback">
              Please provide a valid joining date.
            </div>
          </div>
          <div class="col-md-6">
            <label for="endingDate" class="form-label">Ending Date :</label>
            <input type="date" class="form-control" id="endingDate" name="ending_date" placeholder="Select Date">
          </div>
          <div class="col-md-6">
            <label for="salary" class="form-label">Salary Per Month :</label>
            <input type="text" class="form-control" id="salary" name="salary" required>
            <div class="invalid-feedback">
              Please provide a valid salary amount.
            </div>
          </div>
          <div class="col-md-6">
            <label for="status" class="form-label">Status :</label>
            <input type="text" class="form-control" id="status" name="status" required>
            <div class="invalid-feedback">
              Please provide a valid status.
            </div>
          </div>
          <div class="col-md-6">
            <label for="employeePhoto" class="form-label">Employee Photo :</label>
            <input type="file" class="form-control" id="employeePhoto" name="employee_photo">
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
  $('#joiningDate').datepicker();
  $('#endingDate').datepicker();
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