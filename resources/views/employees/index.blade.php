@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('employees') }}
    </span>

    <!-- Employee Table -->
    <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Designation</th>
          <th>Joining Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
        <tr>
          <td>
            <img src="{{ asset('storage') .'/'. $employee->employee_photo }}" alt="{{ $employee->employee_photo }}" style="width: 50px; height: 50px; border-radius: 50%;">
          </td>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->contact }}</td>
          <td>{{ $employee->designation }}</td>
          <td>{{ $employee->joining_date }}</td>
          <td>
            <a href="{{ url('employees/'.$employee->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit"><i class="fas fa-edit"></i>
              <!-- Font Awesome Edit Icon --></a>
            <form action="{{ route('employees.destroy', $employee->id) }}" class="float-end" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn btn-danger rounded-0" type="submit"><i class="fas fa-trash-alt"></i>
                <!-- Font Awesome Delete Icon --></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Designation</th>
          <th>Joining Date</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection