@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('floors') }}
        </span>
        <!-- Own Working Space -->
        <table class="table table-hover shadow p-3 mb-5 bg-body rounded">
            <thead>
                <tr>
                    <th>Floor No</th>
                    <th class="float-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($floors as $floor)
                <tr>
                    <td>{{$floor->floor_name}}</td>
                    <td>
                        <a href="#" class="btn btn-success rounded-0 float-end" type="submit">
                            <i class="fas fa-edit"></i> <!-- Font Awesome Edit Icon -->
                        </a>
                        <form action="#" method="POST" class="float-end">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger rounded-0" onclick="return confirm ('Are you sure?')"
                                type="submit">
                                <i class="fas fa-trash-alt"></i> <!-- Font Awesome Delete Icon -->
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>



@endsection