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
use App\Http\Controllers\Manager\BuildingDetailsController;
use App\Http\Controllers\Fontdesk\PurposerController;
use App\Http\Controllers\Fontdesk\VisitorController;
use App\Http\Controllers\Garage\ParkingspotController;
use App\Http\Controllers\Garage\SpottypeController;
use App\Http\Controllers\Garage\ReservedController;
use App\Http\Controllers\Garage\DriverController;
use App\Http\Controllers\Garage\VehicleController;
use App\Http\Controllers\BuldingdetailsController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\Setting\AboutController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\Floors\FloorController;
use App\Http\Controllers\Units\UnitController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Owners\OwnerController;
use App\Models\Units\UnitModel;



Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * -----------------------Deahboard Route-------------
 */

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');;

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

//setting page
Route::get('/about',[AboutController::class,'index']);
Route::post('/about',[AboutController::class,'store']);
Route::get('/setting',[SettingController::class,'index'])->name('setting');
Route::post('/setting',[SettingController::class,'store']);




Route::resource('building',BuldingdetailsController::class);

Route::resource('flat', FlatDetailsController::class);
Route::resource('meeting', MeetingController::class);
Route::resource('complaint', ComplaintController::class);
Route::resource('designation', DesignationController::class);




/* ------------Employee Route------------- */
Route::get('employee', function () {
    return view('employee.index');
});
/* ------------------------- */


/* ------------Floor Route------------- */
Route::resource('floors', FloorController::class);

/* ------------------------- */
/* ------------Floor Route------------- */
Route::resource('units', UnitController::class);

/* ------------------------- */

Route::get('/get/unit/{id}', function($id){
    $units = DB::table('unit_models')
            ->select('unit_name')
            ->where('floor_id', $id)
            ->get();
    return response()->json($units);
});

/* ------------Owner Route------------- */
Route::resource('owners', OwnerController::class);

/* ------------------------- */












require __DIR__.'/auth.php';
