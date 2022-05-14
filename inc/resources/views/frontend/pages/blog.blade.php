@extends('frontend.layout.template')

@section('title','Blog')

@section('content')

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

@include('frontend.includes.location')

@endsection
    