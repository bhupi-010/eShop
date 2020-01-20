@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary ">

                <div class="card-body text-success">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3> You are logged in!</h3>
                </div>
            </div>
        </div>


    </div>
</div><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary ">

                <div class="card-body text-success">


                    <form action="{{route('products.store')}} " method="POST">
                        @csrf
                        <div class="form-group ">
                            <label for="name">name</label>
                            <input type="text" name="name" id="" class="form-control text-white bg-dark" placeholder="enter name" aria-describedby="helpId">
                            <label for="image">image</label>
                            <input type="text" name="cover_image" id="" class="form-control text-white bg-dark" placeholder="enter image location" aria-describedby="helpId">
                            <label for="price">price</label>
                            <input type="text" class="form-control text-white bg-dark" name="price" id="" aria-describedby="helpId" placeholder="enter product price">
                            <br>
                            <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container text-center">
    <h1 class="display-4">List of products details:</h1>

    <div>

        <table class="table">
            <thead>
                <tr>
                    <th>name</th>
                    <th>image</th>
                    <th>price</th>

                </tr>
            </thead>
            <tbody>

                @foreach($products as $c)

                <tr>
                    <td>{{$c->name}}</td>
                    <td> <img src="{{$c->cover_image}}" alt="image not found" class="img-thumbnail" style="width:80px;height:80px;"></td>
                    <td>{{$c->price}}</td>

                    <td>
                        <a href="/products/{{$c->id}}/edit" class="btn btn-primary btn-sm">Edit</a>



                        <!-- <form action="/products/{{$c->id}}" method="post"> -->
                        <form action="{{route('products.destroy',$c->id)}}" method="post">
                            @csrf
                            @method('delete')

                            <input type="submit" value='delete'>
                        </form>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>



    </div>

</div>
@endsection