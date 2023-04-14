<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Manager\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manager.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        $user_id = $request->post('user_id');
        $name = $request->post('name');
        $email = $request->post('email');
        $dob = $request->post('dob');
        $designation = $request->post('designation');
        $mobile_number = $request->post('mobile_number');
        $nid_or_passport_no = $request->post('nid_or_passport_no');
        $nationality = $request->post('nationality');
        $gender = $request->post('gender');
        $address = $request->post('address');
        $additional_info = $request->post('additional_info');

        // return dd($user_id);


        if (Profile::whereEmail($email)->count() == 0) {
            
            $profile= new Profile();
            $profile->user_id =$user_id;
            $profile->name = $name;
            $profile->email = $email;
            $profile->dob = $dob;
            $profile->designation = $designation;
            $profile->mobile_number = $mobile_number;
            $profile->nid_or_passport_no = $nid_or_passport_no;
            $profile->nationality = $nationality;
            $profile->gender = $gender;
            $profile->address = $address;
            $profile->additional_info = $additional_info;
            $profile->save();
        }
        // dd($profile);
        return redirect('/profile_list');
        // return redirect()->back()->with('message','create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
