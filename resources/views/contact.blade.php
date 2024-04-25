<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

@extends('layouts.app')

@section('content')


<main >

    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <div class="container bootstrap snippets bootdey">
        <section id="team" class="white-bg padding-top-bottom">
            <div class="container bootstrap snippets bootdey">
                <h1 class="section-title text-center page-title mt-5">Meet our team</h1>
                <p class="section-description text-center">We are a small team with great skills. See the faces behind the lines of code. </p>
                <div class="row member-content">
                    <div class="col-sm-3 col-sm-offset-1 member-thumb  fade-right in">
                        <img class="img-responsive img-center img-thumbnail img-circle"  src="{{ asset('images/me.png') }}"  alt="">
                        <h4>Achraf El hasnaoui</h4>
                        <p class="title">Developer&amp;Co-Founder</p>
                    </div>
                    <div class="col-sm-7">
                        <div class="details">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="social-content">
                                <li><a href="aelhasnaoui88@gmail.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                <li><a href="https://twitter.com/Ae_devE"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="https://www.instagram.com/ae_deve/"><i class="fa fa-instagram fa-fw"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/achraf-el-hasnaoui-3364a91b6/"><i class="fa fa-linkedin fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row member-content right">

                    <div class="col-sm-7 col-sm-pull-2">
                        <div class="details">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="social-content">
                                <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/oussama-lbida-3915582b2/"><i class="fa fa-linkedin fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-push-8 member-thumb">
                        <img class="img-responsive img-center img-thumbnail img-circle"src="{{ asset('images/oussama.png') }}" alt="">
                        <h4>Oussama Lbida</h4>
                        <p class="title">Designer</p>
                    </div>
                </div>

                <div class="row member-content">
                    <div class="col-sm-3 col-sm-offset-1 member-thumb">
                        <img class="img-responsive img-center img-thumbnail img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <h4>Khalid Hanine</h4>
                        <p class="title">Back-End developer</p>
                    </div>
                    <div class="col-sm-7   ">
                        <div class="details">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul class="social-content">
                                <li><a href="mailto:mail@example.com"><i class="fa fa-envelope fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
@endsection
