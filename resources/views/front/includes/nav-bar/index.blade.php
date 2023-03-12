<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('/')}}front/assets/images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">All Blog Category</a>
                        <ul class="dropdown-menu">
                            @foreach($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="{{route('blog.category',['id' => $category->id])}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('about')}}">About Us</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('service')}}">Service</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('page')}}">Pages</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
