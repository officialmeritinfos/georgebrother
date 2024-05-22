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


@endsection
