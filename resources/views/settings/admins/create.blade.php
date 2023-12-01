@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
      <!-- Breadcrumbs -->
      <span>
          {{ Breadcrumbs::render('AddAdminSetup') }}
      </span>
      <!-- Admin Setup Form -->
      <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
          <div class="card-body">
              <form method="POST" action="{{ route('admin_setup.store') }}" class="row g-3 needs-validation" novalidate>
                  @csrf

                  <div class="col-md-6">
                      <label for="name" class="form-label">Name:</label>
                      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                          value="{{ old('name') }}" required>
                      <div class="invalid-feedback">
                          {{ $errors->first('name') }}
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label for="email" class="form-label">Email (Must be unique):</label>
                      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                          value="{{ old('email') }}" required>
                      <div class="invalid-feedback">
                          {{ $errors->first('email') }}
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label for="contact_no" class="form-label">Contact No (With Country Code):</label>
                      <input name="contact_no" type="text" class="form-control @error('contact_no') is-invalid @enderror"
                          id="contact_no" value="{{ old('contact_no') }}" required>
                      <div class="invalid-feedback">
                          {{ $errors->first('contact_no') }}
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label for="password" class="form-label">Password:</label>
                      <input name="password" type="password"
                          class="form-control @error('password') is-invalid @enderror" id="password" value="" required>
                      <div class="invalid-feedback">
                          {{ $errors->first('password') }}
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label for="photo" class="form-label">Photo:</label>
                      <input name="photo" type="file" class="form-control @error('photo') is-invalid @enderror" id="photo">
                      <div class="invalid-feedback">
                          {{ $errors->first('photo') }}
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
      {{ Breadcrumbs::render('adminSetupList') }}
    </span>
    <!-- Employee Salary List -->
    <table class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($admins as $admin)
        <tr>
          <td>{{ $admin->name }}</td>
          <td>{{ $admin->email }}</td>
          <td>{{ $admin->contact_no }}</td>
          <td>
            <a href="{{ url('employee-salary/'.$admin->id.'/edit') }}"
              class="btn btn btn-success rounded-0 float-end" type="submit">Edit</a>

            <form method="POST" action="{{ url('employee-salary/'.$admin->id) }}" class="float-end">
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
