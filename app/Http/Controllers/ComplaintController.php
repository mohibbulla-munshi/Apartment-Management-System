<?php

namespace App\Http\Controllers;

use App\Models\Complaint\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Complaint::all();
        return view('complaint.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('complaint.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Complaint::create($data);
        return redirect('/complaint')->with('massage', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $complaint=Complaint::find($id);
        return view('complaint.edit',compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $complaint=Complaint::find($id);
        $complaint->user_id = $request->user_id;
        $complaint->category = $request->category;
        $complaint->problem_detail = $request->problem_detail;
        $complaint->date = $request->date;
        $complaint->status = $request->status;

        $complaint->save();
        return redirect('/complaint')->with('massage', 'Data Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $complaint=Complaint::find($id);
        $complaint->delete();
        return redirect('/complaint')->with('massage', 'Data Update successfully');
    }
}
