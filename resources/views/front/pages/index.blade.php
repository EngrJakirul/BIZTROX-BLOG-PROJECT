@extends('front.master')

@section('title')
    Our Project
@endsection
@section('body')

    <section class="page-title overlay" style="background-image: url({{asset('/')}}front/assets/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Project</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Our Project</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-2">Our Projects</h2>
                    <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        <br> tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-12">
                    <div class="project-menu text-center">
                        <ul class="controls list-inline">
                            <!-- filter item list -->
                            <li class="list-inline-item control active" data-filter="all">All</li>
                            <li class="list-inline-item control" data-filter="Marketing-Online">Marketing Online</li>
                            <li class="list-inline-item control" data-filter="Business-Strategy">Business Strategy</li>
                            <li class="list-inline-item control" data-filter="Ecomerce-Advice">Ecomerce Advice</li>
                            <li class="list-inline-item control" data-filter="Dynamic-Development">Dynamic Development</li>
                            <li class="list-inline-item control" data-filter="Financing">Financing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Business-Strategy">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-1.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Marketing-Online, Dynamic-Development">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-2.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Financing">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-3.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Marketing-Online">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-4.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Ecomerce-Advice">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-5.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Marketing-Online, Business-Strategy">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-6.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Ecomerce-Advice">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-7.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Dynamic-Development">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-8.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Business-Strategy Ecomerce-Advice">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-9.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Dynamic-Development, Financing">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-1.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Financing">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-5.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="Business-Strategy, Ecomerce-Advice">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/project-2.jpg" alt="project-image">
                        <div class="project-info">
                            <a href="project-single.html" class="h4">Finance Consultancy</a>
                            <p>
                                <i class="ti-tag"></i>Ecommerce Advice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
