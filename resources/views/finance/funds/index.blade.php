@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
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
                        <div style="width:50%" class="row">
                            <div class="col-md-6">
                                <a href="{{ url('fund/'.$fund->id.'/edit') }}" class="btn btn btn-success rounded-0"
                                    type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('fund.destroy',  $fund->id) }}" method="POST">
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