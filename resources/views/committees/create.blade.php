@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addCommitteeMember') }}
    </span>
    <!-- Management Committee Entry Form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="card-body">
        <form method="POST" action="{{ route('committees.store') }}" class="row g-3 needs-validation"
          enctype="multipart/form-data" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="name" class="form-label">Member Name :</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">
              Please provide a valid member name.
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
            <label for="phone" class="form-label">Phone :</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
            <div class="invalid-feedback">
              Please provide a valid phone number.
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
            <label for="nid" class="form-label">NID :</label>
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
            <input type="date" class="form-control" id="joiningDate" name="joining_date" required>
            <div class="invalid-feedback">
              Please provide a valid joining date.
            </div>
          </div>
          <div class="col-md-6">
            <label for="endingDate" class="form-label">Ending Date :</label>
            <input type="date" class="form-control" id="endingDate" name="ending_date">
          </div>
          <div class="col-md-6">
            <label for="status" class="form-label">Status :</label>
            <input type="text" class="form-control" id="status" name="status" required>
            <div class="invalid-feedback">
              Please provide a valid status.
            </div>
          </div>
          <div class="col-md-6">
            <label for="committeePhoto" class="form-label">Committee Photo :</label>
            <input type="file" class="form-control" id="committeePhoto" name="committee_photo">
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