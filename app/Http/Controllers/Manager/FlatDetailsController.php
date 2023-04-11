<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFlatDetailsRequest;
use App\Http\Requests\UpdateFlatDetailsRequest;
use App\Models\Manager\FlatDetails;

class FlatDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manager.flatdetails.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlatDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FlatDetails $flatDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FlatDetails $flatDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlatDetailsRequest $request, FlatDetails $flatDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FlatDetails $flatDetails)
    {
        //
    }
}
