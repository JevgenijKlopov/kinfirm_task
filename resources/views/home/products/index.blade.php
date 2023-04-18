@extends('home.layout.document')
@section('content')
@if (App\Models\User::getByToken())
   <h4>Most popular tags list by products count</h4>
<button class="sort btn btn-primary">Sort</button>
<div class="container">
  <div class="product-holder row row-cols-2 gap-5">
  </div>
</div> 
@endif
@endsection
