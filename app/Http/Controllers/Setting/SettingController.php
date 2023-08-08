<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\Setting;

class SettingController extends Controller
{
    public function index()
            
    {
        $setting = Setting::first();
        return view('setting.setting.index', compact('setting'));
    }
    
    public function store(Request $request)
            
    {
        $setting = Setting::count();
        
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ], 
            [
                'name.required' => 'Name is required',
                'phone.required' => 'Phone is required',
                'address.required' => 'Address is required',
            ]
          );
        
        if($setting == 0){
 
        $setting = new Setting();
        
        $setting->name =  $request->name;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->skype =  $request->skype;
        $setting->fax = $request->fax;
        $setting->opening_day = $request->opening_day;
        $setting->opening_time =  $request->opening_time;
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter =  $request->twitter;
        $setting->linked_in = $request->linked_in;
        $setting->youtube = $request->youtube;
        $setting->copy_right =  $request->copy_right;
        $setting->key_note = $request->key_note;
        $setting->save();
        
        } else {
        
        $settings = Setting::first();
        $setting = Setting::find($settings->id);
        $setting->name =  $request->name;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->skype =  $request->skype;
        $setting->fax = $request->fax;
        $setting->opening_day = $request->opening_day;
        $setting->opening_time =  $request->opening_time;
        $setting->address = $request->address;
        $setting->facebook = $request->facebook;
        $setting->twitter =  $request->twitter;
        $setting->linked_in = $request->linked_in;
        $setting->youtube = $request->youtube;
        $setting->copy_right =  $request->copy_right;
        $setting->key_note = $request->key_note;
        $setting->save();
        
        }
      
        $request->session()->flash('alert-success', 'Setting Successfully updated');
        return redirect('setting');
    }
    
}
