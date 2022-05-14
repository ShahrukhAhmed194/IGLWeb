@extends('backend.layout.registrationTemplate')

@section('title','Register')

@section('content')

<x-guest-layout>
  <x-jet-authentication-card>
      <x-slot name="logo"></x-slot>

      @php($email=\App\Models\User::where('email', $request->email)->first())
      @if(!empty($email))
        <fieldset data-animation="fadeInLeft">
          <h3 class="text-center">New Password</h3>
          <form action='{{ route('update.password') }}' method="POST">
                @csrf            
                <div class="control-group">
                  <label class="control-label"  for="email">Email </label>
                  <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email', $request->email)}}" required readonly />
                  @error('email')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              
                <div class="control-group">
                  <label class="control-label"  for="password">Password</label>
                  <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                  @error('password')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              
                <div class="control-group">
                  <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                  <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                  @error('password_confirmation')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="control-group">
                <div class="controls">
                    <button >Reset Password</button>
                  </div>
                </div>
          </form>   
        </fieldset>   
      @else
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
              <div class="alert alert-danger">{{ 'Wrong Email, Please Provide a  Registered Email.' }}</div>
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
      @endif
  </x-jet-authentication-card>
</x-guest-layout>


@endsection

