<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img style="width:50%" src="{{ asset('themes/assets/img/apartment-management-system-removebg-preview.png') }}" alt="">
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/dashboard">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                    </use>
                </svg>Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
        </li>
        {{-- Account & Finance nav item start here --}}
        <li class="nav-title">Account & Finance</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Bill Deposit</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('bill') }}"><span class="nav-icon"></span>Bill List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('bill/create') }}"><span class="nav-icon"></span>Add Bill</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Apartment Fund</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('fund') }}"><span class="nav-icon"></span>Fund List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('fund/create') }}"><span class="nav-icon"></span>Add Fund</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Owner Utility</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('Utility') }}"><span class="nav-icon"></span>Owner Utility List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('Utility/create') }}"><span class="nav-icon"></span>Add New Owner Utility</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Maintenance Cost</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance') }}"><span class="nav-icon"></span>Maintenance Cost List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('maintenance/create') }}"><span class="nav-icon"></span>Add New Maintenance Cost</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('themes/vendors/@coreui/icons/svg/free.svg#cil-money') }}"></use>
                </svg>Rent Collection</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ url('rent') }}"><span class="nav-icon"></span>Rent List</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('rent/create') }}"><span class="nav-icon"></span>Add New Rent</a></li>
            </ul>
        </li>
        
        {{-- Account & Finance nav item end here --}}
    </ul>
</div>