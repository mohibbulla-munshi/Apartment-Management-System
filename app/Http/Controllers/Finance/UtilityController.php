<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance\Utility;

class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $utilities = Utility::orderBy('id', 'DESC')->get();
        return view('finance.utilities.index', compact('utilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finance.utilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $utility = new Utility;

        $utility->floor_no = $request->floor_no;
        $utility->unit_no = $request->unit_no;
        $utility->owner_name = $request->owner_name;
        $utility->utility_month = $request->utility_month;
        $utility->utility_year = $request->utility_year;
        $utility->water_bill = $request->water_bill;
        $utility->electric_bill = $request->electric_bill;
        $utility->gas_bill = $request->gas_bill;
        $utility->security_bill = $request->security_bill;
        $utility->utility_bill = $request->utility_bill;
        $utility->other_bill = $request->other_bill;
        $utility->total_rent = $request->total_rent;
        $date = str_replace('/', '-', $request->issue_date);
        $utility->issue_date = date("Y-m-d", strtotime($date));

        $utility->save();
        $request->session()->flash('alert-success', 'Utility Successfully added');
        return redirect('Utility');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $utility = Utility::find($id);
        return view('finance.utilities.edit', compact('utility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $id  =  $request->id;
        $utility = Utility::find($id);

        $utility->floor_no = $request->floor_no;
        $utility->unit_no = $request->unit_no;
        $utility->owner_name = $request->owner_name;
        $utility->utility_month = $request->utility_month;
        $utility->utility_year = $request->utility_year;
        $utility->water_bill = $request->water_bill;
        $utility->electric_bill = $request->electric_bill;
        $utility->gas_bill = $request->gas_bill;
        $utility->security_bill = $request->security_bill;
        $utility->utility_bill = $request->utility_bill;
        $utility->other_bill = $request->other_bill;
        $utility->total_rent = $request->total_rent;
        $date = str_replace('/', '-', $request->issue_date);
        $utility->issue_date = date("Y-m-d", strtotime($date));

        $date = str_replace('/', '-', $request->issue_date);
        $utility->issue_date = date("Y-m-d", strtotime($date));

        $utility->save();
        $request->session()->flash('alert-success', 'Utility Successfully updated');
        return redirect('Utility');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
 
        $utility = Utility::find($id);
        $utility->delete();
        $request->session()->flash('alert-danger', 'Utility Successfully Deleted');
        return redirect('Utility');
    }
}