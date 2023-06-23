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
        <form method="POST" action="{{ route('bill.update', ['bill' => $bill->id]) }}" class="row g-3 needs-validation"
          novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="selectBillType" class="form-label">Select Bill Type :</label>
            <select name="bill_type" class="form-select" id="selectBillType" required>
              <option selected disabled value="">--Select Type--</option>
              <option value="gas" {{ $bill->bill_type == 'gas' ? 'selected' : '' }}>Gas</option>
              <option value="water" {{ $bill->bill_type == 'water' ? 'selected' : '' }}>Water</option>
              <option value="electricity" {{ $bill->bill_type == 'electricity' ? 'selected' : '' }}>Electricity</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="bilDepositDate" class="form-label">Bill Deposit Date :</label>
            <input name="bill_deposit_date" type="date" class="form-control" id="edit_bilDepositDate"
              value="{{ $bill->bill_deposit_date }}" required>
            <div class="invalid-feedback">
              Please provide a valid Month.
            </div>
          </div>
          <div class="col-md-6">
            <label for="billMonth" class="form-label">Bill Month :</label>
            <select name="bill_month" class="form-select" id="bill_month" required>
            @php $months = get_month(); @endphp
            @php foreach($months as $key=>$value){ @endphp
              <option value="@php echo $key; @endphp" @php if($bill->bill_month == $key){ echo 'selected="selected"';} @endphp > @php echo $value; @endphp</option>
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
              <option value="2023" {{ $bill->bill_year == 2023 ? 'selected' : '' }}>2023</option>
              <option value="2022" {{ $bill->bill_year == 2022 ? 'selected' : '' }}>2022</option>
              <option value="2021" {{ $bill->bill_year == 2021 ? 'selected' : '' }}>2021</option>
              <option value="2020" {{ $bill->bill_year == 2023 ? 'selected' : '' }}>2020</option>
              <option value="2019" {{ $bill->bill_year == 2019 ? 'selected' : '' }}>2019</option>
              <option value="2018" {{ $bill->bill_year == 2018 ? 'selected' : '' }}>2018</option>
              <option value="2017" {{ $bill->bill_year == 2017 ? 'selected' : '' }}>2017</option>
              <option value="2016" {{ $bill->bill_year == 2016 ? 'selected' : '' }}>2016</option>
              <option value="2015" {{ $bill->bill_year == 2015 ? 'selected' : '' }}>2015</option>
              <option value="2014" {{ $bill->bill_year == 2014 ? 'selected' : '' }}>2014</option>
              <option value="2013" {{ $bill->bill_year == 2013 ? 'selected' : '' }}>2013</option>
              <option value="2012" {{ $bill->bill_year == 2012 ? 'selected' : '' }}>2012</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalMonth" class="form-label">Total Amount :</label>
            <input name="total_amount" type="text" class="form-control" id="totalMonth"
              value="{{ $bill->total_amount }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="depositBankName" class="form-label">Deposit Bank Name :</label>
            <input name="deposit_bank_name" type="text" class="form-control" id="depositBankName"
              value="{{ $bill->deposit_bank_name }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="details">Details</label>
            <textarea name="details" class="form-control" value="{{ $bill->details }}"
              placeholder="Leave a comment here" id="details"></textarea>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-12">
          <input name="id" type="hidden" class="form-control" id="id" value="{{ $bill->id }}">
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