@extends('backend.layout.dashboardTemplate')
 @section('title','Dashboard')

    @section('content')    
    @php
     $phone = session('phone');  
    @endphp
    @if (session('status1') == 0)

        <div class="card">
            <div class="container">
                <form action="{{route('check-otp')}}" method="POST" >
                    @csrf
                    <div class="form-label">
                        <label >Phone Number</label></br>
                        <input style="font-weight:bold" id="phone_number" value="{{session('phone')}}" readonly></br>
                        <input type="tel" class="form-control" id="phone" name="phone"  value="{{$phone}}">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span id="change" onclick="editNumber()"> Change</span><br>
                        <span id="update" onclick="updateNumber()"> Update</span>
                    </div>
                    <div class="form-label">                    
                        <input type="text" class="form-control" id="otp" name="otp" required></br>
                        
                        @if(!empty(session('wrong_otp')))
                            <div class="alert alert-danger">
                                <ul>
                                    {!! session('wrong_otp') !!}
                                </ul>
                            </div>
                        @endif
                        <label >Please Enter Your OTP Here</label>
                        
                    </div>
                    <div class="form-label text-center">
                        <button type="submit" class="btn btn-primary" value="submit">submit</button>
                    </div>
                </form>
            
            </div>
        </div>
    
    @else
        
        @php($value=\App\Models\PersonalInfo::where('user_number', $phone)->first())

        @if(empty($value))
            <fieldset>
                
                <h2>Personal Information</h2>
                <p>Please fill in this form to create an account.</p>
                <hr>
                @if(!empty(session('form')))
                <div class="alert alert-danger">
                    <ul>
                        {!! session('form') !!}
                    </ul>
                </div>
                @endif
                <form id="myForm" action="{{route('info')}}" method="POST" >
                    @csrf
                    <input type="hidden" name="number" id="number" value="{{$phone}}" >

                    <label for="NID_BRN" ><b>NID OR Birth Registration Number : </b></label>
                    <input type="text"name="NID_BRN" id="NID_BRN" onmouseout="validateNID()" value="{{old('NID_BRN')}}"  placeholder="Enter NID or Birth Registration Number"  required>
                    @error('NID_BRN')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="alert alert-danger" id="nid_msg"></div>

                    <label >Please Provide Any of These Below: </label><br>
                    <input type="checkbox" id="driving_license_c" name="driving_license_c" value="driving_license">
                    <label for="label_driving_license_c">Driving License </label>&nbsp;
                    <input type="checkbox" id="passport_c" name="passport_c" value="passport">
                    <label for="label_passport_c">Passport </label>&nbsp;
                    </label>&nbsp;&nbsp;&nbsp;<br>

                    <label  id="label_driving_license"><b>Driving License :</b></label>
                    <input  type="text" name="driving_license" id="driving_license" onmouseout="validateDrivingLicense()" placeholder="Driving License" required>
                    @error('driving_license')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="alert alert-danger" id="license_msg"></div>
                    <label  id="label_passport"><b>Passport :</b></label><br>
                    <input  type="text" name="passport" id="passport" onmouseout="validatePassport()" placeholder="Passport" required>
                    @error('passport')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="alert alert-danger" id="passport_msg"></div>
                    <label for="nationality"><b>Nationality</b></label>
                    <input type="text" placeholder="Nationality" name="nationality" id="nationality" value="{{old('nationality')}}" required>
                    @error('nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    {{-- Division to Upazila Code Started--}}
                    <div class="row">
                        <div class="form-group required-field col-md-6">
                            @php($divisions=\App\Models\Division::orderBy('name', 'ASC')->get())
                            <label><b>&nbsp; Devision :</b> </label><br>
                            <select name="division" id="division" class="chosen" data-placeholder="Choose Your division..."  required>
                                <option value="">Select Division</option>
                                @foreach($divisions as $dis)
                                    <option value="{{$dis->id}}" >{{$dis->name}}</option>
                                @endforeach
                            </select>
                            @error('division')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group required-field col-md-6">
                            <label><b>&nbsp; District :</b></label><br>
                            <select name="district" id="district" data-placeholder="Choose Your District..." required>
                                <option value="">Select District</option>
                            </select>
                            @error('district')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group required-field col-md-6">
                            <label><b>&nbsp; Upazila :</b></label><br>
                            <select name="upazila" id="upazila" data-placeholder="Choose Your Upazila..." required>                                
                                <option value="">Select Upazila</option>
                            </select>
                            @error('upazila')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                    </div>
                    {{-- Division to Upazila Code Ended--}}
                        
                        

                    <label for="present_address"><b>Present Address</b></label>
                    <input type="text" placeholder="Present Address" name="present_address" id="present_address" value="{{old('present_address')}}" required>
                    @error('present_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="permanent_address"><b>Permanent Address</b></label>
                    <input type="text" placeholder="Permanent Address" name="permanent_address" id="permanent_address" value="{{old('permanent_address')}}" required>
                    @error('permanent_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                
                    <nav aria-label="...">
                        <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item">
                            <span class="page-link" onclick="submitFunction()">Next</span>
                        </li>
                        </ul>
                    </nav>              
                </form>
            </fieldset>
        @else
            <div class="messages">
                <h3><b>Your Registration is Complete.</b></h3>
                <nav aria-label="...">
                    <ul class="pagination">
                    <li class="page-item ">
                        <a href="{{route('home')}}">GO BACk</a>
                    </li>
                    <li class="page-item">
                        <a href="{{route('settings',[$phone])}}">EDIT INFO</a>
                    </li>
                    </ul>
                </nav>   
            </div>            
        @endif
    @endif


    <script>
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
            
        $('#phone_number').show();
        $('#phone').hide();
        $('#change').show();
        $('#update').hide();

        function editNumber(){
            $('#phone_number').hide();
            $('#phone').show();
            $('#change').hide();
            $('#update').show();
        }

        function updateNumber(){
            let number = $('#phone_number').val();
            let phone = $('#phone').val();

            $.ajax({
                url: "{{route('change')}}",
                type: "POST",
                data: {number:number, phone:phone},
                success:function(data){
                    event.preventDefault();
                    $('#phone_number').val(phone);
                    $('#phone_number').show();
                    $('#phone').hide();
                    $('#change').show();
                    $('#update').hide();

                }
            })
        }
    </script>
    
    <script>
        
        $(document).ready(function(){
            $('#label_driving_license').hide();
            $('#driving_license').hide();
            $('#label_passport').hide();
            $('#passport').hide();

            $('input[type="checkbox"]').click(function(){
                let inputValue = $(this).attr("value");
                
                $("#" + inputValue).toggle();
                $("#label_" + inputValue).toggle();
            });
        
        });
        
    </script>

    <script>
        function submitFunction() {
            document.getElementById("myForm").submit();
        }
    </script>

    <script>
        $('#division').mouseenter(function(){
            $('#division').chosen();
        });
        
       
        $('#division').change(function(){
            let divison_id = $(this).val();
            let html = '<option >Select District</option>';
            
            $.ajax({
                type : "GET",
                url  : "{{route('select_district')}}",
                data : { divison_id: divison_id},
                success: function (response) {
                    $.each(response,function(key,value){
                        html += '<option value="'+value.id+'">'+value.name+'</option>'
                    });
                    
                    $('#district').html(html);
                    $('#district').chosen();

                },
                error: function (data){
                    console.log('fail');
                }
            });
                
        });
         
        $('#district').change(function(){
            let district_id = $(this).val();
            let html = '<option >Select Upazila</option>';
            $.ajax({
                type : "GET",
                url  : "{{route('select_upazila')}}",
                data : {district_id: district_id},
                success: function(response){
                    $.each(response, function(key,value){
                        html+='<option value="'+value.name+'">'+value.name+'</option>'
                       
                    });
                    $('#upazila').html(html);
                    $('#upazila').chosen();
                },
                error: function(data){
                    console.log('failed');
                }
            })
        })
        
    </script>

    <script>
        $('#nid_msg').hide();
        $('#license_msg').hide();
        $('#passport_msg').hide();

        function validateNID(){
            let nid;
            nid = $('#NID_BRN').val();
            nid_len = $('#NID_BRN').val().length;

           if(isNaN(nid)){
                $('#nid_msg').text('NID or Birth Certificate must be digiis only');
                $('#nid_msg').show();
           }
           else
           {
                if(nid==0){
                    $('#nid_msg').hide();     
                }
                else{
                    if(nid_len!=10 && nid_len!=17 ){
                    $('#nid_msg').text('NID or Birth Certificate must be 10 or 17 digits');
                    $('#nid_msg').show();

                    }else{
                        $('#nid_msg').hide();

                    }

                }
                
                
           }
            
        }

        function validateDrivingLicense(){
            let license;
            license = $('#driving_license').val();
            license_len = $('#driving_license').val().length;

            if(isNaN(license)){
                $('#license_msg').text('Driving License must be digiis only');
                $('#license_msg').show();
            }
            else
            {
                if(license==0){
                    $('#license_msg').hide();     
                }
                else{
                    if(license_len!=8 ){
                    $('#license_msg').text('Driving License must be 8 digits');
                    $('#license_msg').show();

                    }else{
                        $('#license_msg').hide();

                    }

                }
            }
        }

        function validatePassport(){
            let passport;
            passport = $('#passport').val();
            passport_len = $('#passport').val().length;

            if(isNaN(passport)){
                $('#passport_msg').text('Passport can be digiis only');
                $('#passport_msg').show();
            }
            else
            {
                if(passport==0){
                    $('#passport_msg').hide();     
                }
                else{
                    if(passport_len!=8 ){
                    $('#passport_msg').text('Passport must be 8 digits');
                    $('#passport_msg').show();

                    }else{
                        $('#passport_msg').hide();

                    }

                }
            }
        }
    </script>

@endsection