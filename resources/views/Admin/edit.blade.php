@extends('Layouts.appAdmin')

@section('title')
edit
@endsection

@section('ContentAdmin')



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{route('produits.update',$produit->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="nom" value="{{$produit->nom}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3" name="description">{{ $produit->description}}</textarea>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <label class="form-label">Picture</label><br>

                <img src="{{ asset( $produit->image) }}" alt="Image du produit" style="max-width: 200px;">


        </div>
        <label class="form-label">Importe picture</label>
        <input type="file" class="form-control" name="image" >



    </div>
    <div>
        <p>Type of service:</p>

        <br>
        <input type="radio" id="produit" name="type" value="produit" @if($produit->type == 'produit') checked @endif>
        <label for="produit">Service</label>
        <br>

    </div>
    <div>


    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
