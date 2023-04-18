@extends('home.layout.document')
@section('content')
<div class="form-holder">
<form action="{{route('register-user')}}" method="POST">
    @csrf
    <h4 class="color-w">registration</h4>
    <div class="mb-3">
      <label for="name" class="form-label color-w">Full Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label color-w">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
      <div id="emailHelp" class="form-text color-w">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label color-w">Password</label>
      <input type="password" class="form-control " id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
  </form>
</div>
@endsection