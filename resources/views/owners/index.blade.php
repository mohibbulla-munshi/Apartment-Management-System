@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('owners') }}
    </span>

    <!-- Owner and Owner Table -->
    <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Owner Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Present Address</th>
          <th>Owner Unit</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($owners as $owner)
        <tr>
          <td>
            <!-- Add image display logic here -->
          </td>
          <td>
            {{ $owner->owner_name }}
          </td>
          <td>
            {{ $owner->email }}
          </td>
          <td>
            {{ $owner->contact_no }}
          </td>
          <td>
            {{ $owner->present_address }}
          </td>
          <td>
            {{ $owner->owner_unit_no }}
          </td>
          <td>
            <a href="{{ url('owners/'.$owner->id.'/edit') }}" class="btn btn-success rounded-0 float-end" type="submit">
              <i class="fas fa-edit"></i>
            </a>
            <form action="{{ route('owners.destroy', $owner->id) }}" class="float-end" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger rounded-0" type="submit">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <th>Image</th>
          <th>Owner Name</th>
          <th>Email</th>
          <th>Contact</th>
          <th>Present Address</th>
          <th>Owner Unit</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection