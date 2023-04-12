@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Bill entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Maintenance Cost</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('maintenance.update', ['maintenance' => $MaintenanceCost->id]) }}"
          class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="date" class="form-label">Date :</label>
            <input name="date" type="date" class="form-control" id="date" value="{{ $MaintenanceCost->date }}" required>
            <div class="invalid-feedback">
              Please provide a valid date.
            </div>
          </div>
          <div class="col-md-6">
            <label for="month" class="form-label">Month :</label>
            <select name="month" class="form-select" id="month" required>
              <option selected disabled value="">--Select Month--</option>
              <option value="january" {{ $MaintenanceCost->month == 'january' ? 'selected' : '' }}>January</option>
              <option value="february" {{ $MaintenanceCost->month == 'february' ? 'selected' : '' }}>February</option>
              <option value="march" {{ $MaintenanceCost->month == 'march' ? 'selected' : '' }}>March</option>
              <option value="april" {{ $MaintenanceCost->month == 'april' ? 'selected' : '' }}>April</option>
              <option value="may" {{ $MaintenanceCost->month == 'may' ? 'selected' : '' }}>May</option>
              <option value="june" {{ $MaintenanceCost->month == 'june' ? 'selected' : '' }}>June</option>
              <option value="july" {{ $MaintenanceCost->month == 'july' ? 'selected' : '' }}>July</option>
              <option value="august" {{ $MaintenanceCost->month == 'august' ? 'selected' : '' }}>August</option>
              <option value="september" {{ $MaintenanceCost->month == 'september' ? 'selected' : '' }}>September
              </option>
              <option value="october" {{ $MaintenanceCost->month == 'october' ? 'selected' : '' }}>October</option>
              <option value="november" {{ $MaintenanceCost->month == 'november' ? 'selected' : '' }}>November</option>
              <option value="december" {{ $MaintenanceCost->month == 'december' ? 'selected' : '' }}>December</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="year" class="form-label">Year :</label>
            <select name="year" class="form-select" id="year" required>
              <option selected disabled value="">--Select Year--</option>
              <option value="2023" {{ $MaintenanceCost->year == '2023' ? 'selected' : '' }}>2023</option>
              <option value="2022" {{ $MaintenanceCost->year == '2022' ? 'selected' : '' }}>2022</option>
              <option value="2021" {{ $MaintenanceCost->year == '2021' ? 'selected' : '' }}>2021</option>
              <option value="2020" {{ $MaintenanceCost->year == '2023' ? 'selected' : '' }}>2020</option>
              <option value="2019" {{ $MaintenanceCost->year == '2019' ? 'selected' : '' }}>2019</option>
              <option value="2018" {{ $MaintenanceCost->year == '2018' ? 'selected' : '' }}>2018</option>
              <option value="2017" {{ $MaintenanceCost->year == '2017' ? 'selected' : '' }}>2017</option>
              <option value="2016" {{ $MaintenanceCost->year == '2016' ? 'selected' : '' }}>2016</option>
              <option value="2015" {{ $MaintenanceCost->year == '2015' ? 'selected' : '' }}>2015</option>
              <option value="2014" {{ $MaintenanceCost->year == '2014' ? 'selected' : '' }}>2014</option>
              <option value="2013" {{ $MaintenanceCost->year == '2013' ? 'selected' : '' }}>2013</option>
              <option value="2012" {{ $MaintenanceCost->year == '2012' ? 'selected' : '' }}>2012</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="maintentanceTitle" class="form-label">Maintenance Title :</label>
            <input name="maintenance_title" type="text" class="form-control" id="maintentanceTitle"
              value="{{ $MaintenanceCost->maintenance_title }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="amount" class="form-label">Amount :</label>
            <input name="amount" type="number" class="form-control" id="amount" value="{{ $MaintenanceCost->amount }}"
              required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          {{-- <div class="col-md-12">
            <label for="details">Details</label>
            <textarea name="details" value="{{ $MaintenanceCost->details }}" class="form-control"
              placeholder="Leave a comment here" id="details"></textarea>
            <div class="valid-feedback">
              Looks good!
            </div> --}}
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
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