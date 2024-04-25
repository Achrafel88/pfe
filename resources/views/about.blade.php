<link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">

@extends('layouts.app')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row ">
        <div class=" main col-4 ">
            <img class="pict" src="{{ asset('images/logo1.png') }}" style="width: 80%;height:80%;"  alt="Logo" >

        </div>
        <div class="maine col-8 ">
            <h1 class="text-center ">About us</h1>
            <p class="ms-5" style="font-size: 20px">Pro <span style="color: #FF2E95">Dev</span>  offers a full range of digital services including web development, SEO, digital marketing, and video editing, aimed at elevating business presence and driving growth. Our skilled team collaborates to create customized solutions that enhance visibility, engage audiences, and solidify your brand identity. We are committed to leveraging cutting-edge technology to ensure each project meets strategic business goals with high precision. Choose ProDev as your digital partner to transform your online presence into a powerful, impactful force.</p>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <h1 class="text-center">Where we are</h1>
            <iframe class="maps "

        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.123456789012!2d-6.3403558!3d32.3500187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda3866c8b3d4ae5%3A0x60d67c2ebcfa467e!2sISTA-NTIC%3A+Institut+Sp%C3%A9cialis%C3%A9+en+Nouvelles+Technologies+de+l%27Information+et+de+la+Communication_B%C3%A9ni+Mellal!5e0!3m2!1sen!2sma!4v[YourUniqueTimestamp]"

            frameborder="0"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
          </iframe>

              </div>
              <div class="col-6">

                <h1 class="text-center">Get in Touch</h1>
                <form action="#" class="contact-form form-validate" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">

                                <input type="text" class="form-control" id="firstName" name="Name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">

                                <input type="text" class="form-control" id="email" name="email" placeholder="Email@gmail.com">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">

                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">

                                <input type="text" class="form-control" id="lastName" name="Budget" placeholder="Budget">
                            </div>
                        </div>





                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="message">How can we help?</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Hi there, I would like to....."></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </form>

        </div>
            <!-- End Contact Form Wrapper -->

      </div>

</div>


@endsection
