@extends('home.base')
@section('content')

    <!-- banner-style-two -->
    <section class="banner-style-two p_relative centred">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item p_relative">
                <div class="image-layer p_absolute" style="background-image:url({{asset('home/images/banner/banner-6.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span>AI-integrated solution</span>
                        <h2>Unlock the world of great financial freedom</h2>
                        <p>
                            Discover a world of unlimited possibilities in the realm of cryptocurrencies with<br/>
                            {{$siteName}}. Our Artificial Intelligence system helps you earn bigger
                        </p>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn-one">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item p_relative">
                <div class="image-layer p_absolute" style="background-image:url({{asset('home/images/banner/banner-7.jpg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span>Mining & Investment</span>
                        <h2>Automated Mining process</h2>
                        <p>
                            Earn from the comfort of your home with our AI powered mining plans - <br/>
                            you invest and earn rewards on a long-term basis
                        </p>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn-one">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item p_relative">
                <div class="image-layer p_absolute" style="background-image:url({{asset('home/images/aicloud.jpeg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span>AI-integrated solution</span>
                        <h2>Unlock the world of great financial freedom</h2>
                        <p>
                            Discover a world of unlimited possibilities in the realm of cryptocurrencies with<br/>
                            {{$siteName}}. Our Artificial Intelligence system helps you earn bigger
                        </p>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn-one">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item p_relative">
                <div class="image-layer p_absolute" style="background-image:url({{asset('home/images/ai2.jpeg')}})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span>Mining & Investment</span>
                        <h2>Automated Mining process</h2>
                        <p>
                            Earn from the comfort of your home with our AI powered mining plans - <br/>
                            you invest and earn rewards on a long-term basis
                        </p>
                        <div class="btn-box">
                            <a href="{{route('register')}}" class="theme-btn-one">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-style-two end -->


    <!-- feature-style-two -->
    <section class="feature-style-two bg-color-2 pt_150 pb_150">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('home/images/shape/shape-22.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('home/images/shape/shape-23.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                    <div class="sec-title light pr_100">
                        <span class="sub-title">Feature</span>
                        <h2>Professional And Dedicated Financial Agency</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two mt_50  wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-7"></i></div>
                            <h3><a href="#">Financial Planning</a></h3>
                            <p>
                                We undertake a painstalking financial planning exercise to ensure that the maxium output is received in
                                each investment portfolio created.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two mt_50  wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-9"></i></div>
                            <h3><a href="#">Artificial Intelligence</a></h3>
                            <p>
                                With the recent trend in AI, we have incorporated AI based strategies into all our trading and
                                investment portfolio to allow for automated payouts, earnings and better returns.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-two -->


    <!-- about-style-two -->
    <section class="about-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_60">
                <span class="sub-title">About {{$siteName}}</span>
                <h2>Dedicated And Professional <br />Financial Services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_two">
                        <div class="image-box mr_30">
                            <figure class="image"><img src="{{asset('home/images/resource/about-3.jpg')}}" alt=""></figure>
                            <div class="image-content">
                                <h2>18+</h2>
                                <h3>Years of Great Experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="content_block_five">
                        <div class="content-box ml_30">
                            <div class="text mb_30">
                                <p>
                                    Founded in 2006, we are a global investment agency helping individuals build their
                                    financial dreams into reality. From a humble beginning, we have grown to become a notable
                                    force in the investment industry with over 40K+ users.
                                </p>
                                <p>
                                    With {{$siteName}}, harness the potential of
                                    artificial intelligence to elevate your investments portfolio, mining operations, and trading
                                    endeavors to new heights. Experience x10 of revenue earning in hours.
                                </p>
                                <p>
                                    {{$siteName}} is a U.K based investment company that allows investors - small and large
                                    scale to seamlessly invest and grow their wealth through advanced artificial intelligence (AI) algorithms - {{$siteName}} provides cutting-edge
                                    solutions to help clients earn from the dynamic world of assets and real stock management.
                                    With our AI-driven investment strategies, we analyze extensive market data, historical trends,
                                    and real-time indicators to make informed investment decisions and optimize portfolio performance.
                                </p>
                            </div>
                            <div class="inner-box mb_30">
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-11"></i></div>
                                    <h3>Solution Focused</h3>
                                    <p>
                                        We offer nothing less than solution - financial freedom to our investors.
                                    </p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-11"></i></div>
                                    <h3>97% Success</h3>
                                    <p>With the introduction of AI strategies in our planning scheme since 2020, we have recorded a whooping
                                        97% success rate in our investments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- service-style-two -->
    <section class="service-style-two p_relative bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">What We Do</span>
                <h2>Provide the Best Financial <br />investment opportunities in the Industry</h2>
            </div>
            <div class="row clearfix">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('home/serv/'.$service->photo)}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="icon-7"></i></div>
                                        <h3><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                        <p>{{\Illuminate\Support\Str::words($service->short,30)}}</p>
                                        <div class="btn-box">
                                            <a href="{{route('service.details',['id'=>$service->id])}}" class="theme-btn-one">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- cta-section -->
    <section class="cta-section p_relative">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{asset('home/images/background/cta-bg.jpg')}});"></div>
        <div class="auto-container">
            <div class="inner-box">
                <h2>Need Support? <span>Start Talking</span> Now About Next Financial Project</h2>
                <h3><a href="mailto:{{$web->email}}">{{$web->email}}</a></h3>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two p_relative">
        <div class="auto-container">
            <div class="sec-title mb_50 centred">
                <span class="sub-title">Testimonials</span>
                <h2>What They’re Say <br />About Us?</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-one owl-nav-none">
                <div class="testimonial-block-two">
                    <figure class="thumb-box"><img src="https://ui-avatars.com/api/?name=Silver+alex" alt=""></figure>
                    <div class="inner-box">
                        <h3>Silver Alex</h3>
                        <span class="designation">Edge Plan Investor</span>
                        <p>
                            Investing with {{$siteName}} has been a game-changer for my financial world.
                            My first investment of $150 grew to yield over $1000 and that increased my faith in them.
                        </p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <figure class="thumb-box"><img src="https://ui-avatars.com/api/?name=Sarah+T" alt=""></figure>
                    <div class="inner-box">
                        <h3>Sarah T</h3>
                        <span class="designation">Thrive Plan Investor</span>
                        <p>
                            {{$siteName}} is simply the best. I started out trading cryptocurrencies on Binance but
                            after so many losses, I decided to seek for a real Broker to help me;{{$siteName}} has been
                            that real broker for me for the past 1 year
                        </p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="testimonial-block-two">
                    <figure class="thumb-box"><img src="https://ui-avatars.com/api/?name=Elizabeth+T" alt=""></figure>
                    <div class="inner-box">
                        <h3>Elizabeth T</h3>
                        <span class="designation">Retirement Plan Investor</span>
                        <p>
                            Navigating the world of financial freedom has been a hectic journey for me until I met with
                            {{$siteName}}. Since then, I just relax and plan my vacation from my returns on {{$siteName}}.
                        </p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- funfact-section -->
    <section class="funfact-section centred">
        <div class="auto-container">
            <div class="inner-container">
                <div class="shape">
                    <div class="shape-1" style="background-image: url({{asset('home/images/shape/shape-18.png')}});"></div>
                    <div class="shape-2" style="background-image: url({{asset('home/images/shape/shape-19.png')}});"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="165">0</span><span>M+</span>
                                </div>
                                <p>Investments Paid out</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="35">0</span><span>K+</span>
                                </div>
                                <p>Active Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="100">0</span><span>+</span>
                                </div>
                                <p>Qualified Staff</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-section end -->


    <!-- working-process-section -->
    <section class="working-process-section alternat-2 sec-pad centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('home/images/shape/shape-25.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('home/images/shape/shape-26.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title mb_100">
                <span class="sub-title">Working Process</span>
                <h2>3 Easy Steps to Get <br />Quick Help</h2>
            </div>
            <div class="inner-container">
                <div class="working-block-one">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url({{asset('home/images/shape/shape-24.png')}});"></div>
                        <div class="count-text">
                            <h3>01 <span>Step</span></h3>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <h3>Fill In The Required Form</h3>
                                <p>Register an account, and login</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="working-block-one">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url({{asset('home/images/shape/shape-24.png')}});"></div>
                        <div class="count-text">
                            <h3>02 <span>Step</span></h3>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <h3>Submit <br />Your Deposit</h3>
                                <p>Select a package and make your deposit into the package</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="working-block-one">
                    <div class="inner-box">
                        <div class="count-text">
                            <h3>03 <span>Step</span></h3>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <h3>Get Ready To <br />Receive your Earning</h3>
                                <p>Withdraw your earnings at the end of the cycle or on each payout</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working-process-section end -->

    <!-- pricing-section -->
    <section class="pricing-section sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Investment Packages</span>
                <h2>Choose a package that suits you and start earning</h2>
            </div>
            <div class="tabs-box">
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix justify-content-center">
                            @foreach($packages as $package)
                                @inject('option','App\Defaults\Custom')
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block mt-2">
                                    <div class="pricing-block-one">
                                        <div class="pricing-table">
                                            <div class="shape-1" style="background-image: url({{asset('home/images/shape/shape-38.png')}});"></div>
                                            <div class="table-header mb_35">
                                                <span class="title">{{$package->name}}</span>
                                            </div>
                                            <div class="table-content">
                                                <ul class="feature-list list-style-one clearfix">
                                                    <li>${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                            ${{number_format($package->maxAmount,2)}}
                                                        @else
                                                            Unlimited
                                                        @endif
                                                    </li>
                                                    <li>100% Capital Protection</li>
                                                    <li>Automated Payout</li>
                                                    <li>A.I Integrated Trading</li>
                                                    <li>{{$option->getReturnType($package->returnType)}} Turnover</li>
                                                    <li>Renewable</li>
                                                    <li>Trading Time - 5 Days Weekly</li>
                                                    <li>{{$package->referral}}% Referral Bonus</li>
                                                    <li> {{$package->roi}}% - {{$package->Duration}}</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <a href="{{route('register')}}" class="theme-btn-one">Get Started Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


    <!-- news-style-two -->
    <section class="news-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Latest Transactions</span>
            </div>
            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $deposit)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($deposit->user)}}</td>
                                <td>${{number_format($deposit->amount,2)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $withdrawal)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($withdrawal->user)}}</td>
                                <td>${{number_format($withdrawal->amount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
    <!-- news-style-two end -->


    <!-- news-style-two -->
    <section class="news-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Our Article</span>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-style-two end -->

@endsection
