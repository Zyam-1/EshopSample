@extends('main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach ($products as $product)
    <a href="productDetails/{{$product->id}}">
    <div class="carousel-item {{$product->id==1? "active": " "}}">
      <img class="d-block container w-100" style = "height: 450px"  src="{{$product->gallery}}" alt="{{$product->name}}">
      <div class = "carousel-caption">
        <h3 class = "text-dark">
          {{$product->name}}</h3>
          <h3 class = "text-dark">
            {{$product->description}}</h3>  
      </a>   
      </div>
    </div>
    @endforeach
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h2>Trending Products</h2>
<div class="row">
  
  @foreach ($products as $product)
  
    <div class="col-md-3">
      <a href="/productDetails/{{$product->id}}">
      <img src="{{$product->gallery}}" alt="" width="100px">
      <p class = "container">{{$product->name}}</p>
    </a>  
    </div>
  
      
  @endforeach
</div>
@endsection
