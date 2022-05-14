<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\WorkExperience;
use App\Models\User;

class WorkExpController extends Controller
{
    public function showExperience(Request $request){

        return view('backend.pages.workExp');
    }

    public function saveExperience(Request $request){            
       
        // $this->validate($request,[
        //     'work' => 'required',
        //     'company_name' => 'required',
        //     'company_address' => 'required',
        //     'company_mobile' => 'required',
        //     'designation' => 'required',
        //     'reporting_boss' => 'required',
        //     'reason' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        
        // ]);
        
       
        if($request->hasfile('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/profile',$image_name);
        }
        $picture = User::where('phone',$request->number)->first();
        $picture->image = $image_name;
        
        foreach ($request->company_name as $key => $value) {           
            $work = new WorkExperience;

            $work->phone = $request->number;
            $work->company_name = $request->company_name[$key];
            $work->company_address = $request->company_address[$key];
            $work->company_mobile = $request->company_mobile[$key];
            $work->designation = $request->designation[$key];
            $work->reporting_boss = $request->reporting_boss[$key];
            $work->reason = $request->reason[$key];
    
            $work->save();
        }
        $picture->save();
        

        return redirect()->route('show-family');
        // return view('frontend.pages.familyinfo');    

    }
}
