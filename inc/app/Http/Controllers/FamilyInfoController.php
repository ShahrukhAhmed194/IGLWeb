<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FamilyInfo;


class FamilyInfoController extends Controller
{
    public function showFamilyInfo(){

        return view('frontend.pages.familyInfo');
    }
    public function saveFamilyInfo(Request $request){
        
        $f_nid_len = strlen($request->father_nid);
        $m_nid_len = strlen($request->mother_nid);

        $this->validate($request,[
            'father_name' => 'required',
            'father_occupation' => 'required',
            'father_mobile' => 'required',
            'mother_name' => 'required',
            'mother_occupation' => 'required',
            'mother_mobile' => 'required',
            'brothers' => 'numeric|required',
            'sisters' => 'numeric|required',
        ]);

        if(!empty($f_nid_len)){
            if($f_nid_len == 10 ){
                $this->validate($request,[
                    'father_nid' => 'numeric|digits:10|unique:family_infos'
                ]);
            }
            elseif($f_nid_len == 17){
                $this->validate($request,[
                    'father_nid' => 'numeric|digits:17|unique:family_infos'
                ]);
            }
            else{
                $this->validate($request,[
                    'father_nid' => 'numeric|digits:10 or 17|unique:family_infos'
                ]);
            }
        }
        else{
            $request->father_nid = "N/A";
        }

        if(!empty($m_nid_len)){
            if($m_nid_len == 10){
                $this->validate($request,[
                    'mother_nid' => 'numeric|digits:10|unique:family_infos'
                ]);
            }
            elseif($m_nid_len == 17){
                $this->validate($request,[
                    'mother_nid' => 'numeric|digits:17|unique:family_infos'
                ]);
            }
            else{
                $this->validate($request,[
                    'mother_nid' => 'numeric|digits:10 or 17|unique:family_infos'
                ]);
            }
        }
        else{
            $request->mother_nid = "N/A";
        }
        $family = new FamilyInfo;

        $family->number = $request->number;
        $family->father_name = $request->father_name;
        $family->father_occupation = $request->father_occupation;
        $family->father_nid = $request->father_nid;
        $family->father_mobile = $request->father_mobile;
        $family->father_email = $request->father_email;
        
        $family->mother_name = $request->mother_name;
        $family->mother_occupation = $request->mother_occupation;
        $family->mother_nid = $request->mother_nid;
        $family->mother_mobile = $request->mother_mobile;
        $family->mother_email = $request->mother_email;

        $family->brothers = $request->brothers;
        $family->sisters = $request->sisters;

        $family->save();

        return redirect()->route('show-reference');
        // return view('frontend.pages.reference');
    }
}
