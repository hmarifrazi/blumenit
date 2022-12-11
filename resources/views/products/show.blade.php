@extends('layout.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
       <h4 class="page-title">Product Show</h4>
    </div>
  </div> 

  <div class="row">
    <div class="col-sm-8">
      @if($product)
         <div class="bg-picture card-box">
                    <div class="profile-info-name">
                        {{-- <img src="{{asset('uploads/'.$p->feature_image)}}" class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image"> --}}

                        <div class="profile-info-detail overflow-hidden">
                            <h4 class="m-0">Product Name: {{$product->name}}</h4>
                            <p class="text-muted"><i>Sku :{{$product->sku}}</i></p>
                            <p class="font-13">Manufacturer :{{$product->manufacturer_id}}</p>
                            <p class="font-13">Category :{{$product->category->name}}</p>
                            <p class="font-13">Sub Category :{{$product->subcategory->name?$product->subcategory->name:""}}</p>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="card-box">
                    <p class="text-muted"><i>Product Title :{{$product->product_title}}</i></p>
                    <p class="font-13">Short Description :</p>
                    <p class="font-13">{!!$product->short_description!!}</p>
                </div>
                <div class="card-box">
                    <p class="font-13">Long Description :</p>
                    <p class="font-13">{!!$product->long_description!!}</p>
                </div>
                <div class="card-box">
                    <p class="font-13 mt-3">Specification</p>
                    <p class="font-13">{!!$product->specification!!}</p>
                </div>

    </div>
    <div class="col-sm-4">
        <div class="card-box">
                    <h4 class="header-title mt-0 mb-3">Pricing Info</h4>
                    <ul class="list-group mb-0 user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-2.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">Price</h5>
                                    <p class="desc text-muted mb-0 font-12">{{$product->price}}</p>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-3.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">Discount</h5>
                                    <p class="desc text-muted mb-0 font-12">{{$product->discount}}</p>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-5.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">Quantity</h5>
                                    <p class="desc text-muted mb-0 font-12">{{$product->qty}}</p>
                                </div>
                            </a>
                        </li>

                       

                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-1.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">Warranty</h5>
                                    <p class="desc text-muted mb-0 font-12">{{$product->warranty}}</p>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-1.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">Product Condition</h5>
                                    <p class="desc text-muted mb-0 font-12">{{$product->product_condition}}</p>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-1.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">VAT</h5>
                                    <p class="desc text-muted mb-0 font-12">{{$product->vat_status}}</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
@php
$status = array("","YES","NO");    
@endphp
    </div>
     @endif
  </div>
</div>



@endsection