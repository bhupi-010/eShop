 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$c->id}}">
  edit
</button>
<!-- <a href="/products/{{$c->id}}/modal" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#exampleModal">Edit</a> -->

<div class="modal fade" id="exampleModal-{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
            
      <form method="post" action="{{ route('products.update', $c->id) }}">
@csrf
@method('put')

     <div class="form-group ">
         <div class="container">
               

                
                            <label for="name">name</label>
                            <input type="text"  value="{{$c->name}}" name="name" id="" class="form-control text-white bg-dark" placeholder="enter name" aria-describedby="helpId">
                            <label for="image">image</label>
                            <input type="text"  value="{{$c->cover_image}}" name="cover_image" id="" class="form-control text-white bg-dark" placeholder="enter image location" aria-describedby="helpId">
                            <label for="price">price</label>
                            <input type="text"   value="{{$c->price}}"class="form-control text-white bg-dark" name="price" id="" aria-describedby="helpId" placeholder="enter product price">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
     </div>
 </form>
    </div>
  </div>
</div>