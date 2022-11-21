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
        $products =product::all();
        return view('products.create',compact('products'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd();
    try{
            $product = new Product;
            $product->name=$request->name;
            $product->sku=$request->sku;
            $product->manufacturer_id=$request->manufacturer;
            $product->category_id =$request->category;
            $product->subcategory_id=$request->subcategory;            
            $product->product_title=$request->product_title;
            $product->feature_image=$request->imageName;
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->model_no =$request->model_no;
            $product->specifications =$request->specification;
            $product->warranty=$request->warranty;
            $product->product_condition=$request->product_condition;
            $product->vat_status=$request->vat;
            $product->price=$request->price;
            $product->max_qty=$request->max_qty;
            $product->discount=$request->discount;
            $product->review=$request->review;
            $product->new_product=$request->new_product;
            $product->refurbished_product=$request->refurbished_product;
            $product->feature_product=$request->feature_product;
            $product->limited_product=$request->limited_product;
            $product->outofstock_product=$request->out_of_stock;
            $product->best_seller=$request->best_seller;
            $product->offer=$request->offer;
            $product->popular=$request->popular;
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();  
                $request->image->move(public_path('uploads/product'), $imageName);
<<<<<<< HEAD
                $product->feature_image=$imageName;
=======
                $Product->feature_image=$imageName;
            }
            dd('product');
            if($product->save()){
                return redirect('products')->with('success','Data saved');
>>>>>>> e44aa16c0f4117176fba17ba2f76cd4a63bf69b6
            }
            $product->status=1;
            if($product->save()){ 

                return redirect('products')->with('success','Data saved');
            }

    }
    catch(Exception $e){
        //dd($e);
        return back();
    }
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
        try{
            $product = Product::find($id);
            $product->name=$request->name;
            $product->sku=$request->sku;
            $product->manufacturer_id=$request->manufacturer;
            $product->category_id =$request->category;
            $product->subcategory_id=$request->subcategory;            
            $product->product_title=$request->product_title;
            
            if($request->file('feature_image')){
                $image = $request->file('feature_image');
                $feature_image = '/source/public/images/'.time().'.'.$image->extension();
                $image->move(public_path('images'),$feature_image);
                $product->feature_image=$feature_image;
            }
            
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->model_no =$request->model_no;
            $product->specifications =$request->specification;
            $product->warranty=$request->warranty;
            $product->product_condition=$request->product_condition;
            $product->vat_status=$request->vat;
            $product->max_qty=$request->max_qty;
            $product->price=$request->price;
            $product->discount=$request->discount;
            $product->review=$request->review;
            $product->new_product=$request->new_product;
            $product->refurbished_product=$request->refurbished_product;
            $product->feature_product=$request->feature_product;
            $product->limited_product=$request->limited_product;
            $product->outofstock_product=$request->out_of_stock;
            $product->best_seller=$request->best_seller;
            $product->offer=$request->offer;
            $product->popular=$request->popular;
            $product->updated_by = Session::get('user');
            
            /* image for slider*/ 
            if($request->old_image){
                $oldimage=explode('/',$request->old_image);
                foreach($oldimage as $imgname){
                    $imgname=$imgname;
                    $oldimagedlt=Productimage::where('image',$imgname)->delete();
                    if(file_exists(public_path('/source/public/images/product/'.$imgname))){
                        unlink(public_path('/source/public/images/product/'.$imgname));
                    }
                    if(file_exists(public_path('/source/public/images/thumbnails/'.$imgname))){
                        unlink(public_path('/source/public/images/thumbnails/'.$imgname));
                    }
                }
            }
            if($request->image){
                foreach($request->image as $key=>$value){

                    $productimage=new Productimage;

                    $image = $request->file('image')[$key];
                    $imageName = Str::random(8).time().'.'.$image->extension();
       
                    $destinationPath = public_path('/images/thumbnails');
                    $img = Image::make($image->path());
                    $img->resize(100, 100)->save($destinationPath.'/'.$imageName);
                    //$img->resize(1920, 420, function ($constraint) {$constraint->aspectRatio();})->save($destinationPath.'/'.$imageName);
            
                    $destinationPath = public_path('/images/product');
                    $image->move($destinationPath, $imageName);
                    
                    $productimage->product_id=$product->id;
                    $productimage->image=$imageName;
                    
                    $productimage->save();
                }
            }
            /* image for slider*/
            
            if($product->save()){
                return redirect('products')->with($this->responseMessage(true, null, "You have successfully updated a product."));
            }
         }catch(Exception $e){
            return back()->withInput($this->responseMessage(false, "error", "Please try again!"));
        }
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
