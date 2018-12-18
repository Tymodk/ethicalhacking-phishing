@extends('layouts.app')

@section('content')


    <div class="kdg" alt="Image">
    </div>


<div class="content">
  <div class="kdgheader">Tricked!</div>
  <div class="red">
  	<p>It was that easy to get phished!</p>
  	<p>This is the info I got from you, so don't worry! (Or do)</p>
  	<p>Email: {{$email}}</p>
  	<p>Password: {{$password}}</p>
  	<p>Your password is fully broken up and hashed, I cannot get it. But this should be an eyeopener about your online security</p>




  </div>


</div>
@endsection
