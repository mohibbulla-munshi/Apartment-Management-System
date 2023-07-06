<?php

namespace App\Http\Controllers\Fontdesk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fontdesk\Purpose;

class PurposerController extends Controller
{
    public function index()
    {
        $purposes = Purpose::orderBy('id', 'DESC')->get();
        return view('fontdesk.purpose.index', compact('purposes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        return view('fontdesk.purpose.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purpose = new Purpose;  
        $purpose->purpose = $request->purpose;

        $purpose->save();
        $request->session()->flash('alert-success', 'Visitor Purpose Successfully added');
        return redirect('fontdesk/purpose');
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
        $purpose = Purpose::find($id);
        return view('fontdesk.purpose.edit', compact('purpose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $type = Purpose::find($id);
      
        $type->purpose = $request->purpose;
        $type->status = $request->status;

        $type->save();
        $request->session()->flash('alert-success', 'Visitor Purpose Successfully updated');
        return redirect('fontdesk/purpose');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $type = Purpose::find($id);
        $type->delete();
        $request->session()->flash('alert-danger', 'Visitor Purpose Successfully Deleted');
        return redirect('fontdesk/purpose');
    }
}
