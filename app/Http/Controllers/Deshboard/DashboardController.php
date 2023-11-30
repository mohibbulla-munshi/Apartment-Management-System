<?php

namespace App\Http\Controllers\Deshboard;

use App\Http\Controllers\Controller;
use App\Models\Committees\Committee;
use App\Models\Complaint\Complaint;
use App\Models\Employees\Employee;
use App\Models\Finance\Fund;
use App\Models\Finance\MaintenanceCost;
use App\Models\Finance\Rent;
use App\Models\Finance\Utility;
use App\Models\Floors\FloorModel;
use App\Models\Owners\OwnerModel;
use App\Models\Tenants\Tenant;
use App\Models\Units\UnitModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        $totalFloors = FloorModel::count();
        $totalUnits = UnitModel::count();
        $totalOwners = OwnerModel::count();
        $totalTenants = Tenant::count();
        $totalEmployees = Employee::count();
        $totalCommittees = Committee::count();
        $totalRents = Rent::sum('total_rent');
        $totalMaintenances = MaintenanceCost::sum('amount');
        $totalFunds = Fund::sum('total_amount');
        $totalUtilities = Utility::count();
        $totalComplaints = Complaint::count();
        
        return view('user_dashboard.dashboard', compact('totalFloors','totalUnits','totalOwners','totalTenants','totalEmployees','totalCommittees','totalCommittees','totalRents','totalMaintenances','totalFunds','totalUtilities','totalComplaints'));
        $req->session()->flash('alert-success', 'Welcome to Dashboard');
    }
}
