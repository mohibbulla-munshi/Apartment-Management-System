@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3 d-flex align-items-center justify-content-center">
    <div class="container-lg">
        <!-- Unit Details Card -->
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h3 class="card-title text-center text-uppercase mb-4" style="color: #3498db;">Owner Details</h3>

                <div class="container mt-4">
                    <div class="">
                        @if ($owner->owner_image)
                        <img src="{{ asset('storage/' . $owner->owner_image) }}" alt="Owner Image" class="card-img-top" style="object-fit: contain; height: 200px; width: 100%;">
                        @else
                            <div class="text-center py-4">
                                <p>No Image Available</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <hr style="border-color: #ecf0f1;">
                
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text"><strong>Owner:</strong> {{$owner->owner_name}}</p>
                                    <p class="card-text"><strong>Email:</strong> {{$owner->email}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text"><strong>Contact No:</strong> {{$owner->contact_no}}</p>
                                    <p class="card-text"><strong>Unit No:</strong> {{$owner->owner_unit_no}}</p>
                                </div>
                               
                            </div>
                
                            <hr style="border-color: #ecf0f1;">
                
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="card-text"><strong>Present Address:</strong> {{$owner->present_address}}</p>
                                    <p class="card-text"><strong>Permanent Address:</strong> {{$owner->permanent_address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                


                <!-- Action Buttons -->
                  <a href="{{ url('owners') }}" class="btn btn-primary rounded-0 float-end">
                    <i class="fas fa-arrow-left"></i> Back
                  </a>
            </div>
        </div>
    </div>
</div>

@endsection
