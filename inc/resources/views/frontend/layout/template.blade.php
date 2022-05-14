<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.includes.header')
</head>
<body>
  @if(session()->has('phone'))
    @include('frontend.includes.menubarSession')
  @else
    @include('frontend.includes.menubar')
  @endif
  
  @yield('content') 

  @include('frontend.includes.footer')

  @yield('customer_script')
</body>
</html>


















{{-- <section>
  <div class="sep-section"></div>
</section>
@include('frontend.includes.slider')


<!-- Offer
================================================== -->
<section>
  <div class="sep-section"></div>
</section>
@include('frontend.includes.about')

<!-- End offer section -->

<!-- Features services
================================================== -->
@include('frontend.includes.services')

<!-- End features-section -->
<!-- Video section
================================================== -->
@include('frontend.includes.video')

<!-- End Video section -->

<!-- Team
================================================== -->
@include('frontend.includes.team')

<!-- End team section -->

<!-- Banner-Services
================================================== -->
@include('frontend.includes.banner')

<!-- End Banner services section -->

<section>
  <div class="sep-section"></div>
</section>

<!-- Blog section-1
================================================== -->
@include('frontend.includes.blog')

<!-- End blog-section -->

<section>
  <div class="sep-section"></div>
</section>   


<section>
  <div class="sep-section"></div>
</section> --}}