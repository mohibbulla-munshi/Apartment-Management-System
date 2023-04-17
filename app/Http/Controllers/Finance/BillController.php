<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Finance\Bill;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bills = Bill::all();
        return view('finance.bills.index', compact('bills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('finance.bills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bill = new Bill;

        $bill->bill_type = $request->bill_type;
        $bill->bill_deposit_date = $request->bill_deposit_date;
        $bill->bill_month = $request->bill_month;
        $bill->bill_year = $request->bill_year;
        $bill->total_amount = $request->total_amount;
        $bill->deposit_bank_name = $request->deposit_bank_name;
        $bill->details = $request->details;

        $bill->save();
        $request->session()->flash('alert-success', 'Bill Successfully added');
        return redirect('bill');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bill = Bill::find($id);
        return view('finance.bills.edit', compact('bill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bill = Bill::find($id);

        $bill->bill_type = $request->bill_type;
        $bill->bill_deposit_date = $request->bill_deposit_date;
        $bill->bill_month = $request->bill_month;
        $bill->bill_year = $request->bill_year;
        $bill->total_amount = $request->total_amount;
        $bill->deposit_bank_name = $request->deposit_bank_name;
        $bill->details = $request->details;

        $bill->save();
        $request->session()->flash('alert-success', 'Bill Successfully updated');
        return redirect('bill');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        $request->session()->flash('alert-danger', 'Bill Successfully Deleted');
        return redirect('finance/bill');
    }
}
