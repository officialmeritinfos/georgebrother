
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8" />

    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="AI integrated financial investment Agency"/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack('css')
    <style>
        .Swal.fire.text {
            margin: left;
            font-size: 70px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.21);
            margin-bottom: 28px;
        }
    </style>
    <!-- Favicon -->
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

    </style>

    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 20px;
            top: 30rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/skins/orange.css')}}">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('home/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('home/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('home/css/skins/blue.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/styleswitcher.css')}}" />

    <!-- Template JS Files -->
    <script src="{{asset('home/js/modernizr.js')}}"></script>
    <script src="https://cdn.js.delivr.net/npm/sweetalert2@8"></script>

</head>

<body>


<!-- SVG Preloader Starts -->
<style>
    #logo{

        width: 250px;
        height: 90px;
    }
</style>
<div id="preloader">
    <div id="preloader-content">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                    <feOffset dx="0" dy="0" result="offsetblur"/>
                    <feFlood flood-color="red"/>
                    <feComposite in2="offsetblur" operator="in"/>
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
    </div>
</div>
<!-- SVG Preloader Ends -->
<!-- Wrapper Starts -->
<div class="wrapper">
    <!-- Header Starts -->
    <header class="header">
        <div class="container">
            <div class="row">
                <!-- Logo Starts -->
                <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                    <a href="{{url('/')}}">
                        <img id="" class=""  width="250" src="{{asset('home/images/'.$web->logo)}}" alt="logo" style="width:150px;" >

                    </a>
                </div>
                <!-- Logo Ends -->
                <!-- Statistics Starts -->
                <div class="col-md-7 col-lg-7">
                    <ul class="unstyled bitcoin-stats text-center">
                        <li>
                            <h6>9,450 USD</h6><span>Last trade price</span></li>
                        <li>
                            <h6>+5.26%</h6><span>24 hour price</span></li>
                        <li>
                            <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                        <li>
                            <h6>2,231,775</h6><span>active traders</span></li>
                        <li>
                            <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                            <span>Live Bitcoin price</span>
                        </li>
                    </ul>
                </div>

                <!-- Statistics Ends -->
                <!-- User Sign In/Sign Up Starts -->
                <div class="col-md-3 col-lg-3" style="text-align: center !important;">
                    <ul class="unstyled user">
                        <li class="sign-in"><a href="{{route('login')}}" target="blank" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                        <li class="sign-in"><a href="{{route('register')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>

                        <div id="google_translate_element"></div>
                    </ul>
                </div>

                <!-- User Sign In/Sign Up Ends -->
                <div class="col-md-3 col-lg-3">
                    <ul class="unstyled user">
                        <li class="language dropdown">
                            <ul>

                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Menu Starts -->
        <nav class="site-navigation navigation" id="site-navigation">
            <div class="container">
                <div class="site-nav-inner">
                    <!-- Logo For ONLY Mobile display Starts -->
                    <a class="logo-mobile" href="{{url('/')}}">
                        <img id="" class="" width="150"  src="{{asset('home/images/'.$web->logo)}}" alt="logo" style="width: 150px;height: 100px;">

                    </a>
                    <!-- Logo For ONLY Mobile display Ends -->
                    <!-- Toggle Icon for Mobile Starts -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Icon for Mobile Ends -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse" >
                        <!-- Main Menu Starts -->
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About Us</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('register')}}">Register page</a></li>
                                    <li><a href="{{route('login')}}">Login page</a></li>
                                    <li><a href="{{url('faq')}}">FAQ page</a></li>
                                    <li><a href="{{url('terms')}}">Terms of Services</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                        <!-- Main Menu Ends -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navigation Menu Ends -->
    </header>
    <!-- Header Ends -->        <!-- Slider Starts -->
    @yield('content')

<!-- Footer Starts -->
<footer class="footer">
    <!-- Footer Top Area Starts -->
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Starts -->
                <div class="col-sm-3 col-md-3">
                    <h4>Our Company</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-3 col-md-3">
                    <h4>Help & Support</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li><a href="{{url('terms')}}">Terms of Services</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-3 col-md-3">
                    <h4>Contact Us </h4>
                    <div class="contacts">
                        <div>
                            <span>{{$web->email}}</span>
                        </div>
                        <div>
                            <span><a href="tel:{{$web->phone}}">{{$web->phone}}</span></a>
                        </div>
                        <div>
                            <span>mon-sat 08am &#x21FE; 05pm</span>
                        </div>
                    </div>
                    <!-- Social Media Profiles Starts -->
                    <div class="social-footer">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-telegram"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social Media Profiles Ends -->
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-12 col-md-3">
                    <!-- Facts Starts -->
                    <div class="facts-footer">
                        <hr>
                        <!-- Supported Payment Cards Logo Starts -->
                        <div class="payment-logos">
                            <h4 class="payment-title">we also support:</h4>
                            <img src="{{asset('home/images/icons/payment/american-express.png')}}" alt="american-express">
                            <img src="{{asset('home/images/icons/payment/mastercard.png')}}" alt="mastercard">
                            <img src="{{asset('home/images/icons/payment/visa.png')}}" alt="visa">
                            <img src="{{asset('home/images/icons/payment/paypal.png')}}" alt="paypal">
                            <img class="last" src="{{asset('home/images/icons/payment/maestro.png')}}" alt="maestro">
                        </div>
                        <!-- Supported Payment Cards Logo Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
            </div>
        </div>
        <!-- Footer Top Area Ends -->
        <!-- Footer Bottom Area Starts -->
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Copyright Text Starts -->
                        <p class="text-center">
                            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script>
                                {{$siteName}}</strong>
                            All rights reserved.
                        </p>
                        <!-- Copyright Text Ends -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area Ends -->
</footer>
<!-- Footer Ends -->

<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->

<!-- Back To Top Starts  -->
<a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
<!-- Back To Top Ends  -->

<!-- Template JS Files -->
<script src="{{asset('home/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/select2.min.js')}}"></script>
<script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>

<!-- Live Style Switcher JS File - only demo -->
<script src="{{asset('home/js/styleswitcher.js')}}"></script>
<div class="telegram-float-widget">
    <a href="https://wa.me/{{$web->phone}}" target="_blank">
        <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png" alt="" width="50">
    </a>
</div>
</div>
<!-- Wrapper Ends -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '59366001cce4de370e26b2d441a34fb91c6a8c51';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>
</html>
