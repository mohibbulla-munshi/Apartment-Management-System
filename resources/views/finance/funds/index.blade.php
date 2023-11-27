@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('fund') }}
        </span>
        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
            <thead>
                <tr>
                    <th>Owner Name</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($funds as $fund)
                <tr>
                    <td>{{ $fund->owner_name }}</td>
                    <td>{{ $fund->month }}</td>
                    <td>{{ $fund->year }}</td>
                    <td>{{ $fund->date }}</td>
                    <td>{{ $fund->total_amount }}</td>
                    <td>
                        <a href="{{ url('fund/'.$fund->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
                            type="submit"><i class="fas fa-edit"></i> <!-- Font Awesome Edit Icon --></a>

                        <form action="{{ route('fund.destroy',  $fund->id) }}" class="float-end" method="POST">
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
                    <th>Owner Name</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection