<?php

namespace App\Http\Controllers\Fontdesk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fontdesk\Visitor;
use App\Models\Fontdesk\Purpose;
use App\Models\Floors\FloorModel;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::orderBy('id', 'DESC')->paginate(100);        
        return view('fontdesk.visitor.index', compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        $floors = FloorModel::all();
        $purposes = Purpose::orderBy('id', 'ASC')->get();
        return view('fontdesk.visitor.create',compact('purposes', 'floors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visitor = new Visitor;  
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->user_type = $request->user_type;
        $visitor->visitor_id = $request->visitor_id;
        $visitor->note = $request->note;
        $visitor->reference = $request->reference;
        $visitor->check_in = date("Y-m-d");

        $visitor->save();
        $request->session()->flash('alert-success', 'Visitor Successfully added');
        return redirect('fontdesk/visitor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->visitor_id;
        $visitor = Visitor::find($id);
        return view('fontdesk.visitor.get-single-visitor', compact('visitor'));
    }
    
    public function check_out(Request $request)
    {
        $id = $request->visitor_id;
        $visitor->check_out = date("Y-m-d");
        return view('fontdesk.visitor.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visitor = Visitor::find($id);
        $purposes = Purpose::orderBy('id', 'ASC')->get();
        return view('fontdesk.visitor.edit', compact('visitor','purposes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $id  =  $request->id;
        $visitor = Visitor::find($id);
      
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->user_type = $request->user_type;
        $visitor->visitor_id = $request->visitor_id;
        $visitor->note = $request->note;
        //$visitor->check_out = date("Y-m-d");
        $visitor->reference = $request->reference;

        $visitor->save();
        $request->session()->flash('alert-success', 'Visitor Successfully updated');
        return redirect('fontdesk/visitor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $visitor = Visitor::find($id);
        $visitor->delete();
        $request->session()->flash('alert-danger', 'Visitor Successfully Deleted');
        return redirect('fontdesk/visitor');
    }
}
