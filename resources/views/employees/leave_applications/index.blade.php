@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
    {{ Breadcrumbs::render('employeeLeaveRequest') }}
    </span>

    <!-- Employee Table -->
    <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
      <thead>
        <tr>
          <th>Requested Date</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Days of Leave</th>
          <th>Leave Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employeeLeaves as $employeeLeave)
        <tr>
          <td>{{ $employeeLeave->requested_date }}</td>
          <td>{{ $employeeLeave->name }}</td>
          <td>{{ $employeeLeave->email }}</td>
          <td>{{ $employeeLeave->email }}</td>
          <td>{{ $employeeLeave->designation }}</td>
          <td>
            <a href="{{ url('employeeLeaves/'.$employeeLeave->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit"><i class="fas fa-edit"></i></a>
            <!-- Font Awesome Edit Icon -->
            <form action="" class="float-end" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn btn-danger rounded-0" type="submit"><i class="fas fa-trash-alt"></i></button>
              <!-- Font Awesome Delete Icon -->
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
      <tr>
          <th>Requested Date</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Days of Leave</th>
          <th>Leave Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection
