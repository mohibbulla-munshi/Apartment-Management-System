@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
        <div class="card-header">
          Add New Maintenance Cost 
        </div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
              <label for="selectBillType" class="form-label">Select Bill Type :</label>
              <select class="form-select" id="selectBillType" required>
                <option selected disabled value="">--Select Type--</option>
                <option>Gas</option>
                <option>Water</option>
                <option>Electricity</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid type.
              </div>
            </div>
            <div class="col-md-6">
              <label for="bilDepositDate" class="form-label">Bill Deposit Date :</label>
              <input type="date" class="form-control" id="bilDepositDate" required>
              <div class="invalid-feedback">
                Please provide a valid Month.
              </div>
            </div>
            <div class="col-md-6">
              <label for="billMonth" class="form-label">Bill Month :</label>
              <select class="form-select" id="billMonth" required>
                <option selected disabled value="">--Select Month--</option>
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
              <label for="billMonth" class="form-label">Bill Year :</label>
              <select class="form-select" id="billMonth" required>
                <option selected disabled value="">--Select Year--</option>
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
                Please select a valid type.
              </div>
            </div>
            <div class="col-md-6">
              <label for="totalMonth" class="form-label">Total Amount :</label>
              <input type="text" class="form-control" id="totalMonth" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="depositBankName" class="form-label">Deposit Bank Name :</label>
              <input type="text" class="form-control" id="depositBankName" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12">
              <label for="details">Details</label>
              <textarea class="form-control" placeholder="Leave a comment here" id="details"></textarea>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
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