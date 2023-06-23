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
        <h3>Add New Flat Profile</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('flat.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="flat_owner_id" class="form-label">flat_owner_id :</label>
            <input name="flat_owner_id" type="text" class="form-control" id="email" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="flat_resident_id" class="form-label">flat_resident_id :</label>
            <input name="flat_resident_id" type="text" class="form-control" id="flat_resident_id" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="flat_name" class="form-label">flat_name :</label>
            <input name="flat_name" type="text" class="form-control" id="dob" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="flat_floor_no" class="form-label">flat_floor_no:</label>
            <input name="flat_floor_no" type="text" class="form-control" id="flat_floor_no" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="flat_rent" class="form-label"> flat_rent :</label>
            <input name="flat_rent" type="text" class="form-control" id="flat_rent" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="flat_size" class="form-label"> flat_size :</label>
            <input name="flat_size" type="text" class="form-control" id="flat_size" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="flat_details" class="form-label">flat_details:</label>
            <input name="flat_details" type="text" class="form-control" id="flat_details" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="additional_info" class="form-label">additional_info :</label>
            <input name="additional_info" type="text" class="form-control" id="additional_info" value="" required>
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
