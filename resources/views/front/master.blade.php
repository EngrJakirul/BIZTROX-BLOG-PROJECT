<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BIZTROX</title>
    @include('front.includes.meta.index')
    @include('front.includes.css.index')
</head>

<body>

<!-- preloader start -->
@include('front.includes.preloader.index')
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    @include('front.includes.top-header.index')
    <!-- nav bar -->
    @include('front.includes.nav-bar.index')
</header>

<!-- Search Form -->
@include('front.includes.search-form.index')
<!-- /navigation -->
@yield('body')
<!-- footer -->
@include('front.includes.footer.index')
<!-- /footer -->

<!-- jQuery -->
@include('front.includes.js.index')

</body>

</html>
