@extends('layout.app')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card-box">
                    <h4 class="mt-0 mb-3 header-title">Header Form</h4>
                    <form action="{{route('headerview.update',$headerview->id)}}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" value="{{$headerview->id}}" name="id">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Logo Link</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$headerview->logo_link}}" id="inputEmail3" name="link" placeholder="Logo Link" class=" form-control @if($errors->has('link')) parsley-error @endif">

                                @if ($errors->has('link'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('link')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Upload Logo</label>
                            <div class="col-sm-9">
                                <input type="file" data-default-file='{{asset($headerview->logo_image)}}' class="dropify" data-height="150" name="image">

                                @if ($errors->has('image'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('image')}}</li>
                                </ul>

                                @endif
                                <span>Logo image should be 137:50 ratio</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-3">
                                <label class="col-form-label mt-0 mb-3">Upload Favicon</label>
                            </div>
                            <div class="col-sm-9">
                                <input type="file" data-default-file='{{asset($headerview->favicon)}}' class="dropify" data-height="43" name="favicon" />
                                <span>favicon image should be 53:43 ratio</span>
                            </div><!-- end col -->
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Whaitsapp number</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$headerview->whatsapp}}" id="inputEmail3" name="whatsapp" placeholder="Whatsapp Number" class="form-control @if($errors->has('whatsapp')) parsley-error @endif">

                                @if ($errors->has('whatsapp'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('whatsapp')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Contact number</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$headerview->contact}}" id="inputEmail3" name="contact" placeholder="Contact Number" class="form-control @if($errors->has('contact')) parsley-error @endif">

                                @if ($errors->has('contact'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('contact')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Contact Email</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$headerview->email}}" id="inputEmail3" name="email" placeholder="Contact Email" class="form-control @if($errors->has('email')) parsley-error @endif">

                                @if ($errors->has('email'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('email')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="menu_setting" class="col-sm-3 col-form-label">Menu Setting</label>
                            <div class="col-sm-9">
                                <?php $menu_settings = json_decode($headerview->menu_setting); ?>
                                <select multiple="multiple" class="multi-select" id="menu_setting" name="menu_setting[]" data-plugin="multiselect">
                                    <option value="about" @if($menu_settings->about=="show") selected @endif>About Us</option>
                                    <option value="category" @if($menu_settings->category=="show") selected @endif>Category</option>
                                    <option value="games" @if($menu_settings->games=="show") selected @endif>Gaming</option>
                                    <option value="corporate" @if($menu_settings->corporate=="show") selected @endif>Corporate</option>
                                    <option value="shopview" @if($menu_settings->shopview=="show") selected @endif>Products</option>
                                    <option value="contact" @if($menu_settings->contact=="show") selected @endif>Contact</option>
                                </select>
                            </div>
                        </div>
                        <hr style="height:0.5px;border:none;color:rgb(220, 220, 220);background-color:rgb(220, 220, 220);" />
                        <div class="form-group mb-0">
                            <div class="col-2 mr-3">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>


        </div>
    </div>

</div>





@endsection
