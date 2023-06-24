@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <a href="{{ route('meeting.create') }}" class="btn btn-sm btn-danger">Add</a>
            <thead>
                <tr>
                    <th>user_id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>meeting_time</th>
                    <th>attachment</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item-> user_id }}</td>
                        <td>{{ $item-> title }}</td>
                        <td>{{ $item-> description }}</td>
                        <td>{{ $item-> meeting_time }}</td>
                        <td>{{ $item-> attachment }}</td>

                        <td>
                            <div style="width:65%" class="row">
                                <div class="col-md-6">
                                    <a href="{{url('meeting/'.$item->id.'/edit')}}" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('meeting/'.$item->id) }}">
                                    <form method="POST" action="{{ url('meeting/'.$item->id) }}">
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
