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
use App\Http\Controllers\Reports\BillController as ReportsBillController;

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
Route::get('/building_info', [BuildingDetailsController::class, 'index']);

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

/* -------------------------------------------------------------- */
