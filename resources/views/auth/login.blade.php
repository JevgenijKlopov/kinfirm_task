@extends('home.layout.document')
@section('content')
<div class="form-holder">
  <form action="{{route('login-user')}}" method="POST">
    @csrf
    <h4 class="color-w">login</h4>
    <div class="mb-3">
      <label for="email" class="form-label color-w">email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text color-w">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
      <label for="password" class="form-label color-w">password</label>
      <input type="password" class="form-control " id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">submit</button>
    </form>
  </div>   
@endsection