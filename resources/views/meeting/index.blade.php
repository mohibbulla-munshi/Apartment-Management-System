@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
        {{ Breadcrumbs::render('meetings') }}
        </span>
        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
            <thead>
                <tr>
                    <th>user_id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>meeting_time</th>
                    <th>attachment</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item-> user_id }}</td>
                        <td>{{ $item-> title }}</td>
                        <td>{{ $item-> description }}</td>
                        <td>{{ $item-> meeting_time }}</td>
                        <td>{{ $item-> attachment }}</td>

                        <td>
                                <a href="{{url('meeting/'.$item->id.'/edit')}}" class="btn btn btn-success rounded-0 float-end" type="submit">Edit</a>
                  
                                <form method="POST" action="{{ url('meeting/'.$item->id) }}" class="float-end">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-danger rounded-0" type="submit"><i class="fa fa-trash"></i></button>
                                </form> 
                        </td>
                    </tr>
                    @endforeach
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

@endsection
