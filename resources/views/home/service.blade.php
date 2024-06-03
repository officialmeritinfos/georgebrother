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

    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Forex</span>
                            <img src="{{asset('home/img/serv/forex.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Agriculture</span>
                            <img src="{{asset('home/img/serv/agric.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Oil And Gas</span>
                            <img src="{{asset('home/img/serv/oil.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Real Estate</span>
                            <img src="{{asset('home/img/serv/estate.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Retirement and Insurance Services</span>
                            <img src="{{asset('home/img/serv/retire.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Gold</span>
                            <img src="{{asset('home/img/serv/gold.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
