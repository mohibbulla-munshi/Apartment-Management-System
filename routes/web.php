<?php

use App\Http\Controllers\Finance\BillController;
use App\Http\Controllers\Finance\FundController;
use App\Http\Controllers\Finance\MaintenanceController;
use App\Http\Controllers\Finance\UtilityController;
use App\Http\Controllers\Finance\RentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deshboard\DashboardController;
use App\Http\Controllers\Manager\ProfileController;
use App\Http\Controllers\Manager\FlatDetailsController;
use App\Http\Controllers\Manager\BuildingDetailsController;
use App\Http\Controllers\Fontdesk\PurposerController;
use App\Http\Controllers\Fontdesk\VisitorController;
use App\Http\Controllers\Garage\ParkingspotController;
use App\Http\Controllers\Garage\SpottypeController;
use App\Http\Controllers\Garage\ReservedController;
use App\Http\Controllers\Garage\DriverController;
use App\Http\Controllers\Garage\VehicleController;

Route::get('/', function () {
    return view('Home');
});


/**
 * -----------------------All Finance Related Route-------------
 */
//Bill
Route::resource('bill', BillController::class);
//Fund
Route::resource('fund', FundController::class);
//Utility
Route::resource('Utility', UtilityController::class);
//Maintenance
Route::resource('maintenance', MaintenanceController::class);
//Rent
Route::resource('rent', RentController::class);

//All Fontdesk
Route::group(['prefix' => 'fontdesk'], function () {
    Route::resource('purpose', PurposerController::class);
});

Route::group(['prefix' => 'fontdesk'], function () {
    Route::resource('visitor', VisitorController::class);
});
Route::post('/fontdesk/visitor/show',[VisitorController::class,'show']);
Route::post('/fontdesk/visitor/check-out',[VisitorController::class,'check_out']);
//All Garage
Route::group(['prefix' => 'garage'], function () {
    Route::resource('parkingspot', ParkingspotController::class);
});
Route::group(['prefix' => 'garage'], function () {
    Route::resource('spottype', SpottypeController::class);
});
Route::group(['prefix' => 'garage'], function () {
    Route::resource('reserved', ReservedController::class);
});
Route::post('/garage/reserved/show',[ReservedController::class,'show']);
Route::group(['prefix' => 'garage'], function () {
    Route::resource('driver', DriverController::class);
});
Route::post('/garage/driver/show',[DriverController::class,'show']);
Route::group(['prefix' => 'garage'], function () {
    Route::resource('vehicle', VehicleController::class);
});
Route::post('/garage/vehicle/show',[VehicleController::class,'show']);
//All Reports
Route::group(['prefix' => 'report'], function () {
    Route::resource('bill_report', ReportsBillController::class);
});

/* ------------------------------------------------------------ */


/**
 * -----------------------Deahboard Route-------------
 */

Route::get('/dashboard', [DashboardController::class, 'index']);

/* -------------------------------------------------------------- */


/**
 * -----------------------Manager Route-------------
 */


Route::get('/flat_list', [FlatDetailsController::class, 'index']);
// Route::get('/building_info', [BuildingDetailsController::class, 'index']);

//User Profile
// Route::resource('profile', ProfileController::class);
//Building Details
// Route::resource('building', BuildingDetailsController::class);



// Route::group(['prefix' => "manager" ], function () {

//     Route::group(['prefix' => "profile" ], function () {

//         Route::get('/', [ProfileController::class, 'index']);
//         Route::get('/create', [ProfileController::class, 'create'])->name("profile.create");
//         Route::post('/', [ProfileController::class, 'store'])->name("profile.store");

//     });

// });

Route::resource('profile', ProfileController::class);
Route::resource('building', BuildingDetailsController::class);

/* -------------------------------------------------------------- */



/* ------------Employee Route------------- */
Route::get('employee', function () {
    return view('employee.index');
});
/* ------------------------- */