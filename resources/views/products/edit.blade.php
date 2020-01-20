@extends('layouts.app')

@section('content')

<h1 class="text center">you can edit your product detail here:</h1>


<div class="container">
    
            
<form method="post" action="{{ route('products.update', $product->id) }}">
@csrf
@method('put')

     <div class="form-group ">
         <div class="container">
               

                
                            <label for="name">name</label>
                            <input type="text"  value="{{$product->name}}" name="name" id="" class="form-control text-white bg-dark" placeholder="enter name" aria-describedby="helpId">
                            <label for="image">image</label>
                            <input type="text"  value="{{$product->cover_image}}" name="cover_image" id="" class="form-control text-white bg-dark" placeholder="enter image location" aria-describedby="helpId">
                            <label for="price">price</label>
                            <input type="text"   value="{{$product->price}}"class="form-control text-white bg-dark" name="price" id="" aria-describedby="helpId" placeholder="enter product price">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
     </div>
 </form>
  <br>
 
</div>
@endsection