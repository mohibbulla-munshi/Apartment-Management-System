@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>Maintenance</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Light</td>
                    <td>27/08/2019</td>
                    <td>$2000.00</td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-sharp fa-solid fa-trash"></i></a>
                    </td>
                </tr>
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