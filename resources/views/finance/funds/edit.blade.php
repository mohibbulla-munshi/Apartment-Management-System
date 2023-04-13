@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- fund entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Update Fund</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('fund.update', ['fund' => $fund->id]) }}" class="row g-3 needs-validation"
          novalidate>
          @csrf
          @method('PUT')
          <div class="col-md-6">
            <label for="selectOwnerName" class="form-label">Owner Name :</label>
            <select class="form-select" id="selectOwnerName" name="owner_name" required>
              <option selected disabled value="">--Select Owner--</option>
              <option value="jon do" {{ $fund->owner_name == 'jon do' ? 'selected' : '' }}>Jon Do</option>
              <option value="mr. helal" {{ $fund->owner_name == 'mr. helal' ? 'selected' : '' }}>MR. Helal</option>
              <option value="mr. belal" {{ $fund->owner_name == 'mr. belal' ? 'selected' : '' }}>Mr. Belal</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid Owner.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectMonth" class="form-label">Select Month :</label>
            <select class="form-select" id="selectMonth" name="month" required>
              <option selected disabled value="">--Select Month--</option>
              <option value="january" {{ $fund->month == 'january' ? 'selected' : '' }}>January</option>
              <option value="february" {{ $fund->month == 'february' ? 'selected' : '' }}>February</option>
              <option value="march" {{ $fund->month == 'march' ? 'selected' : '' }}>March</option>
              <option value="april" {{ $fund->month == 'april' ? 'selected' : '' }}>April</option>
              <option value="may" {{ $fund->month == 'may' ? 'selected' : '' }}>May</option>
              <option value="june" {{ $fund->month == 'june' ? 'selected' : '' }}>June</option>
              <option value="july" {{ $fund->month == 'july' ? 'selected' : '' }}>July</option>
              <option value="august" {{ $fund->month == 'august' ? 'selected' : '' }}>August</option>
              <option value="september" {{ $fund->month == 'september' ? 'selected' : '' }}>September</option>
              <option value="october" {{ $fund->month == 'october' ? 'selected' : '' }}>October</option>
              <option value="november" {{ $fund->month == 'november' ? 'selected' : '' }}>November</option>
              <option value="december" {{ $fund->month == 'december' ? 'selected' : '' }}>December</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="selectYear" class="form-label">Select Year :</label>
            <select class="form-select" id="selectYear" name="year" required>
              <option selected disabled value="">--Select Year--</option>
              <option selected disabled value="">--Select Year--</option>
              <option value="2023" {{ $fund->year == '2023' ? 'selected' : '' }}>2023</option>
              <option value="2022" {{ $fund->year == '2022' ? 'selected' : '' }}>2022</option>
              <option value="2021" {{ $fund->year == '2021' ? 'selected' : '' }}>2021</option>
              <option value="2020" {{ $fund->year == '2023' ? 'selected' : '' }}>2020</option>
              <option value="2019" {{ $fund->year == '2019' ? 'selected' : '' }}>2019</option>
              <option value="2018" {{ $fund->year == '2018' ? 'selected' : '' }}>2018</option>
              <option value="2017" {{ $fund->year == '2017' ? 'selected' : '' }}>2017</option>
              <option value="2016" {{ $fund->year == '2016' ? 'selected' : '' }}>2016</option>
              <option value="2015" {{ $fund->year == '2015' ? 'selected' : '' }}>2015</option>
              <option value="2014" {{ $fund->year == '2014' ? 'selected' : '' }}>2014</option>
              <option value="2013" {{ $fund->year == '2013' ? 'selected' : '' }}>2013</option>
              <option value="2012" {{ $fund->year == '2012' ? 'selected' : '' }}>2012</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid type.
            </div>
          </div>
          <div class="col-md-6">
            <label for="issueDate" class="form-label">Issue Date :</label>
            <input type="date" class="form-control" id="issueDate" name="date" value="{{ $fund->date }}" required>
            <div class="invalid-feedback">
              Please provide a valid Month.
            </div>
          </div>
          <div class="col-md-6">
            <label for="totalMonth" class="form-label">Total Amount :</label>
            <input type="text" class="form-control" id="totalMonth" name="total_amount"
              value="{{ $fund->total_amount }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label for="purpose">Purpose :</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="purpose"
              name="purpose">{{ $fund->purpose }}</textarea>
            <div class="valid-feedback">
              Looks good!
            </div>
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