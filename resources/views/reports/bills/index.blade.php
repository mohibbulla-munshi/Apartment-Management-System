@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Rent Collection Report</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('bill.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="selectFloor" class="form-label">Select Floor :</label>
            <select name="floor" class="form-select" id="selectFloor" required>
              <option selected disabled value="">--Select Floor--</option>
              <option value="1st Floor">1st Floor</option>
              <option value="2nd Floor">2nd Floor</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectUnit" class="form-label">Select Unit :</label>
            <select name="unit" class="form-select" id="selectUnit" required>
              <option selected disabled value="">--Select Year--</option>
              <option value="A1">A1</option>
              <option value="B1">B1</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectMonth" class="form-label">Select Month :</label>
            <select name="bill_month" class="form-select" id="selectMonth" required>
              <option selected disabled value="">--Select Month--</option>
              <option value="january">January</option>
              <option value="february">February</option>
              <option value="march">March</option>
              <option value="april">April</option>
              <option value="may">May</option>
              <option value="june">June</option>
              <option value="july">July</option>
              <option value="august">August</option>
              <option value="september">September</option>
              <option value="october">October</option>
              <option value="november">November</option>
              <option value="december">December</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectMonth" class="form-label">Select Year :</label>
            <select name="bill_year" class="form-select" id="selectMonth" required>
              <option selected disabled value="">--Select Year--</option>
              <option value="2023">2023</option>
              <option value="2022">2022</option>
              <option value="2021">2021</option>
              <option value="2020">2020</option>
              <option value="2019">2019</option>
              <option value="2018">2018</option>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="paymentStatus" class="form-label">Payment Status :</label>
            <select name="payment_status" class="form-select" id="paymentStatus" required>
              <option selected disabled value="">--Select --</option>
              <option value="paid">Paid</option>
              <option value="due">due</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
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