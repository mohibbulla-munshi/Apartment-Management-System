@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>Maintenance Title</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($MaintenanceCosts as $MaintenanceCost)
                 <tr>
                    <td>{{$MaintenanceCost->maintenance_title}}</td>
                    <td>{{$MaintenanceCost->date}}</td>
                    <td><i class="fa-solid fa-bangladeshi-taka-sign"></i>  {{$MaintenanceCost->amount}}</td>
                    <td>
                        <div style="width:65%" class="row">
                                <div class="col-md-6">
                                    <a href="{{ url('maintenance/'.$MaintenanceCost->id.'/edit') }}" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('maintenance.destroy',  $MaintenanceCost->id) }}"      method="POST">
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
                    <th>Maintenance</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection