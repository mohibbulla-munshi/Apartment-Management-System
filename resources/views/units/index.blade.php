@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('units') }}
    </span>
    <!-- Own Working Space -->
    <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
      <thead>
        <tr>
          <th>Floor No</th>
          <th>Unit No</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($floorsUnits as $floorUnit)
        <tr>
          <td>{{$floorUnit->floor_name}}</td>
          <td>{{$floorUnit->unit_name}}</td>
          <td>
            <a href="#" class="btn btn-success rounded-0 float-end" type="submit">
              <i class="fas fa-edit"></i>
            </a>
            <button class="btn btn-success rounded-0 mx-1 float-end" data-toggle="modal" data-target="#viewModal">
              <i class="fas fa-eye"></i>
            </button>

            <form action="#" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger rounded-0 float-end" onclick="return confirm ('Are you sure?')"
                type="submit">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">View Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Add the content you want to display in the modal here -->
        <!-- Example: -->
        <p>Details of the item you want to display.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection