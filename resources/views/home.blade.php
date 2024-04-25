<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

@extends('layouts.app')

@section('content')






<main>




<div>
 @foreach($cover as $profil)
        <img src="{{ asset($profil->images) }}"   class="img-fluid w-100 mt-4" alt="Logo" >
        @endforeach


</div>


<div class="section1 row mt-5">
    <div class="col-6" >
        <img class="pict" src="{{ asset('images/logo1.png') }}" style="padding-top: -14px; width: 70%; height: 70%;" alt="Logo">
    </div>
    <div class="col-6">
        <h1 class="text-center mt-4" >ABOUT THE AGENCY</h1>
        <br>
        <p>Pro <span style="color: #FF2E95">Dev</span>  is a full-service digital agency specializing in web development, digital marketing, SEO, and video editing, designed to enhance your online visibility and engage your target audience with high-quality content.</p>
        <button style="background-color: #554c86; border-radius:30px; border-color:#212181; width:200px;height:50px;margin-top:5%;margin-left:35%;  font-size: 20; font-weight:bold ; "><a href="{{ route('about') }}" style="color: rgb(255, 255, 255);" >Read more</a></button>
    </div>
    <h1 class="text-center mt-4" >How can we help?</h1>
    <p class="text-center ">We help premium brands achieve their future through innovation and creative perspectives. </p>

</div>
        <div class="service-section">
        <div class="container">
            <h1 class="text-center mb-4" id='titleProduit'>Our Services</h1>
            <div class="row" >


                @foreach ($produits as $produit)
                <div  class="col-12 col-md-4 col-lg-3 mb-5 mt-5 mb-md-0" style="margin-top: ">

                    <div class="service-item">
                        <a href="{{ route('servicedetail', $produit->id) }}">
                        <img src="{{ asset($produit->image) }}" class="img-fluid service-thumbnail"></a>
                        <h3 class="service-title">{{ $produit->nom }}</h3>
                        <p class="descriptionD">{{$produit->description}}</p>
                    </div>

                </div>
                @endforeach

                <div class="col-md-12 col-lg-3 mb-5 mt-5 mb-lg-0">



                    <button style="background-color: #554c86; border-radius:30px; border-color:#212181; width:200px;height:50px;margin-top:50%;margin-left:35%;  font-size: 20; font-weight:bold ; "><a href="{{ route('service') }}" style="color:rgb(255, 255, 255);">Show more</a></button>
                </div>





            </div>
        </div>
    </div>







    <section class="section1" >
    <h1 class="text-center ">Live Statistics</h1>
    <p class="text-center para">This motivates us to continue looking for new challenges in order to improve our services.</p>

    <section class="gradient-section">
        <div class="container-fluid my-5" id="ScrollPast">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="card statistics-card">

                        <div class="info d-flex flex-column">
                            <span class="mb-3">Happy Customers</span>
                            <div class="incremental" data-increment="132">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card statistics-card">

                        <div class="info d-flex flex-column">
                            <span class="mb-3">Great Projects</span>
                            <div class="incremental" data-increment="230">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card statistics-card">

                        <div class="info d-flex flex-column">
                            <span class="mb-3">Total hours</span>
                            <div class="incremental" data-increment="1300">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card statistics-card">

                        <div class="info d-flex flex-column">
                            <span class="mb-3">Data</span>
                            <div class="incremental" data-increment="2300">0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            increment();
        });
        function increment(){
            $.each($(document).find('.incremental'), function () {
                let me = $(this);
                me.html('');
                $({value: parseInt(me.html())}).animate({value: parseInt(me.attr('data-increment'))}, {
                    duration: Math.floor(Math.random() * (5000 - 1500 + 1) + 1500),
                    easing:'swing',
                    step: function() {
                        me.text(commaSeparateNumber(Math.round(this.value)));
                    }
                });
            })
        }
        function commaSeparateNumber(val){
            while (/(\d+)(\d{3})/.test(val.toString())){
                val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
            }
            return val;
        }
    </script>
    </section>
</main>
@endsection
