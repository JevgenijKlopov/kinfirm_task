@extends('home.layout.document')
@section('content')
<div class="container">
  <div class="card-container">
    <div class="card card-holder" style="width: 18rem;">
        <img src="{{$product->photo}}" class="card-img-top rounded mx-auto img-fluid" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->sku}}</h5>
          <p class="card-text">Description: {{$product->description}}</p>
          <p class="card-text">Size: {{$product->size}}</p>
          <p class="card-text">City: {{$product->stocks?->city ?? '-'}}</p>
          <p class="card-text">Stock: {{$product->stocks?->stock ?? '-'}}</p>
          @foreach ($product->tags as $tag)
          <p class="card-text">Title: {{$tag['title'] ?? ''}}</p>
          @endforeach
          <a href="{{route('home')}}" class=" btn btn-primary">Back</a>
        </div>
      </div>  
    </div>
</div>
@endsection

  