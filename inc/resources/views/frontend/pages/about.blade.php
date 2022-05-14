@extends('frontend.layout.template')

@section('title','About')

@section('content')

<div class="sep-section"></div>
<div id="wrapper">
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
  <div class="sep-section"></div>
  @include('frontend.includes.location')

@endsection
    