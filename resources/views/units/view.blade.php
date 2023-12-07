@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3 d-flex align-items-center justify-content-center">
    <div class="container-lg">
        <!-- Unit Details Card -->
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h3 class="card-title text-center text-uppercase mb-4" style="color: #3498db;">Unit Details</h3>

                <div class="text-uppercase text-underline" style="color: #FA2C2A;">
                    <h5 class="mb-3"><strong>Floor No:</strong> {{$unit->floor_name}}</h5>
                    <hr style="border-color: #ecf0f1;">
                    <h5><strong>Unit No:</strong> {{$unit->unit_name}}</h5>
                </div>


                <!-- Action Buttons -->
                <form action="#" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger rounded-0 float-end" onclick="return confirm ('Are you sure?')"
                      type="submit">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
      
                  <a href="{{ route('units.edit', ['unit' => $unit->id]) }}" class="btn btn-success rounded-0 float-end" type="submit">
                    <i class="fas fa-edit"></i>
                  </a>
      
                  <a href="{{ url('units') }}" class="btn btn-primary rounded-0 float-end">
                    <i class="fas fa-arrow-left"></i>
                  </a>
            </div>
        </div>
    </div>
</div>

@endsection
