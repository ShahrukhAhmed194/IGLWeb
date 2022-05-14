@extends('backend.layout.registrationTemplate')

@section('title','Login')

@section('content')

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo"></x-slot>

            <fieldset>
                <h3 class="text-center">Reset Password</h3>
                @if(session('status'))
                    <div class="alert alert-success" role ="alert">
                        {{__(session('status'))}}
                    </div>
                @endif
                <form method="GET" action="{{ route('password.reset',['email']) }}">
                    @csrf
                    <div>
                        <label class="control-label"  for="email">Email</label>
                        <input type="email" name="email" id="email" class="block mt-1 w-full"  required />
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <x-jet-button class="ml-4">
                        {{ __('Reset') }}
                    </x-jet-button>
                    <div class="control-group">
                        <div class="controls">
                           <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                             {{ __("Don't Have An Account?") }}
                            </a>
                         </div>
                    </div>                    
                </form>
            </fieldset>
        </x-jet-authentication-card>
    </x-guest-layout>

@endsection
