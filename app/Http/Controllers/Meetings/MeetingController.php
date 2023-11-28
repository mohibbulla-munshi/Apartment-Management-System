<?php

namespace App\Http\Controllers\Meetings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting\Meeting;

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
        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'meeting_time' => 'required|string',
        ]);

        // Handle file upload
        // $attachmentPath = null;

        // if ($request->hasFile('attachment')) {
        //     $attachmentPath = $request->file('attachment')->store('meeting_attachments', 'public');
        // }

        // Create a new meeting instance
        $meeting = new Meeting([
            'user_id' => $validatedData['user_id'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'meeting_time' => $validatedData['meeting_time'],
        ]);

        // Save the meeting to the database
        $meeting->save();

        // Redirect to a success page or do something else
        $request->session()->flash('alert-success', 'Meeting Successfully added');
        return redirect('meeting');
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
