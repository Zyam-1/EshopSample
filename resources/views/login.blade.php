@extends('main')
@section('content')
<div class = "container w-25 p-3 mt-5">
<form action = "login" method = "post" >
    <div class="mb-3">
      <h3 style = "text-align: center">Login</h3>
      <hr>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />      
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name = "email" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
