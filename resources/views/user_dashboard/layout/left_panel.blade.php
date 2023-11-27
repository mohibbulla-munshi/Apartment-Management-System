<div class="sidebar sidebar-fixed" style="background-color: #000000d5;" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a style="text-align:center" href="/"><img style="width:50%;"
                src="{{ asset('themes/assets/img/Apartment Management System Logo.png') }}" alt=""></a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/dashboard">
                <i class="fa-solid fa-dashboard" style="margin-right: 15px;"></i>Dashboard<span
                    class="badge badge-sm bg-info ms-auto">NEW</span></a>
        </li>

        <li class="nav-title">All Informations</li>
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-building" style="margin-right: 15px;"></i>Floor
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
                <i class="fa-solid fa-building-un" style="margin-right: 15px;"></i>Unit
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
                <i class="fa-solid fa-user" style="margin-right: 15px;"></i>Owner
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

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-people-group" style="margin-right: 15px;"></i>Tenant
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('owners') }}"><span class="nav-icon"></span>Tenant
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('owners/create') }}"><span
                            class="nav-icon"></span>Add
                        Tenant</a>
                </li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-sitemap" style="margin-right: 15px;"></i>Committe </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance') }}"><span
                            class="nav-icon"></span>Committe
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance/create') }}"><span
                            class="nav-icon"></span>Add Committe Mamber</a></li>
            </ul>
        </li>

        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-person-digging" style="margin-right: 15px;"></i>Employee
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('employees') }}"><span
                            class="nav-icon"></span>Employee
                        List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('employees/create') }}"><span
                            class="nav-icon"></span>Add
                        Employee</a>
                </li>
            </ul>
        </li>

        <li class="nav-title">Finance & Collection</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-sitemap" style="margin-right: 15px;"></i>Rent Collection</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('rent') }}"><span class="nav-icon"></span>Rent
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('rent/create') }}"><span
                            class="nav-icon"></span>Add New
                        Rent</a></li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-money-check-dollar" style="margin-right: 15px;"></i>Owner Utility</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('Utility') }}"><span class="nav-icon"></span>Owner
                        Utility List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('Utility/create') }}"><span
                            class="nav-icon"></span>Add
                        New Owner Utility</a></li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-screwdriver-wrench" style="margin-right: 15px;"></i>Maintenance Cost</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance') }}"><span
                            class="nav-icon"></span>Maintenance Cost List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance/create') }}"><span
                            class="nav-icon"></span>Add New Maintenance Cost</a></li>
            </ul>
        </li>


        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-sack-dollar" style="margin-right: 15px;"></i>Apartment Fund</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Fund
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund/create') }}"><span
                            class="nav-icon"></span>Add
                        Fund</a></li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-money-bill-transfer" style="margin-right: 15px;"></i>Bill Deposit</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('bill') }}"><span class="nav-icon"></span>Bill
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('bill/create') }}"><span
                            class="nav-icon"></span>Add Bill</a></li>
            </ul>
        </li>

        <li class="nav-title">Others</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-comment-dots" style="margin-right: 15px;"></i>Complaint</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('complaint') }}"><span
                            class="nav-icon"></span>Complaint
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('complaint/create') }}"><span
                            class="nav-icon"></span>Add
                        Complaint</a></li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-people-group" style="margin-right: 15px;"></i>Visitor</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor') }}"><span
                            class="nav-icon"></span>Visitor
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor/create') }}"><span
                            class="nav-icon"></span>Add Visitor</a></li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-handshake" style="margin-right: 15px;"></i>Metting</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor') }}"><span
                            class="nav-icon"></span>Metting
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor/create') }}"><span
                            class="nav-icon"></span>Add Metting</a></li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-comments" style="margin-right: 15px;"></i>Notice Board</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor') }}"><span
                            class="nav-icon"></span>Notice Board
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor/create') }}"><span
                            class="nav-icon"></span>Add Notice Board</a></li>
            </ul>
        </li>

        {{-- Report & Setting nav item start here --}}
        <li class="nav-title">Report & Setting</li>
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

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <i class="fa-solid fa-building" style="margin-right: 15px;"></i>Setting</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor') }}"><span
                            class="nav-icon"></span>Notice Board
                        List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fontdesk/visitor/create') }}"><span
                            class="nav-icon"></span>Add Notice Board</a></li>
            </ul>
        </li>
        {{-- Report & Setting nav item end here --}}
    </ul>
</div>