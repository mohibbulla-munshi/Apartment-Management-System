@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <span>
      {{ Breadcrumbs::render('addOwner') }}
    </span>
    <!-- User Profile info entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">
        <form method="POST" action="{{ route('complaint.store') }}" class="row g-3 needs-validation" novalidate>
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

          <div class="col-md-12">
            <label for="problem_detail" class="form-label">Description :</label>
            <textarea class="form-control @error('problem_detail') is-invalid @enderror" name="problem_detail"
              id="problem_detail" cols="10" rows="2" required>{{ old('problem_detail') }}</textarea>
            @error('problem_detail')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="date" class="form-label">Date :</label>
            <input name="date" type="date" class="form-control @error('date') is-invalid @enderror" id="date"
              value="{{ old('date') }}" required>
            @error('date')
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