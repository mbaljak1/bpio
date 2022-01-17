@extends('app')

@section('content')
Put do dvojke:
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

Laden...
<div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>

<form>
  <div class="col-6 mx-auto">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="col-6 mx-auto">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-6 mx-auto form-check">
    <input type="checkbox" class="col-6 mx-auto form-check-input" id="exampleCheck1">
    <label class="col-6 mx-auto form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
</form>
@endsection('content')