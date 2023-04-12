@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>DOB</th>
                    <th>NID/Passport No</th>
                    <th>Gender</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                 
                    <tr>
                        <td>##</td>
                        <td>##</td>
                        <td>##</td>
                        <td>##</td>
                        <td> <i class="fa-solid fa-bangladeshi-taka-sign"></i> ##</td>
                        <td>##</td>
                        <td>
                            <div style="width:65%" class="row">
                                <div class="col-md-6">
                                    <a href="#" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                                </div>
                                <div class="col-md-6">
                                    <form action="#"      method="POST">
                                        <!-- @csrf
                                        @method('DELETE') -->
                                        <button class="btn btn btn-danger rounded-0" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>            
                    </tr>
                
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
</div>

@endsection