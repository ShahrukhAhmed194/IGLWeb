@extends('backend.layout.settingsTemplate')
@section('title', 'Profile')
@section('content')
<div class="wrapper">
  @php($phone = session('phone'))
  @php($company = array_column($usersDetails, 'company_name'))
  @foreach($company as $key => $value)
  @endforeach

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" ><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('settings',[$phone])}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <div class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                          this.closest('form').submit(); " role="button">
                  <i class="fas fa-sign-out-alt"></i>
                  {{ __('Log Out') }}
              </a>
          </div>
      </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('inc/storage/app/public/profile')}}/{{$usersDetails['image']}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p style="color: aliceblue" class="d-block">{{$usersDetails['name']}}</p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings',[$phone])}}" class="nav-link ">
            <i class="nav-icon fas fa fa-user"></i>
            <p>
                User Information
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
            </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings2',[$phone])}}" class="nav-link active">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Personal Information
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings3',[$phone])}}" class="nav-link ">
              <i class="nav-icon fas fa-solid fa-briefcase"></i>
              <p>
                Work Experience
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings4',[$phone])}}" class="nav-link ">
              <i class="nav-icon fas fa-solid fa-user"></i>
              <p>
                Family Information
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings5',[$phone])}}" class="nav-link ">
              <i class="nav-icon fas fa-solid fa-briefcase"></i>
              <p>
                References
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
              </p>
            </a>
          </li>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  {{-- main content --}}
  @php($company = array_column($usersDetails, 'company_name'))

  <div id="personalInfo">
    <fieldset>
      <div class="box-border ">
        <form action="{{route('infoUpdate')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <input type="hidden" name="user_number" value="{{$usersDetails['phone']}}">
              <label for="NID_BRN"><b>NID OR Birth Reg Number : </b></label>
              <input type="text" name="NID_BRN" id="NID_BRN" value="{{$usersDetails['NID_BRN']}}">
              @error('NID_BRN')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="driving_license"><b>Driving License :</b></label>
                <input type="text" name="driving_license" id="driving_license" value="{{$usersDetails['driving_license']}}">
                @error('driving_license')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="col-md-6 col-sm-12">
              <label for="passport"><b>Passport :</b></label><br>
                <input type="text" name="passport" id="passport" value="{{$usersDetails['passport']}}">
                @error('passport')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
              <label for="nationality"><b>Nationality</b></label>
              <input type="text"  name="nationality" id="nationality" value="{{$usersDetails['nationality']}}" >
              @error('nationality')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
              <label for="present_address"><b>Present Address</b></label>
              <input type="text" name="present_address" id="present_address" value="{{$usersDetails['present_address']}}" >
              @error('present_address')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
              <label for="permanent_address"><b>Permanent Address</b></label>
              <input type="text" name="permanent_address" id="permanent_address" value="{{$usersDetails['permanent_address']}}">  
              @error('permanent_address')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
           
            <div class="col-md-6 col-sm-12">
              @php($divisions=\App\Models\Division::orderBy('name', 'ASC')->get())
              <label><b>&nbsp; Devision :</b> </label><br>
              <select name="division" id="division" class="chosen" data-placeholder="Choose Your division..."  required>
                  <option value="{{$usersDetails['division']}}">{{$usersDetails['division']}}</option>
                  @foreach($divisions as $dis)
                      <option value="{{$dis->id}}" >{{$dis->name}}</option>
                  @endforeach
              </select>
              @error('division')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="col-md-6 col-sm-12">
              <label><b>&nbsp; District :</b></label><br>
              <select name="district" id="district" data-placeholder="Choose Your District..." required>
                  <option value="{{$usersDetails['district']}}">{{$usersDetails['district']}}</option>
              </select>
              @error('district')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="col-md-6 col-sm-12">
              <label><b>&nbsp; Upazila :</b></label><br>
              <select name="upazila" id="upazila" data-placeholder="Choose Your Upazila..." required>                                
                  <option value="{{$usersDetails['upazila']}}">{{$usersDetails['upazila']}}</option>
              </select>
              @error('upazila')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <br>
            <button type="submit">change</button>
          </div>
        </form>
      </div>  
    </fieldset>  
  </div>


  <footer class="main-footer" style="margin-top: 25rem">
    <strong>Copyright &copy; 2014-2021 <a href="https://iglweb.com">IGLGROUP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
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
  
</div>
<!-- ./wrapper -->




@endsection