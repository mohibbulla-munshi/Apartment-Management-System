@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Visitor Purpose</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purposes as $purpose)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$purpose->purpose}}</td>
                    <td>
                        <div style="width:65%" class="row">
                            <div class="col-md-6">
                                <a href="{{ url('fontdesk/purpose/'.$purpose->id.'/edit') }}"
                                    class="btn btn btn-success rounded-0" type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('purpose.destroy',  $purpose->id) }}" method="POST">
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
                    <th>Visitor Purpose</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
