<link rel="stylesheet" type="text/css" href="{{ asset('css/price.css') }}">

@extends('layouts.app')

@section('content')


<main >

    <section id="pricing" class="pricing-content section-padding">
        <div class="container">
            <div class="section-title text-center mt-5">
                <h2>Pricing Plans</h2>
                <p>No coding skills required to create unique sites. Customize your site in real-time and see the results instantly</p>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="pricing_design">
                        <div class="single-pricing">
                            <div class="price-head">
                                <h2>Basic Plan</h2>
                                <h1>$49</h1>

                            </div>
                            <ul>
                                <li>Programming up to <b>5</b> pages</li>
                                <li>Individual design</li>
                                <li>Responsive (for all devices)</li>
                                <li>content management system</li>
                                <li>Google map & contact form</li>
                                <li>Maintenance & support included</li>
                                <li>Text changes included</li>

                            </ul>
                            <div class="pricing-price">

                            </div>
                            <a  href="{{ route('connecter') }}" class="price_btn">Order Now</a>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="pricing_design">
                        <div class="single-pricing">
                            <div class="price-head">
                                <h2>Professional Plan</h2>
                                <h1 class="price">$99</h1>
                                <span></span>
                            </div>
                            <ul>
                                <li>Programming up to <b>8</b> pages</li>
                                <li>Individual design</li>
                                <li>Responsive (for all devices)</li>
                                <li>content management system</li>
                                <li>Google map & contact form</li>
                                <li>Maintenance & support included</li>
                                <li>Text changes included</li>
                                <li> Search engine optimized</li>


                            </ul>
                            <div class="pricing-price">

                            </div>
                            <a  href="{{ route('connecter') }}" class="price_btn">Order Now</a>
                        </div>
                    </div>
                </div><!--- END COL -->
                <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="pricing_design">
                        <div class="single-pricing">
                            <div class="price-head">
                                <h2> Business Plan</h2>
                                <h1 class="price">$149</h1>

                            </div>
                           <ul>
                                <li>Programming up to <b>15</b> pages</li>
                                <li>Individual design</li>
                                <li>Responsive (for all devices)</li>
                                <li>content management system</li>
                                <li>Google map & contact form</li>
                                <li>Maintenance & support included</li>
                                <li>Text changes included</li>
                                <li> Search engine optimized</li>
                                <li> Including blog / archive</li>
                                <li> Bilingual</li>

                            </ul>
                            <div class="pricing-price">

                            </div>
                            <a href="{{ route('connecter') }}" class="price_btn">Order Now</a>
                        </div>
                    </div>
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </section>
</main>
@endsection
