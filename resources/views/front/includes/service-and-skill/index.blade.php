<!-- service -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h5 class="section-title-sm">Recent BLog </h5>
                <h2 class="section-title section-title-border">Latest Recent BLog</h2>
            </div>
            <!-- service item -->
            @foreach($recentBlogs as $recentBlog)
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card text-center">
                    <h4 class="card-title pt-3">{{$recentBlog->main_title}}</h4>
                    <div class="card-img-wrapper">
                        <img class="card-img-top rounded-0" src="{{asset($recentBlog->image)}}" alt="service-image">
                    </div>
                    <div class="card-body p-0">
                        <i class="square-icon translateY-33 rounded ti-bar-chart"></i>
                        <p class="card-text mx-2 mb-0">{!! $recentBlog->short_description !!}</p>
                        <a href="{{route('blog.single',['id' => $recentBlog->id])}}" class="btn btn-secondary translateY-25">Read
                            More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="about section-sm overlay" style="background-image: url({{asset('/')}}front/assets/images/about-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto">
                <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                    <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                    <p class="text-white mb-40">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div>
                        <ul class="d-inline-block pl-0 mr-5">
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                        </ul>
                        <ul class="d-inline-block pl-0">
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                            <li class="font-secondary mb-10 text-white">
                                <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                        </ul>
                    </div>
                    <a href="service.html" class="btn btn-primary mt-4">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- skill -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="section-title-sm">Best Service</h5>
                <h2 class="section-title section-title-border-half">Why Choose Us</h2>
            </div>
            <div class="col-lg-7">
                <div class="mb-40">
                    <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed eiusmod tempor incididunt laboris nisi
                        ut aliquip ex ea commodo consequat. </p>
                    <p class="text-dark mb-30">Duis aute irure dolor in reprehenderit voluptate
                        velit esse cillum dolore fugiat nulla pariatur.Excepteur
                        sint ocaecat cupidatat non proident sunt culpa qui officia deserunt mollit
                        anim id est laborum. sed
                        perspiciatis unde omnisiste natus error sit voluptatem
                        accusantium.doloremque ladantium totam rem
                        aperieaque ipsa quae ab illo inventore.veritatis. et quasi architecto beatae
                        vitae dicta sunt explicabo.</p>
                </div>
                <!-- fun-fact -->
                <div class="mb-md-50">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                <i class="round-icon mr-sm-3 ti-server"></i>
                                <div class="text-center text-sm-left">
                                    <h2 class="count mb-0" data-count="230">0</h2>
                                    <p class="mb-0">Projects Done</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                <i class="round-icon mr-sm-3 ti-face-smile"></i>
                                <div class="text-center text-sm-left">
                                    <h2 class="count mb-0" data-count="789">0</h2>
                                    <p class="mb-0">Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column flex-sm-row align-items-center">
                                <i class="round-icon mr-sm-3 ti-thumb-up"></i>
                                <div class="text-center text-sm-left">
                                    <h2 class="count mb-0" data-count="580">0</h2>
                                    <p class="mb-0">Cup Of Coffee</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- progressbar -->
            <div class="col-lg-4 offset-lg-1">
                <div class="progressbar">
                    <h5 class="progressbar-title">Branding</h5>
                    <div class="progress" data-percent="85%">
                        <div class="progress-bar progress-bar-striped" style="width: 85%;">
                            <div class="progress-bar-value">85%</div>
                        </div>
                    </div>
                </div>
                <div class="progressbar">
                    <h5 class="progressbar-title">Consulting</h5>
                    <div class="progress" data-percent="90%">
                        <div class="progress-bar progress-bar-striped" style="width: 90%;">
                            <div class="progress-bar-value">90%</div>
                        </div>
                    </div>
                </div>
                <div class="progressbar">
                    <h5 class="progressbar-title">Business</h5>
                    <div class="progress" data-percent="75%">
                        <div class="progress-bar progress-bar-striped" style="width: 75%;">
                            <div class="progress-bar-value">75%</div>
                        </div>
                    </div>
                </div>
                <div class="progressbar">
                    <h5 class="progressbar-title">Promotion</h5>
                    <div class="progress" data-percent="90%">
                        <div class="progress-bar progress-bar-striped" style="width: 90%;">
                            <div class="progress-bar-value">90%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /skill -->
