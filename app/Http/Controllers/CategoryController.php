<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Categoryimage;
use Exception;
use Session;
use Illuminate\Support\Str;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::paginate(10);
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        try{
        $cat=new Category;
        $cat->name=$r->FullName;
        $cat->is_game=$r->is_game;
        $cat->feature_cat=$r->featured;
        $cat->show_catpage=$r->catpage;
        $cat->cat_page_order=$r->order;
        


        if($r->file('cat_icon')){
            $image = $r->file('cat_icon');
            $cat_icon = '/public/images/category/'.time().'.'.$image->extension();
            $image->move(public_path('images/category'),$cat_icon);
            $cat->cat_icon=$cat_icon;
        }


        if($r->file('feature_image')){
            $image = $r->file('feature_image');
            $feature_image = '/public/images/category/'.time().'.'.$image->extension();
            $image->move(public_path('images/category'),$feature_image);
            $cat->feature_image=$feature_image;
        }

        if($r->file('ban_image')){
            $image = $r->file('ban_image');
            $ban_image = Str::random(8).time().'.'.$image->extension();
            $destinationPath = public_path('/images/category');
            if($image->extension() != 'svg'){
                $img = Image::make($image->path());
                $img->resize(270, 440)->save($destinationPath.'/'.$ban_image);
            }else{
                $image->move(public_path('images/category'),$ban_image);
            }
            $cat->ban_image='/public/images/category/'.$ban_image;
            
         }

         if($cat->save()){
            foreach($r->image as $key=>$value){

                $categoryimage=new Categoryimage;

                $image = $r->file('image')[$key];
                $imageName = Str::random(8).time().'.'.$image->extension();
   
 
                $destinationPath = public_path('/public/images/category');
                $img = Image::make($image->path());
                $img->resize(1920, 420)->save($destinationPath.'/'.$imageName);


       $categoryimage->category_id=$cat->id;
                     $categoryimage->image='/public/images/category/'.$imageName;
                    
                     $categoryimage->save();
                }
                return redirect(route('category.index'));
             }
        }catch(Exception $e){
            return redirect(route('category.create'));
        }
    }
    
        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
