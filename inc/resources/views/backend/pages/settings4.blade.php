@extends('backend.layout.settingsTemplate')
@section('title', 'Profile')
@section('content')
<div class="wrapper">
  @php $phone = session('phone');
  // $company = array_column($usersDetails, 'company_name');
  @endphp
  {{-- // @foreach($company as $key => $value)
  // @endforeach --}}

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
            <a href="{{route('settings3',[$phone])}}" class="nav-link ">
              <i class="nav-icon fas fa-solid fa-briefcase"></i>
              <p>
                Work Experience
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings4',[$phone])}}" class="nav-link active">
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
    {{-- @foreach($company as $key => $value) --}}

        <form action="{{route('familyUpdate')}}" method="POST">
          @csrf
          <h3 class="text-center">Father Information</h3><br>
          <div class="row">
            <input type="hidden" name="id" value="{{$usersDetails['id']}}">
            <input type="hidden" name="number" value="{{$usersDetails['number']}}">

            <div class="col-md-6 col-sm-12">
              <label id="father_name"><b>Father Name : </b></label>
              <input type="text" placeholder="Enter Father Name" name="father_name" id="father_name" value="{{$usersDetails['father_name']}}" >
              @error('father_name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="col-md-6 col-sm-12">  
              <label id ="father_occupation"><b>Occupation : </b></label>
              <input type="text" placeholder="Father Occupation" name="father_occupation" id="father_occupation" value="{{$usersDetails['father_occupation']}}" >
              @error('father_occupation')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label id="father_nid"><b>Father NID : </b></label>
                <input type="text" placeholder="Enter Father NID" name="father_nid" id="father_nid" value="{{$usersDetails['father_nid']}}" >
                @error('father_nid')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label id="father_mobile"><b>Phone Number : </b></label>
                <input type="tel" placeholder="01*********" name="father_mobile" id="father_mobile" pattern="[0-1]{2}[0-9]{9}" value="{{$usersDetails['father_mobile']}}">
                @error('father_mobile')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
                <label id="father_email"><b>Email : </b></label>
                <input type="email" placeholder="Father Email" name="father_email" id="father_email" value="{{$usersDetails['father_email']}}">
                @error('father_email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

          </div>
          <br>
          <h3 class="text-center">Mother's Information.</h3>
          <div class="row">
            <div class="col-md-6 col-sm-12">
                <label for="mother_name"><b>Mother Name : </b></label>
                <input type="text" placeholder="Enter Mother Name" name="mother_name" id="mother_name" value="{{$usersDetails['mother_name']}}">
                @error('mother_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
                <label for ="mother_occupation"><b>Occupation : </b></label>
                <input type="text" placeholder="Mother Occupation" name="mother_occupation" id="mother_occupation" value="{{$usersDetails['mother_occupation']}}">
                @error('mother_occupation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="mother_nid"><b>Mother NID : </b></label>
                <input type="text" placeholder="Enter Mother NID" name="mother_nid" id="mother_nid" value="{{$usersDetails['mother_nid']}}">
                @error('mother_nid')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">
                <label for="mother_mobile"><b>Phone Number : </b></label>
                <input type="tel" placeholder="01*********" name="mother_mobile" id="mother_mobile" pattern="[0-1]{2}[0-9]{9}" value="{{$usersDetails['mother_mobile']}}">
                @error('mother_mobile')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
                <label for="mother_email"><b>Email : </b></label>
                <input type="email" placeholder="Mother Email" name="mother_email" id="mother_email" value="{{$usersDetails['mother_email']}}">
                @error('mother_email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <br>
          <h3 class="text-center">Siblings.</h3>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <label for="brothers"><b>Brothers : </b></label>
              <input type="text" placeholder="Put 0 If Not Any" name="brothers" id="brothers" value="{{$usersDetails['brothers']}}">
              @error('brothers')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
                <label for="sisters"><b>Sisters : </b></label>
                <input type="text" placeholder="Put 0 If Not Any" name="sisters" id="sisters" value="{{$usersDetails['sisters']}}">
                @error('sisters')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>   
          </div>
          <br>
          <button type="submit">change</button>

        </form>
      {{-- @endforeach --}}

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