<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">BRAND</a>
        <button class="navbar-toggler" type="button" data-bs-target="#menu" data-bs-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('all-product') }}" class="nav-link">Product</a></li>
                <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li><a href="{{ route('registration') }}" class="nav-link">Registration</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-target="#dropdown" data-bs-toggle="dropdown">Social Media</a>
                    <ul class="dropdown-menu" id="dropdown">
                        <li><a href="https://twitter.com/?lang=en" class="dropdown-item" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/?lang=en" class="dropdown-item" target="_blank">Twitter</a></li>
                        <li><a href="https://twitter.com/?lang=en" class="dropdown-item" target="_blank">LinkedIN</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('main-content')

@yield('home-product')


<script src="{{ asset('/js/jquery-3.6.0.') }}"></script>
<script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>
