<?php

namespace App\Http\Controllers;

use App\Models\CorporateSetting;
use Illuminate\Http\Request;
use App\Models\Corporate_inquiry;
use App\Models\Category;

use App\Http\Traits\ResponseTrait;

use Exception;
use Session;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CorporateSettingController extends Controller
{

    use ResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data=corporate_settings::paginate(10);
         return view('backend.corporate.index',compact('data'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::orderBy('name')->get();
        return view('backend.corporate.create',compact('category'));
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
        //     $cor = new CorporateSettings;
        //     $cor->category_id=1;//$request->category_id;
        //     $cor->order_no=$request->order_no;
        //     $cor->title=$request->title;
        //     $cor->title_green=$request->title_green;
        //     $cor->right_text=$request->right_text;
        //     $cor->status=$request->status;

        //     if($request->file('side_image')){
        //         $image = $request->file('side_image');
        //         $side_image = '/source/public/images/corporate/'.time().'.'.$image->extension();
        //         $image->move(public_path('images/corporate'),$side_image);
        //         $cor->side_image=$side_image;
        //      }
             
        //      if($cor->save()){
        //         foreach($request->image as $key=>$value){
        //             $cimage=new CorporateLogo;
                    
        //             $image = $request->file('image')[$key];
        //             $imageName = Str::random(8).time().'.'.$image->extension();
        //             $destinationPath = public_path('/images/corporate');
        //             $img = Image::make($image->path());
        //             $img->resize(119, 39)->save($destinationPath.'/'.$imageName);
                    
        //             $cimage->corporate_settings_id=$cor->id;
        //             $cimage->logo='/source/public/images/corporate/'.$imageName;
        //             $cimage->save();
        //         }
        //         return redirect(route(Session::get('identity').'corporate_setting.index'))->with($this->responseMessage(true, null, "You have successfully added a data."));
        //      }
        // }catch(Exception $e){
        //     return redirect()->back()->with($this->responseMessage(false, "error", "Please try again!"));
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateSetting  $corporateSetting
     * @return \Illuminate\Http\Response
     */
    public function show(CorporateSetting $corporateSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateSetting  $corporateSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(CorporateSetting $corporateSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateSetting  $corporateSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CorporateSetting $corporateSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateSetting  $corporateSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorporateSetting $corporateSetting)
    {
        //
    }

    
}
