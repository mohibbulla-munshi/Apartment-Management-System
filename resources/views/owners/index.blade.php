@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('owners') }}
    </span>

    <!-- Owner and Owner Table -->
    <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Owner Name</th>
          <th>Contact</th>
          <th>Owner Unit</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($owners as $owner)
        <tr>
          <td>
              <img src="{{ asset('storage') .'/'. $owner->owner_image }}" alt="" style="width: 50px; height: 50px; border-radius: 50%;">    
          </td>
          <td>
            {{ $owner->owner_name }}
          </td>
          <td>
            {{ $owner->contact_no }}
          </td>
          <td>
            {{ $owner->owner_unit_no }}
          </td>
          <td>
            <form action="{{ route('owners.destroy', ['owner' => $owner->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger rounded-0 float-end" onclick="return confirm ('Are you sure?')"
                type="submit">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>

            <a href="{{ route('owners.edit', ['owner' => $owner->id]) }}" class="btn btn-success rounded-0 float-end" type="submit">
              <i class="fas fa-edit"></i>
            </a>

            <a href="{{ route('owners.show', ['owner' => $owner->id]) }}" class="btn btn-primary rounded-0 float-end">
              <i class="fas fa-eye"></i>
            </a>    
          </td>
        </tr>
        @endforeach

      </tbody>
      
    </table>
  </div>
</div>
@endsection