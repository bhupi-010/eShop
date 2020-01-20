@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center ">
        <h1>welcome to eshop</h1><br>
        <img src="img" alt="image not found" class="img-thumbnail">
    </div><br><br>
<div class="text-center">
    <h2>
   <a> you can save your products detail here</a><br>
    <a>To use the feature please register or if you already have account login here</a>
    </h2>
    </div><br>
<div class="text-center">
      <h1> <a  href="{{ route('login') }}">{{ __('Login') }}</a> </h1>
       <h1> <a  href="{{ route('register') }}">{{ __('Register') }}</a></h1>
       </div>                         
 

</div>


@endsection