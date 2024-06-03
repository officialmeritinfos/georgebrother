@extends('home.base')
@section('content')
    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="banner-overlay">
            <div class="banner-text text-center">
                <div class="container">
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <!-- Title Starts -->
                            <h2 class="title-head">{{$pageName}}</h2>
                            <!-- Title Ends -->
                            <hr>
                            <!-- Breadcrumb Starts -->
                            <ul class="breadcrumb">
                                <li><a href="{{url('/')}}"> home</a></li>
                                <li>{{$pageName}}</li>
                            </ul>
                            <!-- Breadcrumb Ends -->
                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area Ends -->
    <!-- About Section Starts -->
    <section class="about-page">
        <div class="container">
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img id="about-us" class="img-responsive img-about-us" src="{{asset('home/images/about-us.png')}}" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <div class="feature-about">
                        <h3 class="title-about">WE ARE {{$siteName}}</h3>
                        <p>{{$siteName}} is a Trading company, which was founded by commercial traders with more than ten years experience of successful activity in the Forex market, as well as cryptocurrency exchanges. Since 2008, our team develops its own strategies of trading and currency exchange applying all professional knowledge, techniques and skills that allows us to generate stable cash flows with minimal risk of financial loss. These rules are developed by experts in the field of multicurrency trading and fundamental analysis of the Forex market, they are ideal for our business and constantly being improved. In 2018 we have decided to enter the international market of long-term Trading and offer unique cooperation terms for people who prefer a passive online income and are seeking for reliable financial partners. {{$siteName}} Miner is fully legit and officially registered company whose activities are regulated by the financial control authorities under the jurisdiction of the United Kingdom. Accepting our terms of cooperation, you can be absolutely sure of getting a guaranteed profit and full return on your invested currency. We offer the best conditions for placing your deposits and are ready to provide quality service to all customers.<br/><br/></p>
                    </div>
                    <div class="feature-about">
                        <p>{{$siteName}} boast of professional traders that manage your brokerage account on your behalf with more than 95% success rate. Whether you are a small or large investor, we can assist you with your investment goals. Furthermore, you will have access to our streamlined service and ongoing support.<br/><br/>

                            We provide a service that is based on integrity and is fully transparent. Our investment methods are unique. We utilize cutting edge technology and trade a diverse range of currency pairs. With the simple and logical investment plans accompanied by high and stable profit, it will simplify everyone's thinking about the online investment world and help people make money more easily through our system. The most important aspect of our investments, which range from low, middle and high income are based on the fact that our core investment is always guaranteed, and now we welcome everyone with Internet access and an account in any of the received digital currency payment processing.<br/><br/>


                            Not everyone has the detailed knowledge of financial markets and for many people the best choice is to work with financial services provider such as {{$siteName}}, who gained required expertise and therefore can provide financial products in the form of fixed income managed accounts.<br/><br/>


                            After years of professional trading we have joined our skills, knowledge and talents in the effort to bring a new reliable investment opportunity.

                        </p>
                    </div>
                    <a class="btn btn-primary btn-services" href="{{route('register')}}">Get Started Now</a>
                </div>
                <!-- Content Ends -->

            </div>
            <!-- Section Content Ends -->
        </div><!--/ Content row end -->
    </section>
    <!-- About Section Ends -->

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
                        <p class="action-btn"><a class="btn btn-primary" href="{{route('register')}}">Register Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->

@endsection
