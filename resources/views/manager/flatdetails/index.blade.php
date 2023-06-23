@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <a href="{{ route('flat.create') }}" class="btn btn-sm btn-danger">Add</a>
            <thead>
                <tr>
                    <th>flat_owner_id</th>
                    <th>flat_resident_id</th>
                    <th>flat_name</th>
                    <th>flat_floor_no</th>
                    <th>flat_size</th>
                    <th>flat_details</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item-> flat_owner_id }}</td>
                        <td>{{ $item-> flat_resident_id }}</td>
                        <td>{{ $item-> flat_name }}</td>
                        <td>{{ $item-> flat_floor_no }}</td>
                        <td>{{ $item-> flat_size }}</td>
                        <td>{{ $item-> flat_details }}</td>

                        <td>
                            <div style="width:65%" class="row">
                                <div class="col-md-6">
                                    <a href="{{url('flat/'.$item->id.'/edit')}}" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('flat/'.$item->id) }}">
                                    <form method="POST" action="{{ url('flat/'.$item->id) }}">
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
