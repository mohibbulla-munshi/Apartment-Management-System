<?php

namespace App\Http\Controllers\Units;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Floors\FloorModel;
use App\Models\Units\UnitModel;
use DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $floorsUnits = UnitModel::orderBy("created_at", "desc")->get();
        return view("units.index", compact("floorsUnits"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $floors = FloorModel::all();
        return view("units.create", compact("floors"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $floorName = $request->input('floor_name');

        // Use a raw SQL query to retrieve the floor_id based on the floor_name
        $query = "SELECT id FROM floor_models WHERE floor_name = ?";
        $bindings = [$floorName];

        $floorId = DB::select($query, $bindings);

        if (!empty($floorId)) {
            // $floorId is an array, so you can access the value like this
            $floorId = $floorId[0]->id;
        } else {
            // Handle the case where no matching record is found
            $floorId = null;
        }
        $unit = new UnitModel;
        
        $unit->floor_name = $request->floor_name;
        $unit->unit_name = $request->unit_name;
        $unit->floor_id = $floorId;

        $unit->save();
        $request->session()->flash('alert-success', 'unit Successfully added');
        return redirect('units');
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
