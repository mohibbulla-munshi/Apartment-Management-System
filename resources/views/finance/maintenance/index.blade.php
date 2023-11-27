@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('maintenance') }}
        </span>
        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
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
                    <td><i class="fa-solid fa-bangladeshi-taka-sign"></i> {{$MaintenanceCost->amount}}</td>
                    <td>
                        <a href="{{ url('maintenance/'.$MaintenanceCost->id.'/edit') }}"
                            class="btn btn btn-success rounded-0 float-end" type="submit"><i class="fas fa-edit"></i>
                            <!-- Font Awesome Edit Icon --></a>
                        <form action="{{ route('maintenance.destroy',  $MaintenanceCost->id) }}" class="float-end"
                            method="POST">
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