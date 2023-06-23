@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Visitor Purpose</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visitors as $visitor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->visitor_id }}</td>
                    <td>{{ $visitor->check_in }}</td>
                    <td>{{ $visitor->check_out }}</td>
                    <td>
                        <div style="width:65%" class="row">
                            <div class="col-md-6">
                                <a href="{{ url('fontdesk/visitor/'.$visitor->id.'/edit') }}" class="btn btn btn-success rounded-0"
                                    type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('visitor.destroy',  $visitor->id) }}" method="POST">
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
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Visitor Purpose</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
