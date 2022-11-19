<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\product\ProductProduct;

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
        
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try{
        //     $image = $request->file('feature_image');
        //     $imageName = '/public/images/'.time().'.'.$image->extension();
        //     $product = new Product;
        //     $product->name=$request->name;
        //     $product->sku=$request->sku;
        //     $product->manufacturer_id=$request->manufacturer;
        //     $product->category_id =$request->category;
        //     $product->subcategory_id=$request->subcategory;            
        //     $product->product_title=$request->product_title;
        //     $product->feature_image=$imageName;
        //     $product->short_description=$request->short_description;
        //     $product->long_description=$request->long_description;
        //     $product->model_no =$request->model_no;
        //     $product->specifications =$request->specification;
        //     $product->warranty=$request->warranty;
        //     $product->product_condition=$request->product_condition;
        //     $product->vat_status=$request->vat;
        //     $product->price=$request->price;
        //     $product->max_qty=$request->max_qty;
        //     $product->discount=$request->discount;
        //     $product->review=$request->review;
        //     $product->new_product=$request->new_product;
        //     $product->refurbished_product=$request->refurbished_product;
        //     $product->feature_product=$request->feature_product;
        //     $product->limited_product=$request->limited_product;
        //     $product->outofstock_product=$request->out_of_stock;
        //     $product->best_seller=$request->best_seller;
        //     $product->offer=$request->offer;
        //     $product->popular=$request->popular;
        //     $product->created_by = Session::get('user');
        //     $product->updated_by = Session::get('user');
        //     if($product->save()){
        //         $image->move(public_path('images'),$imageName);
        //         if($request->image){
        //             foreach($request->image as $key=>$value){
        //                 $productimage=new Productimage;
    
        //                 $image = $request->file('image')[$key];
        //                 $imageName = Str::random(8).time().'.'.$image->extension();
           
        //                 $destinationPath = public_path('/images/thumbnails');
        //                 $img = Image::make($image->path());
        //                 $img->resize(100, 100)->save($destinationPath.'/'.$imageName);
        //                 //$img->resize(643, 640, function ($constraint) {$constraint->aspectRatio();})->save($destinationPath.'/'.$imageName);
                
        //                 $destinationPath = public_path('/images/product');
        //                 //$img->resize(643, 640)->save($destinationPath.'/'.$imageName);
        //                 $image->move($destinationPath, $imageName);
                        
        //                 $productimage->product_id=$product->id;
        //                 $productimage->image=$imageName;
                        
        //                 $productimage->save();
        //             }
        //         }
                
        //         return redirect('products')->with($this->responseMessage(true, null, "You have successfully added a product."));
        //     }
        //  }catch(Exception $e){
        //     return redirect('products')->with($this->responseMessage(false, "error", "Please try again!"));
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
        $product = Product::paginate(10);
        return view('products.edit',compact('Product','product'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
