@extends('front.master')

@section('title')
    User Login
@endsection

@section('body')
    <section class="d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="signup">
                        <div class="row">
                            <div class="col-md-5 signup-greeting overlay" style="background-image: url({{asset('/')}}front/assets/images/signup.jpg);">
                                <img src="{{asset('/')}}front/assets/images/logo-signup.png" alt="logo">
                                <h4>Welcome!</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna.</p>
                            </div>
                            <div class="col-md-7">
                                <div class="signup-form">
                                    <form action="#" class="row">
                                        <div class="col-12">
                                            <h4>Login</h4>
                                            <p class="float-sm-right">Need An Account?
                                                <a href="{{route('user.register')}}">Sign Up</a>
                                            </p>
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-12">
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary btn-sm">Login</button>
                                        </div>
                                        <div class="col-sm-8 text-sm-right">
                                            <p class="signup-with">Or Login with</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-facebook">
                                                        <i class="ti-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-google">
                                                        <i class="ti-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
