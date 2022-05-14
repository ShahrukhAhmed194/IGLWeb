@extends('frontend.layout.template')

@section('title','Team')

@section('content')

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

@include('frontend.includes.location')

@endsection
    