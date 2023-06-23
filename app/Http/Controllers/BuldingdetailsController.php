<?php

namespace App\Http\Controllers;

use App\Models\Manager\Buldingdetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuldingdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buldingdetails::all();
        return view('manager.buildingdetails.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.buildingdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'building_name' => 'required',
            'division' => 'required',
            'district' => 'required',
            'city_corporation' => 'required',
            'upazilla' => 'required',
            'post_code' => 'required',
            'area' => 'required',
            'building_no' => 'required',
            'building_type' => 'required',
            'buliding_floors' => 'required',
            'buliding_units' => 'required',
            'building_owners' => 'required',
            'additional_info' => 'required',
        ]);

        $buldingdetail = new Buldingdetails();

        $buldingdetail->user_id = $request->user_id;
        $buldingdetail->building_name = $request->building_name;
        $buldingdetail->division = $request->division;
        $buldingdetail->district = $request->district;
        $buldingdetail->city_corporation = $request->city_corporation;
        $buldingdetail->upazilla = $request->upazilla;
        $buldingdetail->post_code = $request->post_code;
        $buldingdetail->area = $request->area;
        $buldingdetail->building_no = $request->building_no;
        $buldingdetail->building_type = $request->building_type;
        $buldingdetail->buliding_floors = $request->buliding_floors;
        $buldingdetail->buliding_units = $request->buliding_units;
        $buldingdetail->building_owners = $request->building_owners;
        $buldingdetail->additional_info = $request->additional_info;
        $buldingdetail->save();



        return redirect('building');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buldingdetails $buldingdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($buldingdetails);

        $buldingdetails=Buldingdetails::find($id);

        return view('manager.buildingdetails.edit',compact('buldingdetails'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $buldingdetail=Buldingdetails::find($id);
        $buldingdetail->user_id = $request->user_id;
        $buldingdetail->building_name = $request->building_name;
        $buldingdetail->division = $request->division;
        $buldingdetail->district = $request->district;
        $buldingdetail->city_corporation = $request->city_corporation;
        $buldingdetail->upazilla = $request->upazilla;
        $buldingdetail->post_code = $request->post_code;
        $buldingdetail->area = $request->area;
        $buldingdetail->building_no = $request->building_no;
        $buldingdetail->building_type = $request->building_type;
        $buldingdetail->buliding_floors = $request->buliding_floors;
        $buldingdetail->buliding_units = $request->buliding_units;
        $buldingdetail->building_owners = $request->building_owners;
        $buldingdetail->additional_info = $request->additional_info;
        $buldingdetail->save();
        return redirect('/building')->with('massage', 'Data Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buldingdetails=Buldingdetails::find($id);

        $buldingdetails->delete();
        return redirect('/building')->with('massage', 'Data Update successfully');
    }
}
