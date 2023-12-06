@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('committees') }}
    </span>

    <!-- committee Table -->
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
        @foreach ($committees as $committee)
        <tr>
          <td>
            <img src="{{ asset('storage') .'/'. $committee->committee_photo }}" alt="{{ $committee->committee_photo }}" style="width: 50px; height: 50px; border-radius: 50%;">
          </td>
          <td>{{ $committee->name }}</td>
          <td>{{ $committee->email }}</td>
          <td>{{ $committee->contact }}</td>
          <td>{{ $committee->designation }}</td>
          <td>{{ $committee->joining_date }}</td>
          <td>
            <a href="{{ url('committees/'.$committee->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit"><i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('committees.destroy', $committee->id) }}" class="float-end" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn btn-danger rounded-0" type="submit"><i class="fas fa-trash-alt"></i>
              </button>
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