@extends('master')


@section('content')
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-7 ">
      <form action="login" method="POST">
        <div class="form-group">
          @csrf
          <label >Email address</label>
          <input type="email" name="name" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label >Password</label>
          <input type="password" name="password" class="form-control"  placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</div>

@stop



