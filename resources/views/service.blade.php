<link rel="stylesheet" type="text/css" href="{{ asset('css/service.css') }}">

@extends('layouts.app')

@section('content')


<div class="service-section">
    <div class="container">
        <h1 class="text-center mb-4" id='titleProduit'>Our services</h1>
        <div class="row">

            @foreach ($produits as $produit)
            <div  class="col-12 col-md-4 col-lg-3 col-sm-6 mb-5 mt-5 mb-md-0" >

                <div class="service-item">
                    <a href="{{ route('servicedetail', $produit->id) }}">
                    <img src="{{ asset($produit->image) }}" class="img-fluid service-thumbnail"></a>
                    <h3 class="service-title">{{ $produit->nom }}</h3>
                    <p class="descriptionD">{{$produit->description}}</p>


                </div>

            </div>
            @endforeach





        </div>
    </div>
</div>

@endsection
