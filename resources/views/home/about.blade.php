@extends('home.base')
@section('content')
    @push('css')
        <link href="{{asset('home/css/elements-css/page-title.css')}}" rel="stylesheet">
    @endpush
    <!-- page-title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{asset('home/images/background/page-title.jpg')}});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{$pageName}}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$pageName}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


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
                                    With {{$siteName}}, harness the potential of
                                    artificial intelligence to elevate your cryptocurrency
                                    investments, mining operations, and trading
                                    endeavors to new
                                    heights. Experience x10 of revenue earning in hours.
                                </p>
                                <p>
                                    {{$siteName}} is a U.K based investment company that allows investors - small and large
                                    scale to seamlessly invest in crypto mining with guaranteed returns.
                                    Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides cutting-edge
                                    solutions to help clients earn from the dynamic world of cryptocurrencies with confidence and success.
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
                <h2>Provide the Best Financial <br />investment opportunities This Industry</h2>
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

@endsection
