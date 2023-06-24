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
        <h3>Update Profile</h3>
      </div>

      <div class="card-body">
        <form method="POST" action="{{ url('meeting/'.$meeting->id) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="{{ $meeting->user_id }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="title" class="form-label">title :</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $meeting->title }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="description" class="form-label">description :</label>
            <input name="description" type="text" class="form-control" id="description" value="{{ $meeting->description }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="meeting_time" class="form-label">meeting_time :</label>
            <input name="meeting_time" type="text" class="form-control" id="meeting_time" value="{{ $meeting->meeting_time }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="attachment" class="form-label">attachment:</label>
            <input name="attachment" type="text" class="form-control" id="attachment" value="{{ $meeting->attachment }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-12">
            <button class="btn btn-primary" type="submit">Update Meeting</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
