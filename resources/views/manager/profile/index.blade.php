@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">

    <div class="container-lg">
        <!-- Own Working Space -->
        @if(session('massage'))
        <h5>{{session('massage')}}</h5>
        @endif

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profiles as $profile)
                <tr>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->email}}</td>
                    <td>{{$profile->mobile_number}}</td>
                    <td>{{$profile->dob}}</td>
                    <td>{{$profile->nid}}</td>
                    <td>{{$profile->gender}}</td>
                    <td>{{$profile->status}}</td>
                    <td>
                        <div style="width:65%" class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn btn-success rounded-0" type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="#" method="POST">
                                    <!-- @csrf
                                        @method('DELETE') -->
                                    <button class="btn btn btn-danger rounded-0" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach

            </tbody>
            <tfoot>

            </tfoot>
        </table>
        <section>
            <a href="{{url('profile/create')}}"><button type="button" class="btn btn-primary btn-sm">Add Profile</button></a>
        </section>
    </div>
</div>

@endsection