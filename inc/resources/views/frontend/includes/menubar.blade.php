<!-- Navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <a class="navbar-brand" href="{{route('home')}}" style="padding: 0px;"><img height="65px" src="{{asset('assets/images/iglIcon.png')}}" alt=""></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navigation-nav">
        <ul class="nav navbar-nav navbar-right">
          <li ><a class="section-scroll" href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('services')}}">Services</a></li>
          <li><a href="{{route('team')}}">Our Team</a></li>
          <li><a href="{{route('blog')}}">Blog</a></li>
          <li><a href="{{route('register')}}">Career</a></li>
          <li><a href="{{route('login')}}">login</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
<div class="sep-section"></div>

<!-- End Navbar -->