@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->

        <table id="example" class="table table-striped" style="width:98%">
            <a href="{{ route('building.create') }}" class="btn btn-sm btn-danger">Add</a>
            <thead>
                <tr>
                    <th>Bulding Name</th>
                    <th>division</th>
                    <th>city corporation</th>
                    <th>building no</th>
                    <th>building type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)

                    <tr>
                        <td>{{ $item-> building_name}}</td>
                        <td>{{ $item-> division}}</td>
                        <td>{{ $item-> city_corporation}}</td>
                        <td>{{ $item-> building_no}}</td>
                        <td>{{ $item-> building_type}}</td>
                        <td>
                            <div style="width:65%" class="row">
                                <div class="col-md-6">
                                    <a href="{{url('building/'.$item->id .'/edit')}}" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ url('building/'.$item->id) }}">
                                    <form method="POST" action="{{ url('building/'.$item->id) }}">
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
