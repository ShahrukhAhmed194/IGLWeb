<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\DB;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->login)->
            orwhere('phone',$request->login)->first();
    
            if ($user && Hash::check($request->password, $user->password)) {
                
                // jsut for status value
                $status = DB::table('users')->select('status')->where('email',$request->login)->
                orwhere('phone',$request->login)->first();
                $phone = DB::table('users')->select('phone')->where('email',$request->login)->
                orwhere('phone',$request->login)->first();

                $request->session()->put('status1', $status->status);
                $request->session()->put('phone', $phone->phone);

                return $user;
            }
            else{
                $request->session()->flash('wrong_pass', 'Please Check Your Username and Password.');

            }
        });

        Fortify::requestPasswordResetLinkView(function(){
            return view('auth.forgot-password');
        });
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
