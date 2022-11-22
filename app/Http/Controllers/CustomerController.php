<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\PhoneExt;
use App\Models\ProductReview;
use App\Models\Wishlist;
use App\Models\Order;
use Illuminate\Http\Request;
use  App\Http\Requests\Customer\SignUpRequest;
use  App\Http\Requests\Customer\NewReviewRequest;
use  App\Http\Requests\Customer\UpdateCustomerRequest;

use App\Http\Traits\ResponseTrait;
use Exception;
use Session;
use PDF;


class CustomerController extends Controller
{

    use ResponseTrait;
    public function signin(Request $request){
        return view('frontend.customer.signin',compact('request'));
    }

    public function validsignin(Request $request){
        try{
            $contact=explode('-',$request->contact);
            if(count($contact)<2){
                return redirect()->back();
            }
            $check_cust=Customer::where('email',$request->email)
                                ->where('contact_ext',$contact[0])
                                ->where('contact',$contact[1])
                                ->first();

            if($check_cust){
                if($check_cust->status == 0){
                    return redirect()->back();
                }else{
                    $this->setSession($check_cust);
                    return redirect(route($request->p,$request->email));
                }
            }else{
                return redirect()->back();
            }

        }catch(Exception $e){
            //dd($e);
            return redirect()->back();
        }

    }

    protected function setSession($user){
        return request()->session()->put([
            'user' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'contact_ext' => $user->contact_ext,
            'contact' => $user->contact,
            'type' => 'Signed in with email address:'
        ]);
    }

    public function logout(){
        request()->session()->flush();
        return redirect(route('front.home'));
    }

    public function signup(Request $request){
        return view('frontend.customer.signup',compact('request'));
    }

    public function store(SignUpRequest $request)
    {
       try{
           $contact=explode('-',$request->contact);
            if(count($contact) < 2){
                return redirect()->back();
            }
            $cust = new Customer;
            $cust->first_name = $request->first_name;
            $cust->last_name = $request->last_name;
            $cust->email = $request->email;
            $cust->contact_ext = $contact[0];
            $cust->contact = $contact[1];
            $cust->status = 1;
            if($cust->save()){
                $this->setSession($cust);
                return redirect(route($request->p))->with($this->responseMessage(true, null, $request->email));
            }
       }catch(Exception $e){
            //dd($e);
            return redirect()->back();
        }
    }

    public function review(NewReviewRequest $request){
        try{
            $rev = new ProductReview;
            $rev->name = $request->name;
            $rev->review = $request->review;
            $rev->rating = $request->rating;
            $rev->product_id = $request->product_id;
            $rev->created_by = session()->get('user')?session()->get('user'):0;
            if($rev->save()){
                return redirect()->back();
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back();
        }
    }

    public function wishlist(Request $request){
        try{
            $rev = new Wishlist;
            $rev->product_id = $request->id;
            $rev->customer_id = session()->get('user');
            if($rev->save()){
                return redirect(route($request->p));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back();
        }
    }


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
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
