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

    <!-- Contact Section Starts -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 contact-form">
                    <h3 class="col-xs-12">feel free to drop us a message</h3>
                    <p class="col-xs-12">Need to speak to us? Do you have any queries or suggestions? Please contact us about all enquiries.</p>
                    <!-- Contact Form Starts -->

                <!-- Contact Widget Starts -->
                <div class="col-xs-12 col-md-4">
                    <div class="widget">
                        <div class="contact-page-info">
                            <!-- Contact Info Box Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-home big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Address</h4>
                                    <p>{!! $web->address !!}</p>
                                </div>
                            </div>
                            <!-- Contact Info Box Ends -->
                            <!-- Contact Info Box Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-phone big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Phone </h4>
                                    <p>{{$web->phone}}<br></p>
                                </div>
                            </div>
                            <!-- Contact Info Box Ends -->
                            <!-- Contact Info Box Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-envelope big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Email </h4>

                                    <p>{{$web->email}}<br><!-- bestcryptotradeinvestment90@gmail.com --></p>
                                </div>
                            </div>
                            <!-- Contact Info Box Ends -->
                            <!-- Social Media Icons Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-share-alt big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Social Profiles</h4>
                                    <div class="social-contact">
                                        <ul>
                                            <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-telegram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Media Icons Starts -->
                        </div>
                    </div>
                </div>
                <!-- Contact Widget Ends -->
            </div>
        </div>
    </section>
    <!-- Contact Section Ends -->

@endsection
