@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('dashboard') }}
        </span>
        <!-- Card Grid -->
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('floors') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-building fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Floor</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('units') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-building-un fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Unit</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('owners') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-user fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Owner</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('tenants') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-people-group fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Tenant</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('employees') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-person-digging fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Employee</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('committees') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-sitemap fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Committee</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('rent') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-money-check-dollar fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Rent</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('maintenance') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-screwdriver-wrench fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Maintenance</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('fund') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-sack-dollar fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Fund</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('Utility') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-money-bill-transfer fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Owner Utility</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('employees') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-money-bill-1fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Employee Salary</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{ url('complaint') }}" class="text-decoration-none">
                    <div class="shadow-sm p-3 mb-5 bg-body rounded text-center ">
                        <i class="fa-solid fa-person-digging fa-2x rounded-circle" style="font-size: 40px"></i>
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Total Complaint</h5>
                            <span class="fw-bold text-primary" style="font-size: 22px">30</span>
                        </div>
                    </div>
                </a>
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