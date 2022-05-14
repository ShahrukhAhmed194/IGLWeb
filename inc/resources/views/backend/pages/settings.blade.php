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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" onclick="fullscreen()"><i class="fas fa-bars"></i></a>
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
          <img src="{{asset('inc/storage/app/public/profile')}}/{{$usersDetails['image']}}" class="img-circle elevation-1" alt="User Image">
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
            <a href="{{route('settings',[$phone])}}" class="nav-link active">
            <i class="nav-icon fas fa fa-user"></i>
            <p>
                User Information
                <i style="padding-top: 15px;" class="right fas fa-angle-down"></i>
            </p>
            </a>
          </li>
          <li class="nav-item menu-open pt-2">
            <a href="{{route('settings2',[$phone])}}" class="nav-link ">
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

  <fieldset id="fieldset">
    <div class="box-border ">
      <form action="{{route('userUpdate')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row">
          <input type="hidden" name="find" value="{{$usersDetails['phone']}}">
            <div class="col-md-6 col-sm-12">
              <label id="label_phone"><b>Phone Number : </b></label>
              <input type="text" name="phone" id="phone" value="{{$usersDetails['phone']}}" readonly>
            </div>
            <div class="col-md-6 col-sm-12">
              <label id="label_name"><b>Name : </b></label>
              <input type="text"  name="name" id="name" value="{{$usersDetails['name']}}">
              @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">
              <label id="label_email"><b>Email : </b></label>
              <input type="email" name="email" id="email" value="{{$usersDetails['email']}}">
              @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6 col-sm-12">  
              <label id="label_password"><b>New Password : </b></label>
              <input type="password" name="password" id="password" value="">
              @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-6">
              <label id="label_image"><b>Profile Picture : </b></label><br>
              <img width="222px" src="{{asset('inc/storage/app/public/profile')}}/{{$usersDetails['image']}}"/>
              <input type="file" name="image" id="image">
              @error('image')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit">change</button>
        </div>
      </form>
    </div> 
  </fieldset>


  <footer class="main-footer" style="margin-top: 25rem">
    <strong>Copyright &copy; 2014-2021 <a href="https://iglweb.com">IGLGROUP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>


</div>
<!-- ./wrapper -->
<script>
  // function fullscreen(){
  //   ('#fieldset').removeClass('box-border');
  //   ('.fieldset').removeProperty({"margin-left"});
  //   alert('sdfjkdkdhfdjksa');
  // }
</script>
@endsection