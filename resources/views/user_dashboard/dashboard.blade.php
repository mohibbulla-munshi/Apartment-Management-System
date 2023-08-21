@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        @section('breadcrumbs')
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent border-bottom mb-4">
                    <li class="breadcrumb-item">
                        {{ Breadcrumbs::render('dashboard') }}
                    </li>
                </ol>
            </nav>
        </div>
        @endsection

        <!-- Card Grid -->
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-primary text-white">
                    <a href="{{ url('profile') }}" class="text-white text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Profile</h5>
                            <p class="card-text">(Owner, Tenant, Employee, Manager)</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-info text-white">
                    <a href="{{ url('building') }}" class="text-white text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">House Info</h5>
                            <p class="card-text">House details, area, and others</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-success text-white">
                    <a href="{{ url('flat') }}" class="text-white text-decoration-none">
                        <div class="card-body">
                            <h5 class="card-title">Unit Information</h5>
                            <p class="card-text">Flat floor and other details</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <h5 class="card-title">...</h5>
                        <p class="card-text">.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Meeting Scheduling</h5>
                        <p class="card-text">Meeting details</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Notice and Complaint</h5>
                        <p class="card-text">.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Visitor Info</h5>
                        <p class="card-text">All users info</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Car Parking</h5>
                        <p class="card-text">House details, area, and others</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Maintenance Cost</h5>
                        <p class="card-text">Flat floor and other details</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Utility Bill</h5>
                        <p class="card-text">All users info</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Others Profile</h5>
                        <p class="card-text">House details, area, and others</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">Designation</h5>
                        <p class="card-text">.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Additional custom styles */
    .breadcrumb {
        padding: 0;
        margin-bottom: 0;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: '>';
        color: #777;
    }

    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection