<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

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
        $cat=new Category;
        $cat->name=$r->FullName;
        $cat->is_game=$r->is_game;
        $cat->feature_cat=$r->featured;
        $cat->show_catpage=$r->catpage;
        $cat->cat_page_order=$r->order;
        $cat->cat_icon=$r->cat_icon;


        if($r->file('cat_icon')){
            $image = $r->file('cat_icon');
            $cat_icon_image = '/public/images/category/'.time().'.'.Str::random(8).time().'.'.$image->extension();
            $image->move(public_path('images/category'),$cat_icon_image);
            $cat->cat_icon=$cat_icon_image;
         }

         if($r->file('feature_image')){
            $image = $r->file('feature_image');
            $feature_image = '/public/images/category/'.time().'.'.$image->extension();
            $image->move(public_path('images/category'),$feature_image);
            $cat->feature_image=$feature_image;
         }

        $cat->feature_image=$r->f_image;

        if($r->file('cat_image')){
            $image = $r->file('cat_image');
            $cat_image = '/public/images/category/'.time().'.'.$image->extension();
            $image->move(public_path('images/category'),$cat_image);
            $cat->cat_image=$cat_image;
         }


         if($r->file('lsb_image')){
            $image = $r->file('lsb_image');
            $lsb_image = Str::random(8).time().'.'.$image->extension();
            $destinationPath = public_path('/images/category');
            if($image->extension() != 'svg'){
                $img = Image::make($image->path());
                $img->resize(270, 440)->save($destinationPath.'/'.$lsb_image);
            }else{
                $image->move(public_path('images/category'),$lsb_image);
            }
            $cat->lsb_image='/public/images/category/'.$lsb_image;
         }
        $cat->Isb_image=$r->ban_image;
        $cat->cat_page_order=$r->image1;
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
