@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addutility') }}
    </span>
    <!-- Bill entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <form method="POST" action="{{ route('Utility.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="floorNo" class="form-label">Floor No :</label>
            <select class="form-select" name="floor_no" id="floorNo" type="text" required>
              <option selected disabled value="">--Select Floor--</option>
              @php $floors = get_floor(); @endphp
              @php foreach($floors as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp"> @php echo $value; @endphp </option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid Floor no.
            </div>
          </div>
          <div class="col-md-6">
            <label for="unitNo" class="form-label">Unit No :</label>
            <select class="form-select" type="number" name="unit_no" id="unitNo" required>
              <option selected disabled value="">--Select Unit--</option>
              @php $units = get_unit(); @endphp
              @php foreach($units as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp"> @php echo $value; @endphp </option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid Unit no.
            </div>
          </div>
          <div class="col-md-6">
            <label for="ownerName" class="form-label">Owner Name :</label>
            <input type="text" class="form-control" name="owner_name" id="ownerName" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityMonth" class="form-label">Utility Month :</label>
            <select class="form-select" type="text" name="utility_month" id="utilityMonth" required>
              <option selected disabled value="">--Select Utility Month--</option>
              @php $months = get_month(); @endphp
              @php foreach($months as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp"> @php echo $value; @endphp </option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityYear" class="form-label">Utility Year :</label>
            <select class="form-select" type="text" name="utility_year" id="utilityYear" required>
              <option selected disabled value="">--Select Utility Year--</option>
              @php $years = get_year(); @endphp
              @php foreach($years as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp"> @php echo $value; @endphp </option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid Year.
            </div>
          </div>

          <div class="col-md-6">
            <label for="waterBill" class="form-label">Water Bill :</label>
            <input type="number" class="form-control fn_add_claculate" name="water_bill" id="add_waterBill" value=""
              required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="electricBill" class="form-label">Electric Bill :</label>
            <input type="number" class="form-control fn_add_claculate" name="electric_bill" id="add_electricBill"
              value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="gasBill" class="form-label">Gas Bill :</label>
            <input type="number" class="form-control fn_add_claculate" name="gas_bill" id="add_gasBill" value=""
              required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="SecurityBill" class="form-label">Security Bill :</label>
            <input type="number" class="form-control fn_add_claculate" name="security_bill" id="add_securityBill"
              value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityBill" class="form-label">Utility Bill :</label>
            <input type="number" class="form-control fn_add_claculate" name="utility_bill" id="add_utilityBill" value=""
              required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="otherBill" class="form-label">Other Bill :</label>
            <input type="number" class="form-control fn_add_claculate" name="other_bill" id="add_otherBill" value="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalRent" class="form-label">Total Rent :</label>
            <input type="number" class="form-control fn_add_claculate total_bill" name="total_rent" id="add_totalRent"
              value="">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="text" class="form-control" name="issue_date" id="add_issueDate" placeholder="Select Date"
              required>
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


<!-- ===date picker== -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<script type="text/javascript">
  $('#add_issueDate').datepicker();
</script>

<script type="text/javascript">

  $('.fn_add_claculate').on('keyup', function () {

    var warter_bill = $('#add_waterBill').val() ? parseFloat($('#add_waterBill').val()) : 0;
    var electicity_bill = $('#add_electricBill').val() ? parseFloat($('#add_electricBill').val()) : 0;
    var gass_bill = $('#add_gasBill').val() ? parseFloat($('#add_gasBill').val()) : 0;
    var security_bill = $('#add_securityBill').val() ? parseFloat($('#add_securityBill').val()) : 0;
    var utility_bill = $('#add_utilityBill').val() ? parseFloat($('#add_utilityBill').val()) : 0;
    var other_bill = $('#add_otherBill').val() ? parseFloat($('#add_otherBill').val()) : 0;

    $('.total_bill').val(warter_bill + electicity_bill + gass_bill + security_bill + utility_bill + other_bill);

  });

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