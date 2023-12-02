@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addBuilding') }}
    </span>
    <!-- building Setup Form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <form method="POST" action="{{ route('buildings.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <h2>Building Information</h2>
          <div class="col-md-6">
            <label for="name" class="form-label">* Name:</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
              value="{{ old('name') }}" required>
            <div class="invalid-feedback">
              {{ $errors->first('name') }}
            </div>
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">* Email:</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
              value="{{ old('email') }}" required>
            <div class="invalid-feedback">
              {{ $errors->first('email') }}
            </div>
          </div>

          <div class="col-md-6">
            <label for="contact_no" class="form-label">* Contact No:</label>
            <input name="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror"
              id="contact_no" value="{{ old('contact_no') }}" required>
            <div class="invalid-feedback">
              {{ $errors->first('contact_no') }}
            </div>
          </div>

          <div class="col-md-6">
            <label for="security_guard_mobile" class="form-label">Security Guard Mobile No:</label>
            <input name="security_guard_mobile" type="text" class="form-control" id="security_guard_mobile">
          </div>

          <div class="col-md-6">
            <label for="secretary_mobile" class="form-label">Secretary Mobile No:</label>
            <input name="secretary_mobile" type="text" class="form-control" id="secretary_mobile">
          </div>

          <div class="col-md-6">
            <label for="moderator_mobile" class="form-label">Moderator Mobile No:</label>
            <input name="moderator_mobile" type="text" class="form-control" id="moderator_mobile">
          </div>

          <div class="col-md-6">
            <label for="construction_year" class="form-label">Building Construction Year:</label>
            <select name="construction_year" class="form-select" id="year" required>
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
          </div>

          <div class="col-md-6">
            <label for="address" class="form-label">* Address:</label>
            <input name="address" type="text" class="form-control" id="address" required>
            <div class="invalid-feedback">
              {{ $errors->first('address') }}
            </div>
          </div>

          <div class="col-md-6">
            <label for="building_image" class="form-label">Building Image:</label>
            <input name="building_image" type="file" class="form-control" id="building_image">
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">* Status:</label>
            <select name="status" class="form-control" id="status" required>
              <option value="enable">Enable</option>
              <option value="disable">Disable</option>
            </select>
          </div>

          <h2>Builder Information</h2>
          <!-- Builder Information -->
          <div class="col-md-6">
            <label for="company_name" class="form-label">Company Name:</label>
            <input name="company_name" type="text" class="form-control" id="company_name">
          </div>

          <div class="col-md-6">
            <label for="company_phone" class="form-label">Company Phone No:</label>
            <input name="company_phone" type="text" class="form-control" id="company_phone">
          </div>

          <div class="col-md-6">
            <label for="company_address" class="form-label">Company Address:</label>
            <input name="company_address" type="text" class="form-control" id="company_address">
          </div>

          <div class="col-12">
            <label for="apartment_rules" class="form-label">Apartment Rules:</label>
            <textarea name="apartment_rules" class="form-control" id="apartment_rules" rows="4"></textarea>
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
      {{ Breadcrumbs::render('building') }}
    </span>
    <!-- Employee Salary List -->
    <table class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Contact No</th>
          <th>Address</th>
          <th>status</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($buildings as $building)
        <tr>
          <td>{{ $building->name }}</td>
          <td>{{ $building->email }}</td>
          <td>{{ $building->contact_no }}</td>
          <td>{{ $building->address }}</td>
          <td>{{ $building->status }}</td>
          <td>
            <a href="{{ url('employee-salary/'.$building->id.'/edit') }}"
              class="btn btn btn-success rounded-0 float-end" type="submit">Edit</a>

            <form method="POST" action="{{ url('employee-salary/'.$building->id) }}" class="float-end">
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
@endsection