@extends('layout.app')
@section('content')

<div class="col-lg-6 offset-3">
    <div class="card">
        <div class="card-header"><strong>Add New Category</strong>
            
            
        <div class="card-body card-block">
            <div class="form-group">
                <label for="FullName" class=" form-control-label">Name</label>
                <input type="text" id="FullName" name="FullName" placeholder="category name" class="form-control">
            </div>
            <div class="form-group row mb-3">
                <div class="form-group">
                    <label  for="is_game" class="mr-5">For Games?</label>
                    <div>
                        <input type="radio"  id="is_game" name="is_game" value="1" >
                        <label for="is_game">Yes</label>
                    </div>
                    <div>
                        <input type="radio" id="No" value="0" name="No" >
                        <label for="is_game">No</label>
                    </div>
                    
                </div>
            </div>


            <div class="form-group row mb-3">
                <label class="col-md-3 col-form-label" for="userName1">For Games? </label>
                <div class="col-md-9"><br>
                    <div class="radio radio-info radio-info form-check-inline">
                        <input type="radio" id="is_game" value="1" name="is_game">
                        <label for="is_game">YES</label>
                    </div>
                    <div class="radio radio-info form-check-inline">
                        <input type="radio" id="is_game1" value="0" name="is_game" checked>
                        <label for="is_game1">NO</label>
                    </div>
                </div>
            </div>


                <div class="form-group">
                    <label for="featured" class="mr-5">Featured?</label>
                    <input type="radio"  name="gender" name="Yes" >Yes
                    <input type="radio"  name="gender" name="No" >No
                </div>

                <div class="form-group">
                    <label for="catpa" class="mr-3">Show Category Page?</label>
                    <input type="radio"  name="gender" name="Yes" >Yes
                    <input type="radio"  name="gender" name="No" >No
                </div>

                    <div class="form-group">
                        <label for="order" class=" form-control-label">Showing Order In Category Page</label>
                        <input type="text" name="order" id="order" placeholder="000" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="icon" class=" form-control-label">Category Icon</label>
                        <input type="file" name="icon" id="icon" placeholder="000" class="form-control">
                    </div>

                        <div class="row form-group">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="city" class=" form-control-label">City</label>
                                    <input type="text" id="city" placeholder="Enter your city" class="form-control">
                                </div>

                            </div>

                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control">
                                 </div>
                                </div>
                    </div>
                <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
        </div>
    </div>
 </div>
 @endsection