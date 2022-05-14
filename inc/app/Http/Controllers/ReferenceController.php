<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reference;


class ReferenceController extends Controller
{
    public function showReferenceInfo(){

        return view('frontend.pages.reference');
    }

    public function saveReferenceInfo(Request $request){
        
        $this->validate($request, [

            'name' => 'required',
            'designation' => 'required',
            'company_name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required'
    
        ]);

        // dd($request->all());
        foreach ($request->company_name as $key => $value) {
            $reference = new Reference;

            $reference->number = $request->number;
            $reference->name = $request->name[$key];
            $reference->designation = $request->designation[$key];
            $reference->company_name = $request->company_name[$key];
            $reference->mobile = $request->mobile[$key];
            $reference->email = $request->email[$key];
            $reference->address = $request->address[$key];

            $reference->save();
        }
        
        return redirect()->route('settings',[$reference->number]);
    }
}
