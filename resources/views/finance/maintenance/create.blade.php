@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
        <div class="card-header">
          <h3>Add New Maintenance Cost</h3> 
        </div>
        <div class="card-body">
          <form class="row g-3 needs-validation" novalidate>
            
            <div class="col-md-6">
              <label for="date" class="form-label">Date :</label>
              <input type="date" class="form-control" id="date" required>
              <div class="invalid-feedback">
                Please provide a valid date.
              </div>
            </div>
            <div class="col-md-6">
              <label for="month" class="form-label">Month :</label>
              <select class="form-select" id="month" required>
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
              <label for="year" class="form-label">Year :</label>
              <select class="form-select" id="year" required>
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
              <label for="maintentanceTitle" class="form-label">Maintenance Title :</label>
              <input type="text" class="form-control" id="maintentanceTitle" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="amount" class="form-label">Amount :</label>
              <input type="text" class="form-control" id="amount" value="" required>
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