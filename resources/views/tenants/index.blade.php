@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('tenants') }}
    </span>

    <!-- Tenant Table -->
    <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Tenant Name</th>
          <th>Contact</th>
          <th>Rented Unit No</th>
          <th>Advance Payment</th>
          <th>Payment Per Month</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tenants as $tenant)
        <tr>
          <td>
            <img src="{{ asset('storage/tenant_photos' . $tenant->tenant_photo) }}" alt="{{ $tenant->name }}"
              style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
          </td>
          <td>{{ $tenant->name }}</td>
          <td>{{ $tenant->contact }}</td>
          <td>{{ $tenant->available_unit_no }}</td>
          <td>{{ $tenant->advance_rent }}</td>
          <td>{{ $tenant->rent_per_month }}</td>
          <td>{{ $tenant->status }}</td>
          <td>
            <a href="{{ url('tenants/'.$tenant->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit"><i class="fas fa-edit"></i>
              <!-- Font Awesome Edit Icon --></a>
            <form action="{{ route('tenants.destroy', $tenant->id) }}" class="float-end" method="POST">
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
          <th>Tenant Name</th>
          <th>Contact</th>
          <th>Rented Unit No</th>
          <th>Advance Payment</th>
          <th>Payment Per Month</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection