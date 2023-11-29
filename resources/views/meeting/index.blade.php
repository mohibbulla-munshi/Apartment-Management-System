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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($meetings as $meeting)
                <tr>
                    <td>{{ $meeting->title }}</td>
                    <td>{{ $meeting->description }}</td>
                    <td>{{ \Carbon\Carbon::parse($meeting->meeting_date)->format('F j, Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($meeting->time)->format('g:i A') }}</td>
                    <td>
                        <a href="{{url('meeting/'.$meeting->id.'/edit')}}"
                            class="btn btn btn-success rounded-0 float-end" type="submit">Edit</a>

                        <form method="POST" action="{{ url('meeting/'.$meeting->id) }}" class="float-end">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn btn-danger rounded-0" type="submit"><i
                                    class="fa fa-trash"></i></button>
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