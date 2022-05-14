<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use Illuminate\Support\Facades\DB;

class PersonalInfoController extends Controller
{
    public function personalInfo(Request $request){

        $len = strlen($request->NID_BRN);

        if($len == 10){
            $this->validate($request,[
                'NID_BRN' => 'required|numeric|digits:10|unique:personal_infos'
            ]);
        }
        elseif($len == 17){
            $this->validate($request,[
                'NID_BRN' => 'required|numeric|digits:17|unique:personal_infos'
            ]);
        }
        else{
            $this->validate($request,[
                'NID_BRN' => 'required|numeric|digits:10 or 17|unique:personal_infos'
            ]);
        }
       
        if(empty($request->passport_c)){
            $request->passport = 'N/A';
        }
        else{
            $this->validate($request,[
                'passport' => 'required|digits:8|numeric|unique:personal_infos'
            ]);
        }

        if(!empty($request->driving_license_c)){
            $this->validate($request,[
                'driving_license' => 'required|digits:8|numeric|unique:personal_infos'
            ]);
        }
        else{
            $request->driving_license = 'N/A';
        }

        $this->validate($request,[
            'nationality' => 'required',
            'division' => 'required',
            'district' => 'required',
            'upazila' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required'
        
        ]);

        $division = Division::where('id',$request->division)->value('name');
        $district = District::where('id',$request->district)->value('name');

        $personal = new PersonalInfo;

        $personal->user_number = $request->number;
        $personal->NID_BRN = $request->NID_BRN;
        $personal->passport = $request->passport;
        $personal->driving_license = $request->driving_license;
        $personal->nationality = $request->nationality;
        $personal->division = $division;
        $personal->district = $district;
        $personal->upazila = $request->upazila;
        $personal->present_address = $request->present_address;
        $personal->permanent_address = $request->permanent_address;
       

        $personal->save();
       
        return redirect()->route('show-exp');
        // return view('backend.pages.workExp');
        // return view('frontend.pages.workExp', compact('personal'));
    }

    public function districtSelection(Request $request)
    { 
        $id = $request->divison_id;

        $districts = District::where('division_id' , $id)->get();
        
        return $districts;
    }

    public function upazilaSelection(Request $request)
    { 
        $id = $request->district_id;

        $upazilas = Upazila::where('district_id' , $id)->get();
        
        return $upazilas;
    }
}
