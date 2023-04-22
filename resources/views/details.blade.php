@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->gallery }}" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <a href="{{ route('home') }}" class="btn btn-warning">Go Back</a>
            <h3>{{ $product->name }}</h3>
            <h4>{{ $product->price }}</h4>
            <h5>{{ $product->category }}</h5>
            <h6>{{ $product->description }}</h6>
            <form action="/addToCard" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name = "product_id" value="{{ $product->id }}">
                <button class="btn btn-secondary" type="submit">Add to cart</button>
            </form> <br><br>
            <button class="btn btn-primary">Buy now</button>



        </div>
    </div>
@endsection
