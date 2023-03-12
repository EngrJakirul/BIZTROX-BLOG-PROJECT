<section class="section bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title section-title-border-gray">Recent Blog</h2>
            </div>
        </div>
        <!-- work slider -->
        <div class="row work-slider">
            <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="{{asset('/')}}front/assets/images/work-1.jpg" alt="work-image">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset('/')}}front/assets/images/work-1.jpg">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="project-single.html">Cras Sed Elit Sit Amet.</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            @foreach($previousRecentBlogs as $previousRecentBlog)
                <div class="col-lg-3 px-0">
                <div class="work-slider-image">
                    <img class="img-fluid w-100" src="{{asset($previousRecentBlog->image)}}">
                    <div class="image-overlay">
                        <a class="popup-image" data-effect="mfp-zoom-in" href="{{asset($previousRecentBlog->image)}}">
                            <i class="ti-search"></i>
                        </a>
                        <a class="h4" href="{{route('blog.single', ['id' => $previousRecentBlog->id])}}">{{$previousRecentBlog->main_title}}</a>
                        <p>by Admin</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
