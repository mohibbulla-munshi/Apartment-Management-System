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
                        <form action="{{ route('floors.destroy', ['floor' => $floor->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger rounded-0 float-end" onclick="return confirm ('Are you sure?')"
                              type="submit">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                          </form>
              
                          <a href="{{ route('floors.edit', ['floor' => $floor->id]) }}" class="btn btn-success rounded-0 float-end" type="submit">
                            <i class="fas fa-edit"></i>
                          </a>
              
                          <a href="{{ route('floors.show', ['floor' => $floor->id]) }}" class="btn btn-primary rounded-0 float-end">
                            <i class="fas fa-eye"></i>
                          </a>    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>



@endsection