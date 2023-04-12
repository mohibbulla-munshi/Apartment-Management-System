@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Owner Utility</h3>
      </div>
      <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-6">
            <label for="floorNo" class="form-label">Floor No :</label>
            <select class="form-select" id="floorNo" required>
              <option selected disabled value="">--Select Floor--</option>
              <option>First</option>
              <option>Second</option>
              <option>Third</option>
              <option>fourth</option>
              <option>fifth</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Floor no.
            </div>
          </div>
          <div class="col-md-6">
            <label for="unitNo" class="form-label">Unit No :</label>
            <select class="form-select" id="unitNo" required>
              <option selected disabled value="">--Select Unit--</option>
              <option>A1</option>
              <option>B1</option>
              <option>C1</option>
              <option>C2</option>
              <option>D1</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Unit no.
            </div>
          </div>
          <div class="col-md-6">
            <label for="ownerName" class="form-label">Owner Name :</label>
            <input type="text" class="form-control" id="ownerName" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityMonth" class="form-label">Utility Month :</label>
            <select class="form-select" id="utilityMonth" required>
              <option selected disabled value="">--Select Utility Month--</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityYear" class="form-label">Utility Year :</label>
            <select class="form-select" id="utilityYear" required>
              <option selected disabled value="">--Select Utility Year--</option>
              <option>2023</option>
              <option>2022</option>
              <option>2021</option>
              <option>2020</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
              <option>2013</option>
              <option>2012</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Year.
            </div>
          </div>
          <div class="col-md-6">
            <label for="waterBill" class="form-label">Water Bill :</label>
            <input type="text" class="form-control" id="waterBill" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="electricBill" class="form-label">Electric Bill :</label>
            <input type="text" class="form-control" id="electricBill" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="gasBill" class="form-label">Gas Bill :</label>
            <input type="text" class="form-control" id="gasBill" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="SecurityBill" class="form-label">Security Bill :</label>
            <input type="text" class="form-control" id="SecurityBill" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityBill" class="form-label">Utility Bill :</label>
            <input type="text" class="form-control" id="utilityBill" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="otherBill" class="form-label">Other Bill :</label>
            <input type="text" class="form-control" id="otherBill" value="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalRent" class="form-label">Total Rent :</label>
            <input type="text" class="form-control" id="totalRent" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="date" class="form-control" id="issueDate" required>
            <div class="invalid-feedback">
              Please provide a valid Date.
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