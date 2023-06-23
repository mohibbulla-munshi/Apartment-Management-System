@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Spot Type</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($parkingspots as $parkingspot)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$parkingspot->type}}</td>
                    <td>{{$parkingspot->status == '1' ? 'Active' : 'Inactive'}}</td>
                    <td>
                        <div style="width:65%" class="row">
                            <div class="col-md-6">
                                <a href="{{ url('garage/parkingspot/'.$parkingspot->id.'/edit') }}"
                                    class="btn btn btn-success rounded-0" type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('parkingspot.destroy',  $parkingspot->id) }}" method="POST">
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
                    <th>Parking Spot</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
