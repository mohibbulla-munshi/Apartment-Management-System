@extends('user_dashboard.layout.master')
@section('content')

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Bill</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('bill.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="selectBillType" class="form-label">Select Bill Type :</label>
            <select name="bill_type" class="form-select" id="selectBillType" required>
              <option selected disabled value="">--Select Type--</option>
              <option value="gas">Gas</option>
              <option value="water">Water</option>
              <option value="electricity">Electricity</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="bilDepositDate" class="form-label">Bill Deposit Date :</label>
            <input name="bill_deposit_date" type="text"  class="form-control" id="add_bilDepositDate" placeholder ="Select Date" required>
            <div class="invalid-feedback">
              Please provide a valid Month.
            </div>
          </div>
          <div class="col-md-6">
            <label for="billMonth" class="form-label">Bill Month :</label>
            <select name="bill_month" class="form-select" id="bill_month" required>
            @php $months = get_month(); @endphp
            @php foreach($months as $key=>$value){ @endphp
                    <option value="@php echo $key; @endphp" > @php echo $value; @endphp </option>
              @php } @endphp
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          
          <div class="col-md-6">
            <label for="billYear" class="form-label">Bill Year :</label>
            <select name="bill_year" class="form-select" id="billYear" required>
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
            <label for="totalMonth" class="form-label">Total Amount :</label>
            <input name="total_amount" type="text" class="form-control" id="totalMonth" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="depositBankName" class="form-label">Deposit Bank Name :</label>
            <input name="deposit_bank_name" type="text" class="form-control" id="depositBankName" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="details">Details</label>
            <textarea name="details" class="form-control" placeholder="Leave a comment here" id="details"></textarea>
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
    $('#add_bilDepositDate').datepicker();
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
