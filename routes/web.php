<?php

use App\Http\Controllers\Finance\BillController;
use App\Http\Controllers\Finance\FundController;
use App\Http\Controllers\Finance\MaintenanceController;
use App\Http\Controllers\Finance\UtilityController;
use App\Http\Controllers\Finance\RentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deshboard\DashboardController;
use App\Http\Controllers\Manager\ProfileController;

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

/* ------------------------------------------------------------ */


/**
 * -----------------------Deahboard Route-------------
 */

Route::get('/dashboard', [DashboardController::class, 'index']);

/* -------------------------------------------------------------- */


/**
 * -----------------------Manager Route-------------
 */

Route::get('/profile_list', [ProfileController::class, 'index']);
Route::get('/flat_list', [FlatDetailsController::class, 'index']);
Route::get('/building_info', [BuildingDetailsController::class, 'index']);

//User Profile
Route::resource('profile', ProfileController::class);
//User Profile
Route::resource('profile', ProfileController::class);


 /* -------------------------------------------------------------- */