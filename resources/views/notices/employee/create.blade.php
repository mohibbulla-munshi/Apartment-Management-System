@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addEmployeeNotice') }}
    </span>
    <!-- User Profile info entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded">
      <div class="card-body">
        <form method="POST" action="{{ route('employee.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
            <label for="title" class="form-label">Notice Title :</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
              value="{{ old('title') }}" required>
            @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="meeting_date" class="form-label">Notice Date :</label>
            <input name="meeting_date" type="date" class="form-control @error('meeting_date') is-invalid @enderror"
              id="meeting_date" value="{{ old('meeting_date') }}" required>
            @error('meeting_time')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">Notice Status :</label>
            <!-- Replace this input with your actual input or select element for notice status -->
            <input name="status" type="text" class="form-control @error('status') is-invalid @enderror" id="status"
              value="{{ old('status') }}" required>
            @error('status')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="description" class="form-label">Notice Description :</label>
            <textarea name="description" id="description"
              class="form-control @error('description') is-invalid @enderror" cols="30" rows="2" required></textarea>
            @error('description')
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

<!-- Showing Notices -->
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span class="text-center">
      {{ Breadcrumbs::render('employeeNotice') }}
    </span>
    <!-- Own Working Space -->
    <table class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Notice Title</th>
          <th>Notice Status</th>
          <th>Notice Date</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employeeNotices as $employeeNotice)
        <tr>
          <td>{{ $employeeNotice->title }}</td>
          <td>{{ $employeeNotice->status }}</td>
          <td>{{ \Carbon\Carbon::parse($employeeNotice->meeting_date)->format('F j, Y') }}</td>
          <td>
            <a href="{{ url('meeting/'.$employeeNotice->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit">Edit</a>

            <form method="POST" action="{{ url('meeting/'.$employeeNotice->id) }}" class="float-end">
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