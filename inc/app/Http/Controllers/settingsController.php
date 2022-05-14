<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\PersonalInfo;
use App\Models\User;
use App\Models\WorkExperience;
use App\Models\FamilyInfo;
use App\Models\Reference;
// use Illuminate\Support\Facades\File;

class settingsController extends Controller
{
    public function showSettings($phone){

        // $usersDetails = DB::table('users')
        // ->join('personal_infos', 'users.phone', '=', 'personal_infos.user_number')
        // ->join('work_experiences', 'users.phone', '=', 'work_experiences.phone')
        // ->select('users.*', 'personal_infos.*','work_experiences.*')->get()->toArray();

        //  dd( $usersDetails);
        $data = WorkExperience::where('phone', $phone)->get();
        if(empty($data)){
            $request->session()->flash('form', 'Please Fill Up Your Form Before Going To Settings Page.');
            return redirect()->route('dashboard');
        }
        else{
            $data1 = User::where('phone', $phone)->first()->toArray();
            $data2 = PersonalInfo::where('user_number', $phone)->first()->toArray();
            $data3 = WorkExperience::where('phone', $phone)->get()->toArray();

            $usersDetails = array_merge($data1, $data2, $data3);
            // dd(gettype($data3));
            // dd( $usersDetails);
            return view('backend.pages.settings', compact('usersDetails'));
        }
    }
    
    public function showSettings2($phone){

        //  dd( $usersDetails);
        $data = WorkExperience::where('phone', $phone)->get();
        if(empty($data)){
            $request->session()->flash('form', 'Please Fill Up Your Form Before Going To Settings Page.');
            return redirect()->route('dashboard');
        }
        else{
            $data1 = User::where('phone', $phone)->first()->toArray();
            $data2 = PersonalInfo::where('user_number', $phone)->first()->toArray();
            $data3 = WorkExperience::where('phone', $phone)->get()->toArray();

            $usersDetails = array_merge($data1, $data2, $data3);
            // dd(gettype($data3));
            // dd( $usersDetails);
            return view('backend.pages.settings2', compact('usersDetails'));
        }
    }

    public function showSettings3($phone){

        // $usersDetails = DB::table('users')
        // ->join('personal_infos', 'users.phone', '=', 'personal_infos.user_number')
        // ->join('work_experiences', 'users.phone', '=', 'work_experiences.phone')
        // ->select('users.*', 'personal_infos.*','work_experiences.*')->get()->toArray();

        //  dd( $usersDetails);
        $data = WorkExperience::where('phone', $phone)->get();
        if(empty($data)){
            $request->session()->flash('form', 'Please Fill Up Your Form Before Going To Settings Page.');
            return redirect()->route('dashboard');
        }
        else{
            $data1 = User::where('phone', $phone)->first()->toArray();
            $data2 = PersonalInfo::where('user_number', $phone)->first()->toArray();
            $data3 = WorkExperience::where('phone', $phone)->get()->toArray();

            $usersDetails = array_merge($data1, $data2, $data3);
            // dd(gettype($data3));
            // dd( $usersDetails);
            return view('backend.pages.settings3', compact('usersDetails'));
        }
    }

    public function showSettings4($phone){

        $data = FamilyInfo::where('number', $phone)->get();
        if(empty($data)){
            $request->session()->flash('form', 'Please Fill Up Your Form Before Going To Settings Page.');
            return redirect()->route('show-family');
        }
        else{
            $data1 = User::where('phone', $phone)->first()->toArray();
            $data2 = FamilyInfo::where('number', $phone)->first()->toArray();

            $usersDetails = array_merge($data1, $data2);
            // dd($usersDetails);
            return view('backend.pages.settings4', compact('usersDetails'));
        }
    }

    public function showSettings5($phone){

        //  dd( $usersDetails);
        $data = Reference::where('number', $phone)->get();
        if(empty($data)){
            $request->session()->flash('form', 'Please Fill Up Your Form Before Going To Settings Page.');
            return redirect()->route('dashboard');
        }
        else{
            $data1 = User::where('phone', $phone)->first()->toArray();
            $data2 = Reference::where('number', $phone)->get()->toArray();

            $usersDetails = array_merge($data1, $data2);
            // dd($usersDetails);
            return view('backend.pages.settings5', compact('usersDetails'));
        }
    }

    public function updateUser(Request $request){
        // dd($request->all());
        $phone = $request->find;
       
        // $infos = DB::table('users')->where('phone', $phone)->first();
        $infos = User::where('phone', $phone)->first();

        if($request->hasfile('image')){
            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/profile',$image_name);
        }
       
        $infos->image     = $image_name;
        $infos->name      = $request->name;
        $infos->email     = $request->email;

        if(!empty($request->password)){
            $this->validate($request,[
                'password' => 'min:8',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $infos->password  = Hash::make($request->password);
        }
        // dd($infos->phone);
        $infos->save();

        return redirect()->route('settings',[$request->phone]);
    }

    public function updatePersonalInfo(Request $request){

        $len = strlen($request->NID_BRN);

        if($len == 10){
            $this->validate($request,[
                'NID_BRN' => 'required|numeric|digits:10'
            ]);
        }
        elseif($len == 17){
            $this->validate($request,[
                'NID_BRN' => 'required|numeric|digits:17'
            ]);
        }
        else{
            $this->validate($request,[
                'NID_BRN' => 'required|numeric|digits:10 or 17'
            ]);
        }
        if($request->driving_license != 'N/A'){
            $this->validate($request,[
                'driving_license' => 'required|numeric|digits:8'
            ]);
        }
        if($request->passport != 'N/A'){
            $this->validate($request,[
                'passport' => 'required|numeric|digits:8'
            ]);
        }
        $this->validate($request,[
            
            'nationality' => 'required',
            'division' => 'required',
            'district' => 'required',
            'upazila' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required'
        
        ]);

        $infos = PersonalInfo::where('user_number', $request->user_number)->first();
        
        $phone = $request->user_number;
        $infos->NID_BRN           = $request->NID_BRN;
        $infos->passport          = $request->passport;
        $infos->driving_license   = $request->driving_license;
        $infos->nationality       = $request->nationality;
        $infos->division          = $request->division;
        $infos->district          = $request->district;
        $infos->upazila           = $request->upazila;
        $infos->present_address   = $request->present_address;
        $infos->permanent_address = $request->permanent_address;

        // dd($infos);
        $infos->save();

        return redirect()->route('settings2',[$phone]);
    }

    public function updateExperience(Request $request){
        $infos = WorkExperience::where('id', $request->id)->first();

        $infos->company_name    = $request->company_name;
        $infos->company_address = $request->company_address;
        $infos->company_mobile  = $request->company_mobile;
        $infos->designation     = $request->designation;
        $infos->reporting_boss  = $request->reporting_boss;
        $infos->reason          = $request->reason;

        // dd($request->id);
        $infos->save();

        return redirect()->route('settings3',[$infos->phone]);
    }

    public function updateFamilyInfo(Request $request){

        $f_nid_len = strlen($request->father_nid);
        $m_nid_len = strlen($request->mother_nid);

        if($f_nid_len == 10){
            $this->validate($request,[
                'father_nid' => 'required|numeric|digits:10'
            ]);
        }
        elseif($f_nid_len == 17){
            $this->validate($request,[
                'father_nid' => 'required|numeric|digits:17'
            ]);
        }
        else{
            $this->validate($request,[
                'father_nid' => 'required|numeric|digits:10 or 17'
            ]);
        }

        if($m_nid_len == 10){
            $this->validate($request,[
                'mother_nid' => 'required|numeric|digits:10'
            ]);
        }
        elseif($m_nid_len == 17){
            $this->validate($request,[
                'mother_nid' => 'required|numeric|digits:17'
            ]);
        }
        else{
            $this->validate($request,[
                'mother_nid' => 'required|numeric|digits:10 or 17'
            ]);
        }
        $family = FamilyInfo::where('number', $request->number)->first();

        $family->number             = $request->number;
        $family->father_name       = $request->father_name;
        $family->father_occupation = $request->father_occupation;
        $family->father_nid        = $request->father_nid;
        $family->father_mobile     = $request->father_mobile;
        $family->father_email      = $request->father_email;
        $family->mother_name       = $request->mother_name;
        $family->mother_occupation = $request->mother_occupation;
        $family->mother_nid        = $request->mother_nid;
        $family->mother_mobile     = $request->mother_mobile;
        $family->mother_email      = $request->mother_email;
        $family->brothers          = $request->brothers;
        $family->sisters           = $request->sisters;

        // dd($request->id);
        $family->save();

        return redirect()->route('settings4',[$family->number]);
    }
    
    public function updateReference(Request $request){
        $infos = Reference::where('id', $request->id)->first();
        // dd($request->all());
        $infos->number       = $request->number;
        $infos->name         = $request->name;
        $infos->designation  = $request->designation;
        $infos->company_name = $request->company_name;
        $infos->mobile       = $request->mobile;
        $infos->email        = $request->email;
        $infos->address      = $request->address;

        // dd($request->id);
        $infos->save();

        return redirect()->route('settings5',[$infos->number]);
    }

    public function changePassword(Request $request){
        $email = $request->email;
        $infos = User::where('email', $email)->first();

        if(!empty($request->password)){
                $this->validate($request,[
                    'password' => 'min:8',
                    'password_confirmation' => 'required_with:password|same:password|min:8'
                ]);
                $infos->password  = Hash::make($request->password);
        }
        $infos->save();
        return redirect()->route('login');
    }

}