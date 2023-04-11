@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
       <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>#Invoice</th>
                    <th>Renter Name</th>
                    <th>Type</th>
                    <th>Floor No</th>
                    <th>Unit No</th>
                    <th>Rent Amount</th>
                    <th>Rent Year</th>
                    <th>Bill Status</th>
                    <th>Total Rent</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>50</td>
                    <td>John Peterson</td>
                    <td>Rented</td>
                    <td>First Floor</td>
                    <td>A1</td>
                    <td>May</td>
                    <td>2023</td>
                    <td>PAID</td>
                    <td>1325</td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fa-solid fa-eye"></i></a>
                        <a href="#"><i class="fa-sharp fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
              <tr>
                    <th>#Invoice</th>
                    <th>Renter Name</th>
                    <th>Type</th>
                    <th>Floor No</th>
                    <th>Unit No</th>
                    <th>Rent Amount</th>
                    <th>Rent Year</th>
                    <th>Bill Status</th>
                    <th>Total Rent</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection