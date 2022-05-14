<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'phone' => ['required', 'digits:11', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $intMin = (10 ** 6) / 10; 
        $intMax = (10 **6) - 1; 
        $codeRandom = mt_rand($intMin, $intMax);

        // below is api code
            // $message = "Mr. / Mrs. ".$input['name']."Your OTP is:". $codeRandom;
            // $message = rawurlencode($message);
            // $number = $input['phone'];
            // $senderId = "8801844532630";
            // $apikey = "445156057064961560570649";
            // $client = new Client();
            // $url = "http://sms.iglweb.com/api/v1/send?api_key=".$apikey."&contacts=".$number."&senderid=".$senderId."&msg=".$message;
            // $res = $client->request('GET', $url);
            // $ret = $res->getBody();
        // end of api code

        session()->put('phone', $input['phone']);
        session()->put('status1', 0);

        // session(['phone' => $input['phone']]);
        // session(['status1' => 0]);

        return User::create([
            'phone' => $input['phone'],
            'name' => $input['name'],
            'email' => $input['email'],
            'otp' => $codeRandom,
            'password' => Hash::make($input['password']),
            
        ]);
    }
}
