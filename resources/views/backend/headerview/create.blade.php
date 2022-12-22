@extends('layout.app')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card-box">
                    <h4 class="mt-0 mb-3 header-title">Header View</h4>
                    <form action="{{route('headerview.store')}}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Logo Link</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputEmail3" name="link" placeholder="Logo Link" class=" form-control @if($errors->has('link')) parsley-error @endif">

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
                                <input type="file" class="dropify" data-height="150" name="image">

                                @if ($errors->has('image'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('image')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>
                        <hr style="height:0.5px;border:none;color:rgb(220, 220, 220);background-color:rgb(220, 220, 220);" />

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Upload Favicon</label>
                            <div class="col-sm-9">
                                <input type="file" class="dropify" data-height="150" name="favicon">

                                @if ($errors->has('favicon'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('favicon')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>
                        <hr style="height:0.5px;border:none;color:rgb(220, 220, 220);background-color:rgb(220, 220, 220);" />

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Whaitsapp number</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputEmail3" name="whatsapp" placeholder="Whatsapp Number" class="form-control @if($errors->has('whatsapp')) parsley-error @endif">

                                @if ($errors->has('whatsapp'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('whatsapp')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>

                        <hr style="height:0.5px;border:none;color:rgb(220, 220, 220);background-color:rgb(220, 220, 220);" />


                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Contact number</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputEmail3" name="contact" placeholder="Contact Number" class="form-control @if($errors->has('contact')) parsley-error @endif">

                                @if ($errors->has('contact'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('contact')}}</li>
                                </ul>

                                @endif
                            </div>
                        </div>

                        <hr style="height:0.5px;border:none;color:rgb(220, 220, 220);background-color:rgb(220, 220, 220);" />


                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Contact Email</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputEmail3" name="email" placeholder="Contact Email" class="form-control @if($errors->has('email')) parsley-error @endif">

                                @if ($errors->has('email'))
                                <ul class="parsley-errors-list filled">
                                    <li>{{$errors->first('email')}}</li>
                                </ul>

                                @endif
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
