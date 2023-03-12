@extends('front.master')
@section('title')
    Service Page
@endsection
@section('body')
    <section class="page-title overlay" style="background-image: url({{asset('/')}}front/assets/images/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Service</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Our Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- cta -->
    <section class="py-3 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-left mb-3 mb-lg-0">
                    <h3>We have 15 years experience in consultancy, biztrox give the smart solution for your business</h3>
                </div>
                <div class="col-lg-3 text-lg-right text-center align-self-center">
                    <a href="contact.html" class="btn btn-primary btn-sm">FREE ENQUARY</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /cta -->

    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset('/')}}front/assets/images/service-1.jpg" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Business Consulting</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset('/')}}front/assets/images/service-2.jpg" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Valuable Idea</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset('/')}}front/assets/images/service-3.jpg" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Market Strategy</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset('/')}}front/assets/images/service-4.jpg" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Business Consulting</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset('/')}}front/assets/images/service-5.jpg" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Valuable Idea</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- service item -->
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset('/')}}front/assets/images/service-6.jpg" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">Market Strategy</h4>
                            <p class="card-text mx-2 mb-0">Lorem ipsum dolor amet consecte tur adipisicing elit sed done eius mod tempor enim ad minim veniam
                                quis nostrud.</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /service -->

    <!-- clients -->
    <section class="clients section bg-secondary overlay-dark" style="background-image: url({{asset('/')}}front/assets/images/clients-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h5 class="section-title-sm text-color">Our Some</h5>
                    <h2 class="text-white mb-20">Satisfied Clients</h2>
                    <p class="text-white">Excepteur sint occaecat cupidatat non proident sunt culpa officia deserunt mollit anim id est laborum.Sed
                        ut perspiciatis unde omnis. natus error sit voluptem accusantium doloremqu laudantium totam remaperiam
                        eaque ipsa quae</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">
                            <ul class="pl-0">
                                <li class="text-center mb-3">
                                    <img src="{{asset('/')}}front/assets/images/client-logo-1-white.png" alt="client-logo">
                                </li>
                                <li class="text-center mb-3">
                                    <img src="{{asset('/')}}front/assets/images/client-logo-3-white.png" alt="client-logo">
                                </li>
                                <li class="text-center mb-3">
                                    <img src="{{asset('/')}}front/assets/images/client-logo-5-white.png" alt="client-logo">
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li class="text-center mb-3">
                                    <img src="{{asset('/')}}front/assets/images/client-logo-2-white.png" alt="client-logo">
                                </li>
                                <li class="text-center mb-3">
                                    <img src="{{asset('/')}}front/assets/images/client-logo-4-white.png" alt="client-logo">
                                </li>
                                <li class="text-center mb-3">
                                    <img src="{{asset('/')}}front/assets/images/client-logo-1-white.png" alt="client-logo">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clients -->

    <!-- testimonial -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="section-title-sm">Clients</h5>
                    <h2 class="section-title section-title-border"> What client Say </h2>
                </div>
                <div class="col-lg-5 col-md-5 pr-0 align-self-center">
                    <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/client.png" alt="clients-image">
                </div>
                <div class="col-lg-7 col-md-7 align-self-center pl-0">
                    <div class="testimonial-slider p-5">
                        <!-- slider item -->
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                        <!-- slider item -->
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                        <!-- slider item -->
                        <div class="outline-0">
                            <i class="testimonial-icon ti-quote-left"></i>
                            <p class="text-dark">Lorem ipsum dolor sit amet constur adipisicing elit sed eiusmtempor incid sed dolore magna aliqu enim minim veniam quis nostrud exercittion ullamco labo ris nisi aliquip excepteur.</p>
                            <h4 class="font-weight-normal">Julia Robertson</h4>
                            <h6 class="font-secondary text-color">Happy Clients</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /testimonial -->
@endsection
