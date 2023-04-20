@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- User Profile info entry form -->
    <div class="card">
      @if ($errors->any())

      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach

      </ul>

      @endif
      <div class="card-header">
        <h3>Add New Profile</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('profile') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email :</label>
            <input name="email" type="text" class="form-control" id="email" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="name" class="form-label">Name :</label>
            <input name="name" type="text" class="form-control" id="name" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="dob" class="form-label">Date Of Birth :</label>
            <input name="dob" type="date" class="form-control" id="dob" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="designation" class="form-label">Designation:</label>
            <input name="designation" type="text" class="form-control" id="designation" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="mobile_number" class="form-label"> Mobile number :</label>
            <input name="mobile_number" type="text" class="form-control" id="mobile_number" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="additional_mobile_number" class="form-label"> Additional mobilenumber :</label>
            <input name="additional_mobile_number" type="text" class="form-control" id="additional_mobile_number" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="passport" class="form-label">Passport no :</label>
            <input name="passport" type="text" class="form-control" id="passport" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="nid" class="form-label">NID no :</label>
            <input name="nid" type="text" class="form-control" id="nid" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="nationality" class="form-label">Nationality :</label>
            <input name="nationality" type="text" class="form-control" id="nationality" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="gender" class="form-label">Gender :</label>
            <input name="gender" type="text" class="form-control" id="gender" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="permanent_address" class="form-label">Permanent address :</label>
            <input name="permanent_address" type="text" class="form-control" id="permanent_address" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">status :</label>
            <input name="status" type="text" class="form-control" id="status" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="image_path" class="form-label">image :</label>
            <input name="image_path" type="text" class="form-control" id="image_path" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-12">
            <label for="additional_info">Additional Info</label>
            <textarea name="additional_info" class="form-control" placeholder="comment here" id="additional_info"></textarea>
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


@endsection