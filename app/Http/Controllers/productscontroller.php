<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'name' => 'required',
                'cover_image' => 'required',
                'price' => 'required'
            ]
        );
        $products = new product();
        $products->name=request('name');
        $products->cover_image=request('cover_image');
        $products->price=request('price');
        $products->save();
        
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= product::find($id);
        // return view('contact-edit',['contact'=> $contact]);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = product::find($id);
        $products->name=request('name');
        $products->cover_image=request('cover_image');
        $products->price=request('price');
        $products->save();
        return redirect('/home')->withMessage("contact updated");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::destroy($id);
        return back()->withMessage("product deleted");
    }
    
}
