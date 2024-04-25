@extends('layouts.appAdmin')

@section('ContentAdmin')
<h1 class="ms-0">Cover</h1>
@foreach($cover as $img)
<div class="col-md-8 d-flex justify-content-center">
    <div class="card mb-3">
        <img src="{{ asset($img->images) }}" class="card-img-top mx-auto" alt="...">
        <div class="card-body">

            <a href="{{route('editImage', $img->id)}}" class="btn  ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 32 32" style="width:50px;height:50px" version="1" viewBox="0 0 32 32" id="Edit"><path d="M26.857,31.89H3c-1.654,0-3-1.346-3-3V5.032c0-1.654,1.346-3,3-3h16.214c0.553,0,1,0.448,1,1s-0.447,1-1,1H3c-0.551,0-1,0.449-1,1V28.89c0,0.551,0.449,1,1,1h23.857c0.552,0,1-0.449,1-1V12.675c0-0.552,0.447-1,1-1s1,0.448,1,1V28.89C29.857,30.544,28.512,31.89,26.857,31.89z M24.482,23.496c-0.002,0-0.003,0-0.005,0L5.192,23.407c-0.553-0.002-0.998-0.452-0.996-1.004c0.002-0.551,0.45-0.996,1-0.996c0.001,0,0.003,0,0.004,0l19.286,0.089c0.552,0.002,0.998,0.452,0.995,1.004C25.479,23.051,25.032,23.496,24.482,23.496z M15.251,18.415c-0.471,0-0.781-0.2-0.957-0.366c-0.297-0.28-0.709-0.931-0.14-2.151l0.63-1.35c0.516-1.104,1.596-2.646,2.459-3.51L26,2.281c0.003-0.002,0.005-0.004,0.007-0.006c0.002-0.002,0.004-0.004,0.006-0.006l0.451-0.451c1.168-1.169,2.979-1.262,4.036-0.207c0,0,0,0,0,0c1.056,1.055,0.963,2.866-0.207,4.036c0,0-0.536,0.552-0.586,0.586l-8.635,8.635c-0.85,0.85-2.345,1.964-3.405,2.538l-1.218,0.657C15.969,18.322,15.572,18.415,15.251,18.415z M26.714,4.396l-8.056,8.057c-0.699,0.7-1.644,2.047-2.061,2.942L16.4,15.815l0.316-0.17c0.885-0.479,2.233-1.482,2.942-2.192l8.057-8.057L26.714,4.396z M28.163,3.016l0.932,0.932c0.2-0.356,0.177-0.737-0.009-0.923C28.881,2.82,28.499,2.83,28.163,3.016z" fill="#595bd4" class="color000000 svgShape"></path></svg>
            </a>
        </div>
    </div>
</div>
@endforeach


@endsection