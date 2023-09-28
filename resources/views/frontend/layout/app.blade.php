<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GFM</title>

    <script src="https://kit.fontawesome.com/04158e9780.js"></script>
    <script src="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap"
        rel="stylesheet"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("frontend/style2.css")}}">
    @yield('links')

</head>

<body>
    <nav>
        {{-- <div class="homepage-searchbar"><input type="search" placeholder="search" ></div> --}}
        <div class="header1-container">
            <div class="logo">
                <img src="{{asset("frontend/images/mainlogo.png")}}">
            </div>
            <div class="links">
                <ul class="flex-list">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('aboutpages')}}">About</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="{{route('contactform')}}">Contact Us</a></li>
                    <li><a href="#"></a>Register/Login</li>
                </ul>

            </div>
            <div class="icons">
                <li class="cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li class="heart"><a href="#"><i class="fas fa-heart"></i></a></li>
            </div>

        </div>
    </div>
</nav>


   {{--section--}}
   @yield('content')

    <footer class="footer-section">
        <div class="footercontainer">
            <div class="companylogo footer-items">


         <span class="logofooter"><img src="{{asset("frontend/images/mainlogo.png")}}"></span><br>
                <p> Stay connected with us through our blog, where we share valuable insights,
                    recipes, and tips to help you make the most of your groceries. Sign up
                    for our newsletter to receive exclusive offers, updates, and promotions.
                </p>
                <div class="social-medialink">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>


            <div class="contactinfo footer-items">
                <h2>Contact info</h2>
                <!-- <div class="address"> -->
                <ul class="address">
                    <li><i class="fa-solid fa-location-dot"></i>
                        <p>Birtamode,Jhapa</p>
                    </li>
                    <li><i class="fa-solid fa-phone"></i>
                        <p>9835678292</p>
                    </li>
                    <li><i class="fa-solid fa-envelope"></i>
                        <p>gfm@gmail.com</p>
                    </li>
                </ul>

            </div>
            <div class="Quicklinks footer-items">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#"></a>Help Center</li>
                    <li><a href="#"></a>Order Tracking</li>
                    <li><a href="#"></a>Testimonials</li>
                    <li><a href="#"></a>Terms and Conditions</li>
                    <li><a href="#"></a>FAQ</li>

                </ul>
            </div>

            <div class="service footer-items">
                <h2>Service</h2>
                <ul>
                    <li><a href="#"></a>View Cart</li>
                    <li><a href="#"></a>My account</li>
                    <li><a href="#"></a>Track my Order</li>
                    <li><a href="#"></a>Help</li>

                </ul>
            </div>

        </div>
    </footer>

    <div id="copyright"></div>

    <script src="{{asset("frontend/copyright.js")}}"></script>
    <script src="{{asset("frontend/slider.js")}}"></script>
    @yield('scripts')
</body>

</html>
