@extends('frontend.layout.template')

@section('title','Home')

@section('content')
{{-- preloader section --}}
<div id="preloader">      
    <div id="loading-animation">&nbsp;</div>
  </div>
  {{-- preloader section end--}}

<!-- Start Hero Section -->
<div class="sep-section"></div>
<section>
  <div id="hero-section" class="landing-hero" data-stellar-background-ratio="0">
    <div class="hero-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="hero-text">
              <div class="herolider">
                  <h1>IGL WEB</h1>
                  <div class="div-line"></div>
                  <p class="hero">when an unknown printer took a galley of type and scrambled it
                    to make a type specimen book.&amp; It has survived not only five centuries,
                      but also the leap into electronic typesetting.
                  </p>
              </div> <!-- end herolider -->
            </div> <!-- end hero-text -->
            <div class="hero-btn">
              <a href="#landing-offer" class="btn btn-clean">Read more</a>
            </div> <!-- end hero-btn -->

          </div> <!-- end col-md-6 -->
        </div> <!-- end row -->
      </div> <!-- End container -->
    </div> <!-- End hero-content -->
  </div> 
</section>
<div class="sep-section"></div>
<!-- End hero-section -->

<!-- Start About Section -->
<section>
  <div id="landing-offer" class="pad-sec">
    <div class="container">
      <div class="title-section big-title-sec animated out" data-animation="fadeInUp" data-delay="0">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h2 class="big-title">Some information about us</h2>
            <h1 class="big-subtitle">IGL GROUP &amp; An ICT Umbrella.</h1>
            <hr>
            <p class="about-text">Cras porta dolor ut velit imperdiet, quis sodales tellus facilisis. Vestibulum magna turpis, tincidun blandit semper lorem. Mauris nodesterin feugiat neque, a aliquet ligula. Sed non felis tincidunt, facilisis felis vitae, mollis est. Nulla sapien dui, feugiat sed velit a, egestas porta magna.</p>
          </div>
        </div> <!-- End row -->
      </div> <!-- end title-section -->

      <div class="offer-boxes">

        <div class="row">
        <div class="col-sm-4">
          <div class="offer-post text-center animated out" data-animation="fadeInLeft" data-delay="0">
            <div class="">
              <span class="img-size"><img src="{{asset('assets/images/info/work.jpeg')}}" alt="CCTV"></span>
            </div>
            <h4>CCTV Installation &amp;IT Support </h4>
            <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
          </div> <!-- End offer-post -->
        </div> <!-- End col-sm-4 -->

        <div class="col-sm-4">
          <div class="offer-post text-center animated out" data-animation="fadeInUp" data-delay="0">
            <div class="">
              <span class="img-size"><img src="{{asset('assets/images/info/work.jpeg')}}" alt=""></span>
            </div>
            <h4>Software Technology</h4>
            <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
          </div> <!-- End offer-post -->
        </div> <!-- End col-sm-4 -->

        <div class="col-sm-4">
          <div class="offer-post text-center animated out" data-animation="fadeInRight" data-delay="0">
            <div class="">{{-- offer-icon .. icon-lifesaver--}}
              <span class="img-size"><img src="{{asset('assets/images/info/work.jpeg')}}" alt=""></span>
            </div>
            <h4>Dedicated support</h4>
            <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna. Quisque id libero risus. Aliquam accumsan erat id sem placerat tempus.</p>
          </div> <!-- End offer-post -->
        </div> <!-- End col-sm-4 -->

        </div> <!-- End row -->

      </div> <!-- End offer-boxes -->
    </div> <!-- End container -->
  </div> <!-- End landing-offer-section -->
</section>
<!-- End About Section -->

<!-- Start Services Section -->
<div class="sep-section"></div>
<section>
    <div id="features-section" class="pad-sec">
      <div class="container">
        <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2>What we do?</h2>
              <hr>
              <p>Seamlessly restore client-focused potentialities rather than functional strategic theme areas.</p>
            </div> <!-- edn col-sm-8 -->
          </div> <!-- End row -->
        </div> <!-- end title-section -->
        <div class="row">
          <div class="col-md-3 without-padding">
            <div class="left-features-services">
              <ul class="features-list">
                <!-- feature -->
                <li>
                  <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-strategy"></i></a></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}"> Internet Service Provider</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div> <!-- end features-box-content -->
                  </div> <!-- end left-features-box -->
                </li>
                <!-- feature -->
                <li>
                  <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-browser"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}"> ERP Software Development</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div> <!-- end features-box-content -->
                  </div> <!-- end left-features-box -->
                </li>
                <!-- feature -->
                <li>
                  <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-mobile"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}"> Moblie Apps Development</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div> <!-- end features-box-content -->
                  </div> <!-- end left-features-box -->
                </li>
                <!-- feature -->
                <li>
                  <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-puzzle "></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}"> Web Design and Development</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div> <!-- end features-box-content -->
                  </div> <!-- end left-features-box -->
                </li>
                <!-- feature -->
                <li>
                  <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-envelope"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}"> Web & Mail Hosting</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div> <!-- end features-box-content -->
                  </div> <!-- end left-features-box -->
                </li>
              </ul> <!-- end features-list -->
            </div> <!-- end left-features-service -->
          </div><!--  end col-md-3 -->

          <div class="col-md-6">
            <div class="features-image animated out" data-animation="fadeInUp" data-delay="0">
              <img src="{{asset('assets/images/temp/woman.jpg')}}" alt="">
            </div> <!-- end features-image -->
          </div> <!-- end col-md-6 -->

          <div class="col-md-3 without-padding">
            <div class="right-features-services">
              <ul class="features-list">
                <!-- feature -->
                <li>
                  <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-chat"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}">Corporate SMS & Facebook Marketing.</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div>
                  </div>
                </li>
                <!-- feature -->
                <li>
                  <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-adjustments"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}">Network Solution & Data Center</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna</p>
                    </div>
                  </div>
                </li>
                <!-- feature -->
                <li>
                  <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-shield"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}"> Digital Security System</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div>
                  </div>
                </li>
                <!-- feature -->
                <li>
                  <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-globe"></a></i></span>
                    <div class="features-box-content">
                      <h6><a href="{{route('service')}}">Call Center Solution & Services</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div>
                  </div>
                </li>
                <!-- feature -->
                <li>
                  <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                    <span class="iconbox"><a href="{{route('service')}}"><i class="icon-laptop"></a></i></span>
                    <div class="features-box-content">
                      <h6> <a href="{{route('service')}}"> Computer Sales & Corporate Support</a></h6>
                      <p>Mauris eros tortor, tristique cursus porttitor et, luctus sed urna.</p>
                    </div>
                  </div>
                </li>
              </ul> <!-- end features-list -->
            </div>
          </div> <!-- end col-md-3 -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </div>
</section>
<div class="sep-section"></div>
<!-- End Services Section -->

<!-- Start Video Section -->
<div class="sep-section"></div>
<section>
  <div class="container bg-dark">
    <div class="text-center"><h1>Check out our presentation</h1></div>
    <div class="row ">
      <div class="col-sm-12 ">
        <div class=" text-center">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/r6HOw7AQwI8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>              <div class="video-head">Introducing Video</div>
        </div>
      </div> <!-- end col-sm-6 -->
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<div class="sep-section"></div>
<!-- End Video Section -->

<!-- Start Team Section -->
<div class="sep-section"></div>
<section>
        <div id="team-section" class="pad-sec">
          <div class="container">
            <div class="title-section animated out" data-animation="fadeInUp" data-delay="0">
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <h2>Our awesome team</h2>
                  <hr>
                  <p>Seamlessly restore client-focused potentialities rather than functional strategic theme areas. Credibly e-enable value-added portals with clicks-and-mortar initiatives.</p>
                </div>
              </div> <!-- End row -->
            </div> <!-- end title-section -->
    
            <div class="team-members">
              <div class="row">
    
                <!-- member-team -->
                <div class="col-sm-4">
                  <div class="member-team animated out" data-animation="fadeInLeft" data-delay="0">
                    <img src="{{asset('assets/images/team/m1.jpg')}}" alt="">
                    <div class="magnifier">
                      <div class="magnifier-inner">
                        <h3>MICHAEL ROOF</h3>
                        <p>Co_founder &amp; Designer</p>
                        <p>We’ll etch your brand onto tangible objects: business cards, ads, stickers, brochures, you name it. You won’t see business cards, ads, stickers, brochures anything until we’re done drooling at the result.</p>
                        <ul class="social-icons">
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>
    
                        </ul>
                      </div> <!-- End magnifier-inner -->
                    </div> <!-- End magnifier -->
                  </div> <!-- End member-team -->
                </div> <!-- End col-sm-4 -->
    
                <!-- member-team -->
                <div class="col-sm-4">
                  <div class="member-team animated out" data-animation="fadeInUp" data-delay="0">
                    <img src="{{asset('assets/images/team/m2.jpg')}}" alt="">
                    <div class="magnifier">
                      <div class="magnifier-inner">
                        <h3>CHARLES WHITE</h3>
                        <p>Co_founder &amp; Designer</p>
                        <p>We’ll etch your brand onto tangible objects: business cards, ads, stickers, brochures, you name it. You won’t see business cards, ads, stickers, brochures anything until we’re done drooling at the result.</p>
                        <ul class="social-icons">
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>
    
                        </ul>
                      </div> <!-- End magnifier-inner -->
                    </div> <!-- End magnifier -->
                  </div> <!-- End member-team -->
                </div> <!-- End col-sm-4 -->
    
                <!-- member-team -->
                <div class="col-sm-4">
                  <div class="member-team animated out" data-animation="fadeInRight" data-delay="0">
                    <img src="{{asset('assets/images/team/m3.jpg')}}" alt="">
                    <div class="magnifier">
                      <div class="magnifier-inner">
                        <h3>MARTIN CAMBRIGE</h3>
                        <p>Head Support</p>
                        <p>We’ll etch your brand onto tangible objects: business cards, ads, stickers, brochures, you name it. You won’t see business cards, ads, stickers, brochures anything until we’re done drooling at the result.</p>
                        <ul class="social-icons">
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
    
                          <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>
    
                        </ul>
                      </div> <!-- End magnifier-inner -->
                    </div> <!-- End magnifier -->
                  </div> <!-- End member-team -->
                </div> <!-- End col-sm-4 -->
    
              </div>
            </div> <!-- End team-members -->
          </div> <!-- End container -->
        </div> <!-- End team-section -->
</section>
<div class="sep-section"></div>
<!-- End Team Section -->

<!-- Start Blog Section -->
<div class="sep-section"></div>
<section id="blogPost">
        <div id="creative-section-1" class="pad-sec">
          <div class="container">
            <div class="row">
  
              <div class="col-sm-7 img-creative-left text-center animated out" data-animation="fadeInLeft" data-delay="0">
                <div class="img">
                  <img src={{asset('assets/images/temp/cover.png')}} alt="Dhur sai">
                </div>
              </div> <!-- End col-sm-8 -->
  
              <div class="col-sm-5 creative-content-right animated out" data-animation="fadeInRight" data-delay="0">
                <div class="section_header">
                  <h2>Our Inovative Projects</h2> 
                </div> <!-- End section_header -->
  
                  <p> Lorem ipsum <span>dolor</span> sit amet, consectetur adipisicing elit.Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
  
                <div class="view-more">
                  <a href="#services-section" class="btn btn-lg btn-primary">View online</a>
                </div>
              </div> <!-- End feature-content -->
  
            </div> <!-- End row -->
          </div> <!-- End container -->
        </div> <!-- End feature-section -->
</section>
<!-- End Blog Section -->
<div class="sep-section"></div>
      
<!-- Clients-section
  ================================================== -->
  
    <div id="clients-section" class="clients-bg" data-stellar-background-ratio="0">
      <div class="container">
        <div class="row">
            
            <!-- client -->
          <div class="col-xs-4 col-sm-2">
            <div class="client">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/clients/client_1.png')}}" alt=""></a>
            </div>
          </div> <!-- end col-xs-6 -->

            <!-- client -->
          <div class="col-xs-4 col-sm-2">
            <div class="client">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/clients/client_2.png')}}" alt=""></a>
            </div>
          </div> <!-- end col-xs-6 -->

            <!-- client -->
          <div class="col-xs-4 col-sm-2">
            <div class="client">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/clients/client_3.png')}}" alt=""></a>
            </div>
          </div> <!-- end col-xs-6 -->

            <!-- client -->
          <div class="col-xs-4 col-sm-2">
            <div class="client">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/clients/client_4.png')}}" alt=""></a>
            </div>
          </div> <!-- end col-xs-6 -->

            <!-- client -->
          <div class="col-xs-4 col-sm-2">
            <div class="client">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/clients/client_1.png')}}" alt=""></a>
            </div>
          </div> <!-- end col-xs-6 -->

            <!-- client -->
          <div class="col-xs-4 col-sm-2">
            <div class="client">
              <a href="{{route('home')}}"><img src="{{asset('assets/images/clients/client_2.png')}}" alt=""></a>
            </div>
          </div> <!-- end col-xs-6 -->

        </div> <!-- End row -->
      </div> <!-- End container -->
    </div> 
  </section>
<!-- End clients-section -->
<div class="sep-section"></div>

@include('frontend.includes.location')

@endsection
    