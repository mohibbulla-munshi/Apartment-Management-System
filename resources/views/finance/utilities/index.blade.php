@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('utility') }}
        </span>
        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
            <thead>
                <tr>
                    <th>Owner Name</th>
                    <th>Floor No</th>
                    <th>Unit No</th>
                    <th>Total Resnt</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utilities as $utility)
                <tr>
                    <td>{{ $utility->owner_name }}</td>
                    <td>{{ $utility->floor_no }}</td>
                    <td>{{ $utility->unit_no }}</td>
                    <td>{{ $utility->total_rent }}</td>
                    <td>
                        <a href="{{ url('Utility/'.$utility->id.'/edit') }}"
                            class="btn btn btn-success rounded-0 float-end" type="submit"><i class="fas fa-edit"></i>
                            <!-- Font Awesome Edit Icon --></a>
                        <form action="{{ route('Utility.destroy',  $utility->id) }}" class="float-end" method="POST">
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
                    <th>Floor No</th>
                    <th>Owner Name</th>

                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection