<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Finance\BillController;
use App\Http\Controllers\Finance\FundController;
use App\Http\Controllers\Finance\MaintenanceController;
use App\Http\Controllers\Finance\UtilityController;
use App\Http\Controllers\Finance\RentController;
use App\Http\Controllers\Deshboard\DashboardController;
use App\Http\Controllers\Manager\FlatDetailsController;
use App\Http\Controllers\BuldingdetailsController;
use App\Http\Controllers\Meetings\MeetingController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\Floors\FloorController;
use App\Http\Controllers\Units\UnitController;
use App\Http\Controllers\Committees\CommitteeController;
use App\Http\Controllers\Complaints\ComplaintController;
use App\Http\Controllers\Owners\OwnerController;
use App\Http\Controllers\Employees\EmployeeController;
use App\Http\Controllers\Employees\Leave\EmployeeLeaveController;
use App\Http\Controllers\Employees\Salaries\EmployeeSalaryController;
use App\Http\Controllers\Notice\EmployeeNoticeController;
use App\Http\Controllers\Notice\OwnerNoticeController;
use App\Http\Controllers\Notice\TenantNoticeController;
use App\Http\Controllers\Tenants\TenantController;
use App\Http\Controllers\Employees\EmployeeAjaxController;
use App\Http\Controllers\Settings\AdminSetupController;
use App\Http\Controllers\Settings\BillTypeSetupController;
use App\Http\Controllers\Settings\BuildingController;
use App\Http\Controllers\Settings\MemberTypeSetupController;
use App\Http\Controllers\Settings\MonthSetupController;
use App\Http\Controllers\settings\UtilityBillSetupController;
use App\Http\Controllers\Settings\YearSetupController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');;

Route::middleware('auth')->group(function () {
   
    Route::resource('bill', BillController::class);
    Route::resource('fund', FundController::class);
    Route::resource('Utility', UtilityController::class);
    Route::resource('maintenance', MaintenanceController::class);
    Route::resource('rent', RentController::class);
    Route::resource('flat', FlatDetailsController::class);
    Route::resource('meeting', MeetingController::class);
    Route::resource('complaint', ComplaintController::class);
    Route::resource('designation', DesignationController::class);
    Route::resource('tenants', TenantController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('employee_salaries', EmployeeSalaryController::class);
    Route::get('/employee/{employeeName}', [EmployeeAjaxController::class,'getEmployeeDetails']);
    Route::resource('employee_leaves', EmployeeLeaveController::class);
    Route::resource('committees', CommitteeController::class);
    Route::resource('floors', FloorController::class);
    Route::resource('units', UnitController::class);
    Route::resource('owners', OwnerController::class);
    Route::resource('building',BuldingdetailsController::class);

    Route::group(['prefix' => 'notice'], function () {
        Route::resource('tenant', TenantNoticeController::class);
        Route::resource('employee', EmployeeNoticeController::class);
        Route::resource('owner', OwnerNoticeController::class);
    });
    Route::group(['prefix' => 'settings'], function () {
        Route::resource('admin_setup', AdminSetupController::class);
        Route::resource('buildings', BuildingController::class);
        Route::resource('bill_type_setup', BillTypeSetupController::class);
        Route::resource('utility_bill_setup', UtilityBillSetupController::class);
        Route::resource('member_type_setup', MemberTypeSetupController::class);
        Route::resource('month_setup', MonthSetupController::class);
        Route::resource('year_setup', YearSetupController::class);
    });
    

    

});










require __DIR__.'/auth.php';
