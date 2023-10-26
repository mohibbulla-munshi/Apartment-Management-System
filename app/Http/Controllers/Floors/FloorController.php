<?php

namespace App\Http\Controllers\Floors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Floors\FloorModel;

class FloorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $floors = FloorModel::all();
        return view('floors.index', compact('floors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('floors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $floor = new FloorModel;

        $floor->floor_name = $request->floor_name;

        $floor->save();
        $request->session()->flash('alert-success', 'Floor Successfully added');
        return redirect('floors');
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
