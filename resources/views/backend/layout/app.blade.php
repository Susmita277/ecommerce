<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend layout</title>
    <script src="https://kit.fontawesome.com/04158e9780.js"></script>
    <link rel="stylesheet" href="{{ asset('backend/admin.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" data-purpose="Layout StyleSheet" title="Web Awesome"
        href="/css/app-wa-9a55d8748fd46de7b7977d9ee8dee7a4.css?vsn=d">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css">


    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite('resources/css/app.css')

    @yield('links')
</head>

<body>


    <div class="layout-grid-container">
        <div class="sidenav">  
            <div class="logo">
                <img src="{{ asset('frontend/images/mainlogo.png') }}"></div>    
            <ul>
                <li><a href="{{ route('dashboard') }}"><i class="fa-light fa-house"></i>Dashboard </a></li><br>
                <li><a href="{{ route('product.index') }}"><i class="fa-solid fa-bag-shopping"></i>Product</a></li><br>
                <li class="pages"><a href="#"><i class="fa-light fa-page"></i>Pages </a> </i>
                    <ul>
                        <li class="drpdown"><a href="#"><i class="fa-light fa-house"></i>Home</a></li>
                        <li class="drpdown"><a href="{{route('aboutus.index')}}"><i class="fa-light fa-address-card"></i>About</a></li>
                        <li class="drpdown"><a href="{{route('contactform.index')}}"><i class="fa-light fa-folder-user"></i>Contact Us</a></li>
                    </ul>
                </li><br>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i>Orders</a> </li><br>
                <li><a href="#"><i class="fa-solid fa-chart-simple"></i>Statistics</a></li><br>
                <li><a href="#"><i class="fa-solid fa-calendar"></i>Reviews</a></li><br>
                <li><a href="#"> <i class="fa-light fa-envelope-open"></i>Hot Offers</a></li><br>
                <li><a href="#"> <i class="fa-solid fa-gear"></i>Settings</a></li>
            </ul>
        </div>
        <div class="layout-maincontainer">
        <div class="nav-bar">
                <i class="fa-thin fa-square-user"></i>
                </div> <br> <br>
                @yield('main-content')
        </div>
       
     
    </div>

    <script src="{{ asset('backend/admin.js') }}"></script>
    @yield('scripts')
</body>

</html>

