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
            <label for="title" class="form-label">Title :</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
              value="{{ old('title') }}" required>
            @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="description" class="form-label">Description :</label>
            <textarea name="description" id="description"
              class="form-control @error('description') is-invalid @enderror" cols="30" rows="2" required></textarea>
            @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="meeting_date" class="form-label">Meeting Date :</label>
            <input name="meeting_date" type="date" class="form-control @error('meeting_date') is-invalid @enderror"
              id="meeting_date" value="{{ old('meeting_date') }}" required>
            @error('meeting_time')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="time" class="form-label">Meeting Time :</label>
            <input name="time" type="time" class="form-control @error('time') is-invalid @enderror" id="time"
              value="{{ old('time') }}" required>
            @error('meeting_time')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="attachment" class="form-label">Attachment:</label>
            <input name="attachment" type="file" class="form-control @error('attachment') is-invalid @enderror"
              id="attachment" value="{{ old('attachment') }}" required>
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