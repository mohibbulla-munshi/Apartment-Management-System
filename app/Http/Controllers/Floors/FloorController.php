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
        $floor = FloorModel::find($id);
        return view('floors.show', compact('floor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $floor = FloorModel::find($id);
        return view('floors.edit', compact('floor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'floor_name' => 'required',
        ]);
    
        $floor = floorModel::find($id);
    
        if (!$floor) {
            // Handle the case where the floor is not found
            abort(404);
        }
    
    
        if (!empty($floorId)) {
            // $floorId is an array, so you can access the value like this
            $floorId = $floorId[0]->id;
        } else {
            // Handle the case where no matching record is found
            $floorId = null;
        }
    
        // Update floor attributes
        $floor->floor_name = $request->floor_name;
    
        // Save the changes
        $floor->save();
    
        $request->session()->flash('alert-success', 'floor successfully updated');
        return redirect('floors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        try {
            $floor = FloorModel::find($id);
    
            if (!$floor) {
                // Handle the case where the floor is not found
                abort(404);
            }
    
            // Check if there are related records in the unit_models table
            if ($floor->units()->exists()) {
                $request->session()->flash('alert-danger', 'Cannot delete the floor. It is referenced by other records.');
            } else {
                // No related records, proceed with deletion
                $floor->delete();
                $request->session()->flash('alert-danger', 'Floor successfully deleted');
            }
        } catch (ModelNotFoundException $e) {
            // Handle the case where the floor is not found
            $request->session()->flash('alert-danger', 'Floor not found.');
        }
    
        return redirect()->back();

    }
}
