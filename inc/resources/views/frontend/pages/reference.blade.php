@extends('backend.layout.workExpTemplate')

@section('title','References')
@section('content')
@php
  $phone = session('phone');   
@endphp
  <div class="container">
      <h1 class="text-center"><b>Reference Information</b></h1>
      <p class="text-center"><b>Please Provide Information as Given Below.</b></p>
      <hr>
      
      <form action="{{route('save-reference')}}" method="POST" >  
        @csrf
        <input type="hidden" name="number" value="{{$phone}}">
        <div class="container">
            <h1 ><b>References.</b></h1>
            <div class="box">
                <div class="row">                
                    <div class="col-md-6 col-sm-12">
                        <label for="name"><b> Name : </b></label>
                        <input type="text" placeholder="Enter Name" name="name[]" id="name" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">  
                        <label for ="designation"><b>Occupation : </b></label>
                        <input type="text" placeholder="Designation" name="designation[]" id="designation" required>
                        @error('designation')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="company_name"><b>Company Name : </b></label>
                        <input type="text" placeholder="Enter Company Name" name="company_name[]" id="company_name" required>
                        @error('company_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="mobile"><b>Phone Number : </b></label>
                        <input type="tel" placeholder="01*********" name="mobile[]" id="mobile" pattern="[0-1]{2}[0-9]{9}" required>
                        @error('mobile')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">  
                        <label for="email"><b>Email : </b></label>
                        <input type="email" placeholder="Email" name="email[]" id="email" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 col-sm-12">  
                        <label for="address"><b>Address : </b></label>
                        <input type="text" placeholder="Address" name="address[]" id="address" required>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                        
                </div>
            </div>
        </div>
        <div id="box2"></div>
        <button class="add-button btn btn-info" id="add_more" onclick="addMore()">add more </button>
        <br>
        <br>
        <hr>
        <button id="button" type="submit" class="registerbtn btn btn-success">Complete Registration</button>
      </form>
  </div>

<script>
    // $('#add_more').hide();
    let loop_count=0;

    function addMore(){
      
        loop_count++;
        
        let html='<div class="box " id="box_'+loop_count+'"><div class="row">';
        
        html+='<div class="col-md-6 col-sm-12"><label for="name"><b> Name : </b></label><input type="text" placeholder="Enter Name" name="name[]" id="name_'+loop_count+'" required>@error("name")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';
        html+='<div class="col-md-6 col-sm-12"><label for ="designation"><b>Occupation : </b></label><input type="text" placeholder="Designation" name="designation[]" id="designation_'+loop_count+'" required>@error("designation")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';
        html+='<div class="col-md-6 col-sm-12"><label for="company_name"><b>Company Name : </b></label><input type="text" placeholder="Enter Company Name" name="company_name[]" id="company_name_'+loop_count+'" required>@error("company_name")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';
        html+='<div class="col-md-6 col-sm-12"><label for="mobile"><b>Phone Number : </b></label><input type="tel" placeholder="01*********" name="mobile[]" id="mobile_'+loop_count+'" pattern="[0-1]{2}[0-9]{9}" required>@error("mobile")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';
        html+='<div class="col-md-6 col-sm-12"><label for="email"><b>Email : </b></label><input type="email" placeholder="Email" name="email[]" id="email_'+loop_count+'" required>@error("email")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';
        html+='<div class="col-md-6 col-sm-12"><label for="address"><b>Address : </b></label><input type="text" placeholder="Address" name="address[]" id="address_'+loop_count+'" required>@error("address")<div class="alert alert-danger">{{ $message }}</div>@enderror</div>';
        // html+='<button class="btn btn-danger float-right"style="float:right; margin-right:25px;" name="remove[]" id="remove_'+loop_count+'" onclick="remove(loop_count)">Remove</button>';
        html+= '</div></div>';
        
        $('#box2').append(html);
        // $('#list').val(loop_count);
    }    
</script>  

@endsection