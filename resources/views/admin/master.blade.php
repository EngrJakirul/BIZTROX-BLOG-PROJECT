<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.meta.index')
    <title>@yield('title')</title>
    @include('admin.includes.css.index')
</head>
<body data-sidebar="dark">
<div id="layout-wrapper">
    <header id="page-topbar">
        @include('admin.includes.nav-bar-header.index')
    </header>
@include('admin.includes.left-sidebar.index')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @include('admin.includes.page-title.index')
              @yield('body')
            </div>
        </div>
        @include('admin.includes.modal.index')
        @include('admin.includes.footer.index')
    </div>
</div>
@include('admin.includes.js.index')
</body>
</html>
