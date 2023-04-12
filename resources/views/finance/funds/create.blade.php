@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!--  Fund Entry Form  -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Fund</h3>
      </div>
      <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-md-6">
            <label for="selectOwnerName" class="form-label">Owner Name :</label>
            <select class="form-select" id="selectOwnerName" required>
              <option selected disabled value="">--Select Owner--</option>
              <option>Jon Do</option>
              <option>MR. Helal</option>
              <option>Mr. Belal</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Owner.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectMonth" class="form-label">Select Month :</label>
            <select class="form-select" id="selectMonth" required>
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
            <label for="selectYear" class="form-label">Select Year :</label>
            <select class="form-select" id="selectYear" required>
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
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="date" class="form-control" id="issueDate" required>
            <div class="invalid-feedback">
              Please provide a valid Month.
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalMonth" class="form-label">Total Amount :</label>
            <input type="text" class="form-control" id="totalMonth" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="purpose">Purpose :</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="purpose"></textarea>
            <div class="valid-feedback">
              Looks good!
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