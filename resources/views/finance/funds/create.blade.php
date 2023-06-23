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
        <form method="POST" action="{{ route('fund.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="selectOwnerName" class="form-label">Owner Name :</label>
            <select class="form-select" id="selectOwnerName" name="owner_name" required>
              <option selected disabled value="">--Select Owner--</option>
              <option value="jon do">Jon Do</option>
              <option value="mr. helal">MR. Helal</option>
              <option value=" mr. belal">Mr. Belal</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Owner.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectMonth" class="form-label">Select Month :</label>
            <select class="form-select" id="selectMonth" name="month" required>
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
            <label for="selectYear" class="form-label">Select Year :</label>
            <select class="form-select" id="selectYear" name="year" required>
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
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="text" class="form-control" id="add_issueDate" name="date" placeholder ="Select Date" required>
            <div class="invalid-feedback">
              Please provide a valid Month.
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalMonth" class="form-label">Total Amount :</label>
            <input type="text" class="form-control" id="totalMonth" name="total_amount" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="purpose">Purpose :</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="purpose" name="purpose"></textarea>
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

<!-- ===date picker== -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script type="text/javascript">
    $('#add_issueDate').datepicker();
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