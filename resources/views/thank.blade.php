<link rel="stylesheet" type="text/css" href="{{ asset('css/thank.css') }}">

@extends('layouts.app')

@section('content')
<main>

<h1 class="text-center mt-5">You Have Paid Successfully!</h1>
<p class="text-center">This is your official confirmation. Thank you for subscribing to the ProDev newsletter. While you await our next issue, feel free to explore our latest <span style="color: brown"> articles</span> and <span style="color: brown">case studies </span>on our website.</p>

<div >


    <img class="" src="{{ asset('images/thank.png') }}" style=" width: 70%; height:70%;margin-left:15%;"  >

</div>
</main>
@endsection
