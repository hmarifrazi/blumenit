<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::pginate(10);
        return view('products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $product=new product;
        $product->product_name=$r->product_name;
        $product->sku=$r->sku;
        if($r->Product_image){
            $imageName = rand(111,999).time().'.'.$r->image->extension();  
            $r->image->move(public_path('uploads/Products'), $imageName);
            $product->Product_image=$imageName;
        }
        $product->price=$r->price;
        $product->qty=$r->qty;
        $product->discount=$r->discount;
        $product->manufacturer_idt=$r->manufacturer_id;
        $product->category_id=$r->category_id;
        $product->subcategory_id=$r->subcategory_id;
        $product->save();
        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, Product $product)
    {
        $product->product_name=$r->product_name;
        $product->sku=$r->sku;
        $product->Product_image=$r->Product_image;
        $product->price=$r->price;
        $product->qty=$r->qty;
        $product->discount=$r->discount;
        $product->manufacturer_idt=$r->manufacturer_id;
        $product->category_id=$r->category_id;
        $product->subcategory_id=$r->subcategory_id;
        $product->save();
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
