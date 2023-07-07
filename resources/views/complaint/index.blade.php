@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <a href="{{ route('complaint.create') }}" class="btn btn-sm btn-danger">Add</a>
            <thead>
                <tr>
                    <th>user_id</th>
                    <th>category</th>
                    <th>problem_detail</th>
                    <th>date</th>
                    <th>status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item-> user_id }}</td>
                        <td>{{ $item-> category }}</td>
                        <td>{{ $item-> problem_detail }}</td>
                        <td>{{ $item-> date }}</td>
                        <td>{{ $item-> status }}</td>

                        <td>
                            <div style="width:65%" class="row">
                                <div class="col-md-6">
                                    <a href="{{url('complaint/'.$item->id.'/edit')}}" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('complaint/'.$item->id) }}">
                                    <form method="POST" action="{{ url('complaint/'.$item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn btn-danger rounded-0" type="submit">Delete</button>
                                    </form>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

@endsection
