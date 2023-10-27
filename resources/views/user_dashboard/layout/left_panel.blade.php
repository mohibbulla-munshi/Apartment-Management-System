<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a style="text-align:center" href="/"><img style="width:50%;"
                src="{{ asset('themes/assets/img/apartment-management-system-removebg-preview.png') }}" alt=""></a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/dashboard">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                    </use>
                </svg>Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
        </li>

        <li class="nav-title">Apartment Setting</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Apartment Setting
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('setting') }}"><span class="nav-icon"></span>
                        Setting</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('about') }}"><span class="nav-icon"></span>About
                        Apartment</a>
                </li>
            </ul>
        </li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Floor Information
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('floors') }}"><span class="nav-icon"></span>Floor
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('floors/create') }}"><span
                            class="nav-icon"></span>Add Floor</a>
                </li>
            </ul>
        </li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Unit Information
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('units') }}"><span class="nav-icon"></span>Unit
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('units/create') }}"><span
                            class="nav-icon"></span>Add
                        Unit</a>
                </li>
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Owner Information
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('owners') }}"><span class="nav-icon"></span>Owner
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('owners/create') }}"><span
                            class="nav-icon"></span>Add
                        Owner</a>
                </li>
            </ul>
        </li>

        {{-- Garage --}}
        <li class="nav-title">Garage</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Parking Spot</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/parkingspot') }}"><span
                            class="nav-icon"></span>Parking Spot
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/parkingspot/create') }}"><span
                            class="nav-icon"></span>Add Parking Spot</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Spot Type</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/spottype') }}"><span
                            class="nav-icon"></span>Spot
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/spottype/create') }}"><span
                            class="nav-icon"></span>Add Spot Type</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Reservation</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/reserved') }}"><span
                            class="nav-icon"></span>Reserved
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/reserved/create') }}"><span
                            class="nav-icon"></span>Add reserved</a>
                </li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Driver</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/driver') }}"><span
                            class="nav-icon"></span>Driver
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/driver/create') }}"><span
                            class="nav-icon"></span>Add Driver</a>
                </li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Vehicle</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/vehicle') }}"><span
                            class="nav-icon"></span>Vehicle
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('garage/vehicle/create') }}"><span
                            class="nav-icon"></span>Add Vehicle</a>
                </li>
            </ul>
        </li>
        {{-- Font Desk --}}
        <li class="nav-title">Font Desk</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Visitor Purpose</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/purpose') }}"><span
                            class="nav-icon"></span>Purpose
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/purpose/create') }}"><span
                            class="nav-icon"></span>Add Purpose</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Visitor</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor') }}"><span
                            class="nav-icon"></span>Visitor
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor/create') }}"><span
                            class="nav-icon"></span>Add Visitor</a></li>
            </ul>
        </li>

        {{-- Account & Finance nav item start here --}}
        <li class="nav-title">Account & Finance</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Bill Deposit</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('bill') }}"><span class="nav-icon"></span>Bill
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('bill/create') }}"><span
                            class="nav-icon"></span>Add Bill</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Apartment Fund</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Fund
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund/create') }}"><span
                            class="nav-icon"></span>Add Fund</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Owner Utility</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('Utility') }}"><span class="nav-icon"></span>Owner
                        Utility List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('Utility/create') }}"><span
                            class="nav-icon"></span>Add New Owner Utility</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Maintenance Cost</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance') }}"><span
                            class="nav-icon"></span>Maintenance Cost List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance/create') }}"><span
                            class="nav-icon"></span>Add New Maintenance Cost</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Rent Collection</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('rent') }}"><span class="nav-icon"></span>Rent
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('rent/create') }}"><span
                            class="nav-icon"></span>Add New Rent</a></li>
            </ul>
        </li>

        {{-- Account & Finance nav item end here --}}




        {{-- Manager nav item start here --}}

        <li class="nav-title">Manager</li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Profile</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('profile') }}"><span
                            class="nav-icon"></span>Profile List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profile/create') }}"><span
                            class="nav-icon"></span>Add Profile</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Building Profile</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('building') }}"><span
                            class="nav-icon"></span>Building
                        Information</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('building/create') }}"><span
                            class="nav-icon"></span>Add Building Information</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Flat Detalis</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('flat') }}"><span class="nav-icon"></span>Flat
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('flat/create') }}"><span
                            class="nav-icon"></span>Add Flat</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Designation</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('designation') }}"><span
                            class="nav-icon"></span>Designation
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('designation/create') }}"><span
                            class="nav-icon"></span>Add Designation</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Meeting</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('meeting') }}"><span
                            class="nav-icon"></span>Meeting
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('meeting/create') }}"><span
                            class="nav-icon"></span>Add Meeting</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Complaint</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('complaint') }}"><span
                            class="nav-icon"></span>Complaint
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('complaint/create') }}"><span
                            class="nav-icon"></span>Add Complaint</a></li>
            </ul>
        </li>

        {{-- Manager nav item end here --}}

        {{-- Report nav item start here --}}
        <li class="nav-title">Report</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-bar-chart ') }}"></use>
                </svg>Full Reports</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('report/bill_report') }}">
                        <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-bar-chart ') }}"></use>
                        <span class="nav-icon"></span>Rental
                        Report
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund/create') }}"><span
                            class="nav-icon"></span>Tenant Report</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Visitors
                        Report</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Complain
                        Report</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Unit
                        Status
                        Report</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Fund
                        Staus
                        Report</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Bill
                        Report</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Salary
                        Report</a>
                </li>
            </ul>
        </li>
        {{-- Report nav item end here --}}
    </ul>
</div>