@extends('backend.layout.registrationTemplate')

@section('title','Register')

@section('content')

<x-guest-layout>
  <x-jet-authentication-card>
      <x-slot name="logo">
          {{-- <x-jet-authentication-card-logo /> --}}
      </x-slot>

      {{-- <x-jet-validation-errors class="mb-4" /> --}}

      <fieldset data-animation="fadeInLeft">
        <h3 class="text-center">Registration Form</h3>
        <form action='{{ route('register') }}' method="POST">
              @csrf
              <div class="control-group">
                <label class="control-label"  for="phone">Phone</label>
                <input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{old('phone')}}" required autofocus autocomplete="phone" />
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="control-group">
                <label class="control-label" for="email">Name</label>
                <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            
              <div class="control-group">
                <label class="control-label"  for="email">Email </label>
                <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required />
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            
              <div class="control-group" >
                <label class="control-label"  for="password">Password</label>
                <input id="password" onmouseout="validate()" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <div id="alert" class="alert alert-danger"></div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            
              <div class="control-group">
                <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                <input id="password_confirmation"  class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            
              <div class="control-group">
               <div class="controls">
                  <button >Register</button>
                  <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                </div>
              </div>
        </form>   
      </fieldset>
   
     
  </x-jet-authentication-card>
</x-guest-layout>

<script>
  $('#alert').hide();
  function validate(){
    let a = document.getElementById("password").value;
    
    if(a.length==0){
      $('#alert').hide();
    }
    else if(a.length<8){
      $('#alert').show();
      document.getElementById("alert").innerHTML = "Please Provide Atleast 8 Character";
    }
    else{
      $('#alert').hide();
    }
 
  }
  
</script>
@endsection
    

