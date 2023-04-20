@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->gallery }}" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <a href="{{route('home')}}" class="btn btn-warning">Go Back</a>
            <h3>{{ $product->name }}</h3>
            <h4>{{ $product->price }}</h4>
            <h5>{{ $product->category }}</h5>
            <h6>{{ $product->description }}</h6>
            <button class="btn btn-secondary">Add to cart</button> <br><br>
            <button class="btn btn-primary">Buy now</button>



                        </div>
                    </div>
                @endsection
