@extends('layout.app')
@section('content')

<form action="{{route('admincustomer.store')}}"class="col-lg-8 offset-3" method='post' enctype="multipart/form-data">

@csrf
    <div class="card">
        <div class="card-header"><strong>Add New Customer</strong>
            
            
        <div class="card-body card-block">
            <div class="form-group">
                <label for="FullName" class=" form-control-label">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Manufacturer Name" class="form-control class="form-control @if($errors->has('first_name')) parsley-error @endif" placeholder="First Name">

                @if ($errors->has('first_name'))
                    <ul class="parsley-errors-list filled">
                          <li>{{$errors->first('first_name')}}</li>
                    </ul>

                @endif  
            </div>

            <div class="form-group">
                <label for="FullName" class=" form-control-label">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Manufacturer Name" class="form-control class="form-control @if($errors->has('last_name')) parsley-error @endif" placeholder="Last Name">

                @if ($errors->has('last_name'))
                    <ul class="parsley-errors-list filled">
                          <li>{{$errors->first('last_name')}}</li>
                    </ul>

                @endif  
            </div>


            <div class="form-group">
                <label for="FullName" class=" form-control-label">Email</label>
                <input type="text" id="email" name="email" placeholder="Manufacturer Email" class="form-control class="form-control @if($errors->has('email')) parsley-error @endif">

                @if ($errors->has('email'))
                    <ul class="parsley-errors-list filled">
                          <li>{{$errors->first('email')}}</li>
                    </ul>

                @endif  
            </div>



            <div class="form-group">
                <label for="FullName" class=" form-control-label">Mobile Number</label>

                    <select name="contact_ext" id="" class="form-control @if($errors->has('contact_ext')) parsley-error @endif">

                    @forelse($context as $cext)
                    <option value="{{$cext->ext}}">{{$cext->ext}}</option>
                    @endforelse
                    </select>
                    @if($errors->has('contact_ext'))
                    <ul class="parsley-errors-list filled">
                        <li>{{$errors->first('contact_ext')}}</li>
                    </ul>
                    @endif

               

                @if ($errors->has('contact'))
                    <ul class="parsley-errors-list filled">
                          <li>{{$errors->first('contact')}}</li>
                    </ul>

                @endif
                
                 <input type="text" id="contact" name="contact" placeholder="XXXXXXXXX" class="form-control @if($errors->has('contact')) parsley-error @endif">
                 @if($errors->has('contact'))
                 <ul>
                     <li>{{$errors->first('contact')}}</li>
                 </ul>
                 @endif
            </div>


            <div class="form-group">
                <label for="Address" class=" form-control-label">Address</label>
                    <textarea class="form-control @if($errors->has('address')) parsley-error @endif" name="address" rows="5" id="example-textarea"></textarea>
                    @if($errors->has('address'))
                    <ul class="parsley-errors-list filled">
                        <li>{{$errors->first('address')}}</li>
                    </ul>
                    @endif
            </div>

                 <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="f_image" class=" form-control-label">Postal Code/ZIP</label>
                                    <input type="text" id="image" name="zip"  class="form-control" placeholder="Zip" >
                                </div>

                            </div>
                    </div>
                 <div class="row form-group">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="f_image" class="form-control-label">Country</label>
                                    <select name="country_id" id="country_id" class="form-control" onchange="set_state(this.value)">
                                <option value="">Select Country</option>
                                    @forelse($country as $c)
                                         <option value="{{$c->id}}">{{$c->country}}</option>                       
                                </select>
                                </div>

                            </div>
                    </div>

                <div class="form-group mb-0">
                            <div class="col-2 mr-3">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                            </div>
                        </div>

        </div>
    </div>
</form>
 @endsection