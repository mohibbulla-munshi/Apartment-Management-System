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
        <form method="POST" action="{{ url('complaint/'.$complaint->id) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="{{ $complaint->user_id }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="category" class="form-label">category :</label>
            <input name="category" type="text" class="form-control" id="title" value="{{ $complaint->category }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="problem_detail" class="form-label">problem_detail :</label>
            <input name="problem_detail" type="text" class="form-control" id="problem_detail" value="{{ $complaint->problem_detail }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="date" class="form-label">date :</label>
            <input name="date" type="text" class="form-control" id="date" value="{{ $complaint->date }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="status" class="form-label">status:</label>
            <input name="status" type="text" class="form-control" id="status" value="{{ $complaint->status }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-12">
            <button class="btn btn-primary" type="submit">Update complaint</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
