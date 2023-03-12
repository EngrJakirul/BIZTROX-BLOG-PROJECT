@extends('front.master')

@section('title')
    home-page
@endsection;

@section('body')

    @include('front.includes.hero-section.index')

    @include('front.includes.service-and-skill.index')
    <!-- work -->
    @include('front.includes.project-section.index')
    <!-- /work -->

    <!-- mission -->
    @include('front.includes.our-mission-section.index')
    <!-- /mission -->

    <!-- promo-video -->
    @include('front.includes.video-section.index')
    <!-- /promo-video -->

    <!-- testimonial -->
    @include('front.includes.clients-testimonial.index')
    <!-- /testimonial -->

    @include('front.includes.get-an-quote.index')

    <!-- blog -->
    @include('front.includes.news-blog-section.index')
    <!-- /blog -->

    <!-- client logo slider -->
    @include('front.includes.logo-slider.index')
    <!-- /client logo slider -->

@endsection
