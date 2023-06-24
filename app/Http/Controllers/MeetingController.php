<?php

namespace App\Http\Controllers;

use App\Models\Meeting\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Meeting::all();
        return view('meeting.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meeting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Meeting::create($data);
        return redirect('/meeting')->with('massage', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $meeting=Meeting::find($id);
        return view('meeting.edit',compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $meeting=Meeting::find($id);
        $meeting->user_id = $request->user_id;
        $meeting->title = $request->title;
        $meeting->description = $request->description;
        $meeting->meeting_time = $request->meeting_time;
        $meeting->attachment = $request->attachment;

        $meeting->save();
        return redirect('/meeting')->with('massage', 'Data Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $meeting=Meeting::find($id);
        $meeting->delete();
        return redirect('/meeting')->with('massage', 'Data Update successfully');
    }
}
