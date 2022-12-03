<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Traits\ResponseTrait;

use App\Models\Manufacturer;
use App\Models\Category;
use App\Models\Productimage;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Exception;
use Session;
use Illuminate\Support\Facades\Log;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::paginate(10);
        return view('products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products =product::all();
        $products=Category::get(['id','name']);
        $manufacturer=Manufacturer::get(['id','name']);
        $subcategory=SubCategory::get(['id','name']);
        return view('products.create',compact('products','manufacturer','subcategory'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data['name'] = $request->name;
        $data['sku'] = $request->sku;
        $data['model_no'] = $request->model_no;
        $data['product_title'] = $request->product_title;
       
        $data['short_description'] = $request->short_description;
        $data['long_description'] = $request->long_description;
        $data['price'] = $request->price;
        $data['discount'] = $request->discount;
        $data['vat_status'] = $request->vat_status;
        $data['warranty'] = $request->warranty;
        $data['product_condition'] = $request->product_condition;
        $data['max_qty'] = $request->max_qty;
        $data['name'] = $request->category;
        $data['name'] = $request->Manufacturer;
        $data['name'] = $request->subcategory;

        Product::create($data);
        return redirect('products');
    // try{
    //         $product = new Product;
    //         $product->name=$request->name;
    //         $product->sku=$request->sku;
    //         $product->manufacturer_id=$request->manufacturer;
    //         $product->category_id =$request->category;
    //         $product->subcategory_id=$request->subcategory;            
    //         $product->product_title=$request->product_title;
    //         $product->feature_image=$request->imageName;
    //         $product->short_description=$request->short_description;
    //         $product->long_description=$request->long_description;
    //         $product->model_no =$request->model_no;
    //         $product->specifications =$request->specification;
    //         $product->warranty=$request->warranty;
    //         $product->product_condition=$request->product_condition;
    //         $product->vat_status=$request->vat;
    //         $product->price=$request->price;
    //         $product->max_qty=$request->max_qty;
    //         $product->discount=$request->discount;
    //         $product->review=$request->review;
    //         $product->new_product=$request->new_product;
    //         $product->refurbished_product=$request->refurbished_product;
    //         $product->feature_product=$request->feature_product;
    //         $product->limited_product=$request->limited_product;
    //         $product->outofstock_product=$request->out_of_stock;
    //         $product->best_seller=$request->best_seller;
    //         $product->offer=$request->offer;
    //         $product->popular=$request->popular;
    //         if($request->hasFile('image')){
    //             $imageName = rand(111,999).time().'.'.$request->image->extension();  
    //             $request->image->move(public_path('uploads/product'), $imageName);
    //             $product->feature_image=$imageName;
    //         }
    //         $product->status=1;
    //         if($product->save()){ 

    //             return redirect('products')->with('success','Data saved');
    //         }

    // }
    // catch(Exception $e){
    //     //dd($e);
    //     return back();
    // }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $manufacturer=Manufacturer::all();
        $category=Category::all();
        $subcategory=Subcategory::where('category_id',$product->category_id)->get();
        return view('products.edit',compact('product','manufacturer','category','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
// $data['manufacturer_id'] = $request->manufacturer;
// $data['category_id'] = $request->category;
// $data['subcategory_id'] = $request->subcategory;
