@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
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
                        <div style="width:65%" class="row">
                            <div class="col-md-6">
                                <a href="{{ url('Utility/'.$utility->id.'/edit') }}" class="btn btn btn-success rounded-0"
                                    type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('Utility.destroy',  $utility->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-danger rounded-0" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
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