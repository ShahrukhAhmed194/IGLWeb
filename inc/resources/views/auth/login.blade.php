@extends('backend.layout.registrationTemplate')

@section('title','Login')

@section('content')

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">
                
            </x-slot>

            {{-- <x-jet-validation-errors class="mb-4" /> --}}

            {{-- @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif --}}
            <fieldset>
                <a href="{{route('home')}}"><img src="{{asset('assets/images/iglIcon.ico')}}" alt="iglweb" ></a>
                @if(!empty(session('wrong_pass')))
                    <div class="alert alert-danger">
                        {{ session('wrong_pass') }}                        
                    </div>
                    
                 @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label class="control-label"  for="login">Phone or Email</label>
                        <input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus />
                       
                    </div>

                    <div class="mt-4">
                        <label class="control-label"  for="password">Password</label>
                        <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        
                    </div>

                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input type="checkbox" id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}
                    <div class="control-group">
                        <div class="controls">
                           <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                             {{ __("Don't Have An Account?") }}
                            </a>
                         </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                    
                </form>
            </fieldset>
        </x-jet-authentication-card>
    </x-guest-layout>

@endsection
