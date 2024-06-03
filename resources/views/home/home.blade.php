@extends('home.base')
@section('content')

    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators Starts -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!-- Indicators Ends -->
        <!-- Carousel Inner Starts -->
        <div class="carousel-inner">
            <!-- Carousel Item Starts -->
            <div class="item active bg-parallax item-1" style="background-image:url({{asset('home/images/can.jpg')}});" data-img-url="{{asset('home/images/can.jpg')}}">
                <div class="slider-content" >
                    <div class="container" >
                        <div class="slider-text text-center">
                            <h3 class="slide-title"><span>Secure</span> and <span>Easy Way</span><br/> To Invest</h3>
                            <p>
                                <a href="about" class="slider btn btn-primary">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
            <!-- Carousel Item Starts -->
            <div class="item bg-parallax item-2" style="background-image:url({{asset('home/images/cam.jpg')}});" data-img-url="{{asset('home/images/cam.jpg')}}">
                <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>{{$siteName}}</span><br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="about" class="slider btn btn-primary">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Item Ends -->
        </div>
        <!-- Carousel Inner Ends -->
        <!-- Carousel Controlers Starts -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
        <!-- Carousel Controlers Ends -->
    </div>
    <!-- Slider Ends -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Markets today</span></a> by {{$siteName}}</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                },
                {
                    "description": "Tether",
                    "proName": "BINANCE:BTCUSDT"
                },
                {
                    "description": "\tEthereum",
                    "proName": "KRAKEN:ETHUSD"
                },
                {
                    "description": "doge",
                    "proName": "BINANCE:DOGEUSDT"
                },
                {
                    "description": "SOL",
                    "proName": "BINANCE:SOLUSDT"
                },
                {
                    "description": "ARB",
                    "proName": "COINBASE:ARBUSD"
                }
            ],
                "showSymbolLogo": true,
                "colorTheme": "dark",
                "isTransparent": false,
                "largeChartUrl": "http://{{$siteName}}binancetrade.com",
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

    <center>
        <div class="row">
            <div class="video">
                <div class="h1"><div class="blocks">Video presentation</div></div>
                <iframe width="853" height="480" src="https://www.youtube.com/embed/41JCpzvnn_0" title="What is Bitcoin?  Bitcoin Explained Simply for Dummies" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </center>
    <!-- Features Section Starts -->
    <section class="features">
        <div class="container">
            <div class="row features-row">
                <!-- Feature Box Starts -->
                <div class="feature-box col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="download-bitcoin" src="{{asset('home/images/icons/orange/download-bitcoin.png')}}" alt="download bitcoin">
                        </span>
                    <div class="feature-box-content">
                        <h3>Sign up to create an account</h3>
                        <p>Get it on PC or Mobile to create, send and receive cryptocurrency.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box two col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="add-bitcoins" src="{{asset('home/images/icons/orange/download-bitcoin.png')}}" alt="add bitcoins">
                        </span>
                    <div class="feature-box-content">
                        <h3>Deposit/fund your Wallet</h3>
                        <p>Fund your wallet with bitcoin or buy from our escrow.</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
                <!-- Feature Box Starts -->
                <div class="feature-box three col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="buy-sell-bitcoins" src="{{asset('home/images/icons/orange/download-bitcoin.png')}}" alt="buy and sell bitcoins">
                        </span>
                    <div class="feature-box-content">
                        <h3>Investment</h3>
                        <p>Enter the amount you want to invest. Minimum of $200</p>
                    </div>
                </div>
                <!-- Feature Box Ends -->
            </div>
        </div>
    </section>
    <!-- Features Section Ends -->
    <!-- About Section Starts -->
    <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p>A Forex Company</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="{{asset('home/images/about-us.png')}}" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">WE ARE Solid</h3>
                    <p class="about-text">{{$siteName}} Platform is an Fx Trading company, which was founded by commercial traders with more than ten years experience of successful activity in the Forex market, as well as cryptocurrency exchanges. Since 2008, our team develops its own strategies of trading and currency exchange applying all professional knowledge, techniques and skills that allows us to generate stable cash flows with minimal risk of financial loss.
                        <br>
                        <a  href="about">Read More>>>></a>
                    </p>
                    <br>
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- About Section Ends -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/" rel="noopener" target="_blank"><span class="blue-text">Currency market</span></a> by {{$siteName}}</div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
            {
                "width": "100%",
                "height": "100%",
                "currencies": [
                "EUR",
                "USD",
                "JPY",
                "GBP",
                "CHF",
                "AUD",
                "CAD",
                "NZD"
            ],
                "isTransparent": false,
                "colorTheme": "dark",
                "locale": "en",
                "largeChartUrl": "https://{{$siteName}}binancetrade.com/"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->
    <!-- Features and Video Section Starts -->
    <section class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="strong-security" src="{{asset('home/images/icons/orange/strong-security.png')}}" alt="strong security"/>
                                    </span>
                                <h3 class="feature-title">Strong Security</h3>
                                <p>Protection against DDoS attacks, <br>full data encryption</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="world-coverage" src="{{asset('home/images/icons/orange/world-coverage.png')}}" alt="world coverage"/>
                                    </span>
                                <h3 class="feature-title">World Coverage</h3>
                                <p>Providing services in 99% countries<br> around all the globe</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="payment-options" src="{{asset('home/images/icons/orange/payment-options.png')}}" alt="payment options"/>
                                    </span>
                                <h3 class="feature-title">Payment Options</h3>
                                <p>Popular methods: Visa, MasterCard, <br>bank transfer, cryptocurrency</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="mobile-app" src="{{asset('home/images/icons/orange/mobile-app.png')}}" alt="mobile app"/>
                                    </span>
                                <h3 class="feature-title">PLATFORM</h3>
                                <p>Trading via our Platform is available 24/7</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="cost-efficiency" src="{{asset('home/images/icons/orange/cost-efficiency.png')}}" alt="cost efficiency"/>
                                    </span>
                                <h3 class="feature-title">Cost efficiency</h3>
                                <p>Reasonable trading fees for takers<br> and all market makers</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="high-liquidity" src="{{asset('home/images/icons/orange/high-liquidity.png')}}" alt="high liquidity"/>
                                    </span>
                                <h3 class="feature-title">High Liquidity</h3>
                                <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                </div>
                <!-- Features Ends -->
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Crypto markets</span></a> by {{$siteName}}</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                            "width": 1000,
                            "height": 490,
                            "defaultColumn": "performance",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "dark",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
                <!-- Video Starts -->
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="deposit">
                            <div class="table-responsive">
                                <marquee behavior="scroll" direction="up" height="400" scrollamount="5">
                                    <table class="table">
                                        <tr >
                                            <td style= "color:green;" class=inheader><b>Gateway</b></td>
                                            <td style= "color:green;" class=inheader width=200><b>Name</b></td>
                                            <td  style= "color:green;" class=inheader width=170><b>Amount</b></td>
                                            <td style= "color:green;" class=inheader width=170><b>Time</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin</b></td>
                                            <td class=inheader width=200><b>Mughal Fahad</b></td>
                                            <td class=inheader width=170><b>$ 15,700 </b></td>
                                            <td class=inheader width=170><b>2 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin</b></td>
                                            <td class=inheader width=200><b>Rob Ludwig</b></td>
                                            <td class=inheader width=170><b>$ 16,800 </b></td>
                                            <td class=inheader width=170><b>6 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Daniel Rankins</b></td>
                                            <td class=inheader width=170><b>$ 17,500 </b></td>
                                            <td class=inheader width=170><b>24 hours ago</b></td>
                                        </tr>

                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Florence M. Colon</b></td>
                                            <td class=inheader width=170><b>$ 13,500 </b></td>
                                            <td class=inheader width=170><b>48 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin Cash</b></td>
                                            <td class=inheader width=200><b>Banko Pajia</b></td>
                                            <td class=inheader width=170><b>$ 11,000 </b></td>
                                            <td class=inheader width=170><b>4 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin </b></td>
                                            <td class=inheader width=200><b>Tyra Loriso</b></td>
                                            <td class=inheader width=170><b>$ 20,650 </b></td>
                                            <td class=inheader width=170><b>46 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>James Vick</b></td>
                                            <td class=inheader width=170><b>$ 10,650 </b></td>
                                            <td class=inheader width=170><b>30 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>Dorothy Lisa</b></td>
                                            <td class=inheader width=170><b>$ 23,750 </b></td>
                                            <td class=inheader width=170><b>5 hours ago</b></td>
                                        </tr>


                                        <tr>
                                            <td class=inheader><b>Bitcoin</b></td>
                                            <td class=inheader width=200><b>Christal James</b></td>
                                            <td class=inheader width=170><b>$ 5,700 </b></td>
                                            <td class=inheader width=170><b>20 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin</b></td>
                                            <td class=inheader width=200><b>Kim Valentine</b></td>
                                            <td class=inheader width=170><b>$ 1,800 </b></td>
                                            <td class=inheader width=170><b>60 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Lupita Duran</b></td>
                                            <td class=inheader width=170><b>$ 7,500 </b></td>
                                            <td class=inheader width=170><b>24 hours ago</b></td>
                                        </tr>

                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Emmie Wheat</b></td>
                                            <td class=inheader width=170><b>$ 3,500 </b></td>
                                            <td class=inheader width=170><b>8 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin Cash</b></td>
                                            <td class=inheader width=200><b>Jennie Hall</b></td>
                                            <td class=inheader width=170><b>$ 1,000 </b></td>
                                            <td class=inheader width=170><b>4 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin </b></td>
                                            <td class=inheader width=200><b>Schaun Smith</b></td>
                                            <td class=inheader width=170><b>$ 10,650 </b></td>
                                            <td class=inheader width=170><b>42 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>Kiley Jeanis</b></td>
                                            <td class=inheader width=170><b>$ 10,330 </b></td>
                                            <td class=inheader width=170><b>30 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>Alysia Schwarz</b></td>
                                            <td class=inheader width=170><b>$ 16,750 </b></td>
                                            <td class=inheader width=170><b>11 hours ago</b></td>
                                        </tr>

                                        <tr>
                                            <td class=inheader><b>Bitcoin</b></td>
                                            <td class=inheader width=200><b>Tavanya G. Lockett</b></td>
                                            <td class=inheader width=170><b>$ 9,700 </b></td>
                                            <td class=inheader width=170><b>2 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin</b></td>
                                            <td class=inheader width=200><b>Carole Finneran</b></td>
                                            <td class=inheader width=170><b>$ 11,800 </b></td>
                                            <td class=inheader width=170><b>6 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Arraya Merino</b></td>
                                            <td class=inheader width=170><b>$ 3,500 </b></td>
                                            <td class=inheader width=170><b>21 hours ago</b></td>
                                        </tr>

                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Kopa_mohuba</b></td>
                                            <td class=inheader width=170><b>$ 10,500 </b></td>
                                            <td class=inheader width=170><b>8 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin Cash</b></td>
                                            <td class=inheader width=200><b>Lerato Modiegi</b></td>
                                            <td class=inheader width=170><b>$ 12,000 </b></td>
                                            <td class=inheader width=170><b>4 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin </b></td>
                                            <td class=inheader width=200><b>Maibi Seshabela</b></td>
                                            <td class=inheader width=170><b>$ 15,650 </b></td>
                                            <td class=inheader width=170><b>48 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>MamaTebogo Moeng</b></td>
                                            <td class=inheader width=170><b>$ 7,330 </b></td>
                                            <td class=inheader width=170><b>3 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>Siyabonga Matseke</b></td>
                                            <td class=inheader width=170><b>$ 19,950 </b></td>
                                            <td class=inheader width=170><b>11 hours ago</b></td>
                                        </tr>
                                        <td class=inheader><b>Bitcoin </b></td>
                                        <td class=inheader width=200><b>Uni Rankiny</b></td>
                                        <td class=inheader width=170><b>$ 17,500 </b></td>
                                        <td class=inheader width=170><b>28 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Glon M. Coni</b></td>
                                            <td class=inheader width=170><b>$ 1,500 </b></td>
                                            <td class=inheader width=170><b>46 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin Cash</b></td>
                                            <td class=inheader width=200><b>kliny Jackson</b></td>
                                            <td class=inheader width=170><b>$ 16,000 </b></td>
                                            <td class=inheader width=170><b>7 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin </b></td>
                                            <td class=inheader width=200><b>Arian Slugino</b></td>
                                            <td class=inheader width=170><b>$ 23,650 </b></td>
                                            <td class=inheader width=170><b>49 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>ETH</b></td>
                                            <td class=inheader width=200><b>Gunk Wheath</b></td>
                                            <td class=inheader width=170><b>$ 9,550 </b></td>
                                            <td class=inheader width=170><b>12 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin </b></td>
                                            <td class=inheader width=200><b>Niny Lingon</b></td>
                                            <td class=inheader width=170><b>$ 3,000 </b></td>
                                            <td class=inheader width=170><b>6 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Bitcoin Cash</b></td>
                                            <td class=inheader width=200><b>Huni Smith</b></td>
                                            <td class=inheader width=170><b>$ 11,650 </b></td>
                                            <td class=inheader width=170><b>34 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>Tether (USDT) </b></td>
                                            <td class=inheader width=200><b>Yourk Kamari</b></td>
                                            <td class=inheader width=170><b>$ 14,330 </b></td>
                                            <td class=inheader width=170><b>23 hours ago</b></td>
                                        </tr>
                                        <tr>
                                            <td class=inheader><b>ETH </b></td>
                                            <td class=inheader width=200><b>Slim Zarki</b></td>
                                            <td class=inheader width=170><b>$ 14,560 </b></td>
                                            <td class=inheader width=170><b>21 hours ago</b></td>
                                        </tr>
                                    </table>
                                </marquee>
                            </div>




                        </div>

                    </div>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
            <!-- Video Ends -->
        </div>
        </div>
    </section>



    <!-- Features and Video Section Ends -->
    <!-- Pricing Starts -->
    <section class="pricing">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">affordable <span>investment plan </span></h2>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row pricing-tables-content">
                <div class="pricing-container">
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">
                        @foreach($packages as $package)
                            @inject('option','App\Defaults\Custom')
                            <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>{{$package->name}}<span>From </span></h2>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">{{number_format($package->minAmount,2)}}</span>
                                                <div>Minimum</div>
                                            </div>
                                            <div class="price">
                                                <span class="currency"><i class="fa fa-dollar"></i></span>
                                                <span class="value">@if($package->isUnlimited !=1)
                                                        ${{number_format($package->maxAmount,2)}}
                                                    @else
                                                        Unlimited
                                                    @endif</span>
                                                <div>Maximum</div>
                                            </div>
                                            <span class="text-bg">{{$option->getReturnType($package->returnType)}} Profit: {{$package->roi}}%</span>
                                            <br>
                                            <span class="text-bg">Duration: {{$package->Duration}}</span><br/>
                                            <span class="text-bg">{{$package->referral}}% Referral Bonus</span>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="{{route('register')}}" class="btn btn-primary">BUY NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #1 Ends -->
                                </ul>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Ends -->

    <!-- TradingView Widget BEGIN -->
    <center>
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily news roundup</span></a> by {{$siteName}}</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                {
                    "feedMode": "all_symbols",
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "regular",
                    "width": "95%",
                    "height": 830,
                    "locale": "en"
                }
            </script>
        </div>
    </center>
    <!-- TradingView Widget END -->

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_248bd"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT chart</span></a> by {{$siteName}}</div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget(
                {
                    "width": "95%",
                    "height": 610,
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "1",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "0",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "container_id": "tradingview_248bd"
                }
            );
        </script>
    </div>
    <!-- TradingView Widget END -->
    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Us</h2>
                            <p class="lead">Open account for free and start Trading!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="{{route('register')}}">Get Started</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->


@endsection
