@extends('frontend.layout.template')

@section('title','Services')

@section('content')

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
@include('frontend.includes.location')

@endsection