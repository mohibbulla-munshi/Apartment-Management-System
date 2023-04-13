<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\Finance\Fund;
use Illuminate\Http\Request;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funds = Fund::all();
        return view('finance.funds.index', compact('funds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('finance.funds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fund = new Fund;

        $fund->owner_name = $request->owner_name;
        $fund->month = $request->month;
        $fund->year = $request->year;
        $fund->date = $request->date;
        $fund->total_amount = $request->total_amount;
        $fund->purpose = $request->purpose;

        $fund->save();
        $request->session()->flash('alert-success', 'Fund Successfully added');
        return redirect('fund');

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
        $fund = Fund::find($id);
        return view('finance.funds.edit', compact('fund'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fund = Fund::find($id);

        $fund->owner_name = $request->owner_name;
        $fund->month = $request->month;
        $fund->year = $request->year;
        $fund->date = $request->date;
        $fund->total_amount = $request->total_amount;
        $fund->purpose = $request->purpose;

        $fund->save();
        $request->session()->flash('alert-success', 'Fund Successfully Updated');
        return redirect('fund');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $fund = Fund::find($id);
        $fund->delete();
        $request->session()->flash('alert-danger', 'Fund Successfully Deleted');
        return redirect('fund');
    }
}
