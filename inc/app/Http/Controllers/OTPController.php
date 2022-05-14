<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class OTPController extends Controller
{
    public function checkOtp(Request $request){
        // dd($request->all());
        $infos = User::where('phone',$request->phone)->first();
       
        if($infos->otp == $request->otp){
            $infos->status = 1;
            $infos->save();

            $status = DB::table('users')->select('status')->where('phone',$request->phone)->first();
            $phone = DB::table('users')->select('phone')->where('phone',$request->phone)->first();

            $request->session()->put('status1', $status->status);
            $request->session()->put('phone', $phone->phone);

        }
        else{
            $request->session()->flash('wrong_otp', 'Please Check Your OTP properly before submission.');
            
        }        

        return redirect()->route('dashboard');

    }

    public function changeData(Request $request){

        $intMin = (10 ** 6) / 10; 
        $intMax = (10 **6) - 1; 
        $codeRandom = mt_rand($intMin, $intMax);


        $infos = User::where('phone',$request->number)->first();
        $infos->phone = $request->phone;
        $infos->otp = $codeRandom;

        // This is api code
            // $message = "Dear Mr/Mrs Your OTP is:". $codeRandom;
            // $message = rawurlencode($message);
            // $number = $request->phone;
            // $senderId = "8801844532630";
            // $apikey = "445156057064961560570649";
            // $client = new Client();
            // $url = "http://sms.iglweb.com/api/v1/send?api_key=".$apikey."&contacts=".$number."&senderid=".$senderId."&msg=".$message;
            // $res = $client->request('GET', $url);
            // $ret = $res->getBody();
        // end of api code

        $infos->save();

        // return redirect()->route('dashboard');
        return redirect()->route('dashboard');
 
    }
}
