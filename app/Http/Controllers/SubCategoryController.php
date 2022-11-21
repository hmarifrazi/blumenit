<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Exception;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subcategory=SubCategory::paginate(10);
       return view('subcategory.index',compact('subcategory'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory=SubCategory::paginate(10);
        return view('subcategory.create',compact('subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $image= $request->file('image');
            $imageName = '/public/images/'.time().'.'.$request->cat_icon->extension();
       $subcat=new Subcategory;
       $subcat->name=$request->FullName;
       $subcat->category_id=$request->category;
    //    $subcat->cat_icon=$request->cat_icon;
       $subcat->cat_icon = $imageName;

            if($subcat->save()) {
                $image->move(public_path('subcategory/images'),$imageName);
                return redirect(route('subcategory.index'));
            }
       
    //    if($request->hasFile('image')){
    //         $imageName = rand(111,999).time().'.'.$request->image->extension();
    //         $request->image->move(public_path('uploads/subcategory'),$imageName);
    //         $request->cat_icon=$imageName;
    //    }

    //    $subcat->status=1;
    //    if($subcat->save()){
    //     return redirect('subcategory')->with('success','Data saved');
    //    }
     }
        catch(Exception $e){
            dd($e);
            return redirect(route('subcategory.create'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
