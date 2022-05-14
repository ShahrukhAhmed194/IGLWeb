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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
            <a href="{{route('settings2',[$phone])}}" class="nav-link ">
              <i class=" fas fa-solid fa-address-book"></i>
              <p>
                Personal Information
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings3',[$phone])}}" class="nav-link active">
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

<div id="workExperience">
  <fieldset>
    <div class="box-border ">
      @foreach ($company as $key => $value)
      <h3 class="text-center">Work Experience {{$key+1}}</h3><br>

        <form action="{{route('expUpdate')}}" method="POST">
          @csrf
          <div class="row">
            
            <input type="hidden" name="id" value="{{$usersDetails[$key]['id']}}">
            <div class="col-md-6 col-sm-12">
              <label id="label_company"><b>Company Name : </b></label>
              <input type="text" name="company_name" id="company_name" value="{{$usersDetails[$key]['company_name']}}">
              @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
              <label id="label_company_address"><b>Company Address : </b></label>
              <input type="text" name="company_address" id="company_address" value="{{$usersDetails[$key]['company_address']}}">
              @error('company_address')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
              <label id="label_company_mobile"><b>Company  Mobile : </b></label>
              <input type="text" name="company_mobile" id="company_mobile" pattern="[0-1]{2}[0-9]{9}"  
              value="{{$val = $usersDetails[$key]['company_mobile'] =='01000000000'? 'N/A':$usersDetails[$key]['company_mobile']}}">
              @error('company_mobile')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
              <label id="label_designation"><b>Designation : </b></label>
              <input type="text" name="designation" id="designation" value="{{$usersDetails[$key]['designation']}}">
              @error('designation')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
              <label id="label_reporting_boss"><b>Company Reporting Boss : </b></label>
              <input type="text" name="reporting_boss" id="reporting_boss" value="{{$usersDetails[$key]['reporting_boss']}}">
              @error('reporting_boss')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
              <label id="label_reason"><b>Leaving Reason : </b></label>
              <input type="text" name="reason" id="reason" value="{{$usersDetails[$key]['reason']}}">
              @error('reason')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div> 
            <button type="submit">change</button>
          </div>
        </form>
      @endforeach
     
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
</div>
<!-- ./wrapper -->


@endsection