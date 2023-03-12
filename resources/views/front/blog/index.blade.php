@extends('front.master')
@section('title')
    Blog Page
@endsection
@section('body')
    <section class="page-title overlay" style="background-image: url({{asset('/')}}front/assets/images/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Our Blog</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Our Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- blog-item -->
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top" src="{{asset($blog->image)}}" alt="blog-thumbnail">
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex">
                                <div class="py-3 px-4 border-right text-center">
                                    <h3 class="text-primary mb-0">25</h3>
                                    <p class="mb-0">Nov</p>
                                </div>
                                <div class="p-3">
                                    <a href="{{route('blog.single', ['id' => $blog->id])}}" class="h4 font-primary text-dark">{{$blog->main_title}}</a>
                                    <p>by {{$blog->author->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$blogs->onEachSide(5)->links()}}
        </div>
    </section>
    <!-- /blog -->
@endsection
