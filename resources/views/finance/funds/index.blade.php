@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Owner Name</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img style="width:20%" src="https://babysuperstorebd.com/envato/apartment-management-system/img/upload/B616EE89-C1D1-8984-3C2F-2D192CC5699E.png" alt=""></td>
                    <td>John Peterson</td>
                    <td>February</td>
                    <td>2022</td>
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