@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('bill') }}
        </span>
        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
            <thead>
                <tr>
                    <th>Bill Type</th>
                    <th>Issue Date</th>
                    <th>Bill Month</th>
                    <th>Bill Year</th>
                    <th>Total Amount</th>
                    <th>Deposit Bank Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bills as $bill)
                <tr>
                    <td>{{ $bill->bill_type }}</td>
                    <td>{{ $bill->bill_deposit_date }}</td>
                    <td>{{ $bill->bill_month }}</td>
                    <td>{{ $bill->bill_year }}</td>
                    <td> <i class="fa-solid fa-bangladeshi-taka-sign"></i> {{ $bill->total_amount }}</td>
                    <td>{{ $bill->deposit_bank_name }}</td>
                    <td>
                        <a href="{{ url('bill/'.$bill->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
                            type="submit"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('bill.destroy',  $bill->id) }}" method="POST" class="float-end">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn btn-danger rounded-0" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Bill Type</th>
                    <th>Issue Date</th>
                    <th>Bill Month</th>
                    <th>Bill Year</th>
                    <th>Total Amount</th>
                    <th>Deposit Bank Name</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection