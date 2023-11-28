@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addMeeting') }}
    </span>
    <!-- User Profile info entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <form method="POST" action="{{ route('meeting.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" id="user_id" value="{{ old('user_id') }}" required>
            @error('user_id')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="title" class="form-label">Title :</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" required>
            @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="description" class="form-label">Description :</label>
            <input name="description" type="text" class="form-control @error('description') is-invalid @enderror" id="description" value="{{ old('description') }}" required>
            @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="meeting_time" class="form-label">Meeting Time :</label>
            <input name="meeting_time" type="text" class="form-control @error('meeting_time') is-invalid @enderror" id="meeting_time" value="{{ old('meeting_time') }}" required>
            @error('meeting_time')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="attachment" class="form-label">Attachment:</label>
            <input name="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror" id="attachment" value="{{ old('attachment') }}" required>
            @error('attachment')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
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
