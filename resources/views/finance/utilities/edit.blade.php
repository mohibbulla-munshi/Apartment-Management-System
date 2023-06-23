@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Bill</h3>
      </div>
      <div class="card-body">
      <form method="POST" action="{{ route('Utility.update', ['Utility' => $utility->id]) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
       
          <div class="col-md-6">
            <label for="floorNo" class="form-label">Floor No :</label>
            <select class="form-select" name = "floor_no" id="floorNo" required>
            @php $floors = get_floor(); @endphp
            @php foreach($floors as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp" @php if($utility->floor_no == $key){ echo 'selected="selected"';} @endphp > @php echo $value; @endphp</option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid Floor no.
            </div>
          </div>
          <div class="col-md-6">
            <label for="unitNo" class="form-label">Unit No :</label>
            <select class="form-select" name = "unit_no" id="unitNo" required>
            @php $units = get_unit(); @endphp
            @php foreach($units as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp" @php if($utility->unit_no == $key){ echo 'selected="selected"';} @endphp > @php echo $value; @endphp</option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid Unit no.
            </div>
          </div>
          <div class="col-md-6">
            <label for="ownerName" class="form-label">Owner Name :</label>
            <input type="text" class="form-control" name = "owner_name" id="ownerName"  value="{{ $utility->owner_name }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityMonth" class="form-label">Utility Month :</label>
            <select class="form-select" name = "utility_month" id="utilityMonth" required>
            @php $months = get_month(); @endphp
            @php foreach($months as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp" @php if($utility->utility_month == $key){ echo 'selected="selected"';} @endphp > @php echo $value; @endphp</option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityYear" class="form-label">Utility Year :</label>
            <select class="form-select" name = "utility_year" id="utilityYear" required>
            @php $years = get_year(); @endphp
            @php foreach($years as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp" @php if($utility->utility_year == $key){ echo 'selected="selected"';} @endphp > @php echo $value; @endphp</option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid Year.
            </div>
          </div>

          <div class="col-md-6">
            <label for="waterBill" class="form-label">Water Bill :</label>
            <input type="text" class="form-control fn_add_claculate" name = "water_bill" id="add_waterBill"  value="{{ $utility->water_bill }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="electricBill" class="form-label">Electric Bill :</label>
            <input type="text" class="form-control fn_add_claculate" name = "electric_bill" id="add_electricBill"  value="{{ $utility->electric_bill }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="gasBill" class="form-label">Gas Bill :</label>
            <input type="text" class="form-control fn_add_claculate" name = "gas_bill" id="add_gasBill"  value="{{ $utility->gas_bill }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="SecurityBill" class="form-label">Security Bill :</label>
            <input type="text" class="form-control fn_add_claculate" name = "security_bill" id="add_securityBill"  value="{{ $utility->security_bill }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="utilityBill" class="form-label">Utility Bill :</label>
            <input type="text" class="form-control fn_add_claculate" name = "utility_bill" id="add_utilityBill"  value="{{ $utility->utility_bill }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="otherBill" class="form-label">Other Bill :</label>
            <input type="text" class="form-control fn_add_claculate" name = "other_bill" id="add_otherBill"  value="{{ $utility->other_bill }}">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalRent" class="form-label">Total Rent :</label>
            <input type="text" class="form-control fn_add_claculate total_bill" name = "total_rent" id="add_totalRent"  value="{{ $utility->total_rent }}"  >
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="text" class="form-control" name = "issue_date" id="add_issueDate"  value="{{ $utility->issue_date }}" placeholder = "Select Date" required>
            <div class="invalid-feedback">
              Please provide a valid Date.
            </div>
          </div>
          <div class="col-12">
          <input type="hidden"  name = "id" id="id"  value="{{ $utility->id }}" required>
            <button class="btn btn-primary" type="submit">Update</button>
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
    $('#edit_bilDepositDate').datepicker();
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