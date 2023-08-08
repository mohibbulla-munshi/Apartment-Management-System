<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting\About;

class AboutController extends Controller
{
    
    public function index()
    {
        $about = About::first();
        return view('setting.about.index', compact('about'));
        
    }
    
    public function store(Request $request)
            
    {
        $request->validate(
            [
                'name' => 'required',
            ], 
            [
                'name.required' => 'Name is required',
            ]
          );
        
        $about = About::count();
        
        if($about == 0){
 
        $about = new About();
        
        $about->name =  $request->name;
        $about->video = $request->video;
        $about->description = $request->description;
        $about->image = $this->upload_images($request);
        $about->save();
        
        } else {
        
        $abouts = About::first();
        $about = About::find($abouts->id);
        $about->name =  $request->name;
        $about->video = $request->video;
        $about->description = $request->description;
        $about->image = $this->upload_images($request);
        $about->save();
        
        }
      
        $request->session()->flash('alert-success', 'About Successfully updated');
        return redirect('about');
    }
    
    public function upload_images($request)

    {       
        $images = $request->file('image');
        if($images){
            $imagesName = $images->getClientOriginalName();
            $directory = time().'-'.'about/';
            $images->move($directory,$imagesName);
            $imagesurl = $directory . $imagesName;
            return $imagesurl;
        }

    }
}
