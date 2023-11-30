@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addEmployeeSalary') }}
    </span>
    <!-- Bill entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <form method="POST" action="{{ route('employee_salaries.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="employee_name" class="form-label">Employee Name :</label>
            <select name="employee_name" class="form-select" id="employee_name" required>
              <option selected disabled value="">--Select Employee--</option>
              @forEach( $employeeNames as $employeeName )
              <option value="{{ $employeeName }}">{{ $employeeName }}</option>
              @endforEach
            </select>
            <div class="invalid-feedback">
              Please provide a valid employee_name.
            </div>
          </div>
          <div class="col-md-6">
            <label for="month" class="form-label">Salary Month :</label>
            <select name="salary_month" class="form-select" id="month" required>
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
            <label for="designation" class="form-label">Designation :</label>
            <input name="designation" type="text" class="form-control" id="designation" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="year" class="form-label">Salary Year :</label>
            <select name="salary_year" class="form-select" id="year" required>
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
            <label for="salary_per_month" class="form-label">Salary Per Month :</label>
            <input name="salary_per_month" type="number" class="form-control" id="salary_per_month" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="add_date" class="form-label">Issue Date :</label>
            <input name="issue_date" type="date" class="form-control" id="add_date" placeholder="Select Date" required>
            <div class="invalid-feedback">
              Please provide a valid date.
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

<!-- Showing Employee Salary List -->
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span class="text-center">
      {{ Breadcrumbs::render('employeeSalary') }}
    </span>
    <!-- Employee Salary List -->
    <table class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Employee Name</th>
          <th>Designation</th>
          <th>Salary Month</th>
          <th>Salary Year</th>
          <th>Salary Per Month</th>
          <th>Issue Date</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employeeSalaries as $employeeSalary)
        <tr>
          <td>{{ $employeeSalary->employee_name }}</td>
          <td>{{ $employeeSalary->designation }}</td>
          <td>{{ $employeeSalary->salary_month }}</td>
          <td>{{ $employeeSalary->salary_year }}</td>
          <td>{{ $employeeSalary->salary_per_month }}</td>
          <td>{{ \Carbon\Carbon::parse($employeeSalary->issue_date)->format('F j, Y') }}</td>
          <td>
            <a href="{{ url('employee-salary/'.$employeeSalary->id.'/edit') }}"
              class="btn btn btn-success rounded-0 float-end" type="submit">Edit</a>

            <form method="POST" action="{{ url('employee-salary/'.$employeeSalary->id) }}" class="float-end">
              @csrf
              @method('DELETE')
              <button class="btn btn btn-danger rounded-0" type="submit"><i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
      </tfoot>
    </table>
  </div>
</div>




<!-- ===date picker== -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


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

<!-- AJAX script to fetch designation and salary based on selected employee -->
<script>
  $(document).ready(function () {
    $('#employee_name').change(function () {
      var selectedEmployee = $(this).val();

      // Make an AJAX request to get employee details
      $.ajax({
        url: '/employee/' + selectedEmployee, // Adjust the URL based on your routes
        type: 'GET',
        dataType: 'json',
        success: function (data) {
          if (data.success) {
            $('#designation').val(data.data.designation);
            $('#salary_per_month').val(data.data.salary);
          } else {
            // Handle error, e.g., show an alert
            alert(data.message);
          }
        },
        error: function () {
          // Handle AJAX error, e.g., show an alert
          alert('Error fetching employee details.');
        }
      });
    });
  });
</script>

@endsection