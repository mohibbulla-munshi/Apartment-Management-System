<?php

namespace App\Http\Controllers\Notice;

use App\Http\Controllers\Controller;
use App\Models\Notice\TenantNotice;
use Illuminate\Http\Request;

class TenantNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tenantNotices = TenantNotice::all();
        return view('notices.tenant.create', compact('tenantNotices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'meeting_date' => 'required|date',
            'status' => 'required|string|max:255',
            'description' => 'required|string',
            // Add other validation rules as needed
        ]);

        TenantNotice::create($validatedData);

        $request->session()->flash('alert-success', 'Tenant Notice Successfully added');
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
