@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <span>
            {{ Breadcrumbs::render('complaints') }}
        </span>

        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
            <thead>

                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Assigned Complaint</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($complaints as $complaint)
                <tr>
                    <td>{{ $complaint->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($complaint->date)->format('F j, Y') }}</td>
                    <td>{{ $complaint->status }}</td>
                    <td>Jon Do</td>
                    <td>
                        <a href="{{url('complaint/'.$complaint->id.'/edit')}}"
                            class="btn btn btn-success rounded-0 float-end" type="submit"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{ url('complaint/'.$complaint->id) }}" class="float-end">
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
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Assigned Complaint</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>

@endsection