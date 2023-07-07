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
        <h3>Add New Meeting Profile</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('meeting.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="title" class="form-label">title :</label>
            <input name="title" type="text" class="form-control" id="title" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="description" class="form-label">description :</label>
            <input name="description" type="text" class="form-control" id="description" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="meeting_time" class="form-label">meeting_time :</label>
            <input name="meeting_time" type="text" class="form-control" id="meeting_time" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="attachment" class="form-label">attachment:</label>
            <input name="attachment" type="text" class="form-control" id="attachment" value="" required>
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
