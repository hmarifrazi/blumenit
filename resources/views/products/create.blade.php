@extends('layout.app')

@section('content') 
 
<div class="container">
    <form class="form" method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="userName1">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="sku">Sku</label>
            <input type="text" class="form-control" id="sku" name="sku" placeholder="Sku">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="userName1">Model No</label>
            <input type="text" class="form-control" id="model_no" name="model_no" placeholder="Model No">
        </div>
        <div class="form-group col-md-6">
            <label for="confirm1">Order Note</label>
            <input type="text" class="form-control" name="product_title"  name="sku" placeholder="Order note">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="userName1" >Manufacturer</label>
            <select name="manufacturer" class="form-control">
               
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Category</label>
                <select name="category" id="cat" class="form-control">
                <option value="">--Select Category--</option>
                  
                </select>
        </div>
        <div class="form-group col-md-4">
            <label for=""confirm1""> Sub Category</label>
                <select name="subcategory" id="subcat" class="form-control">
                <option value="" >--Select Category--</option>
                        <option value="">--Select Category--</option>
                </select>
        </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-3">
                <label for="name1">Feature Image</label>
                <input type="file" class="form-control" data-height="300" name="feature_image" >
            </div>
        <div class="form-group col-md-3">
            <label for="name1">Short Description</label>
            <textarea class="summernote" name="short_description" rows="13" id="example-textarea"></textarea>
        </div>
        <div class="form-group col-md-3">
            <label for="name1">Long Description</label>
            <textarea class="summernote" name="long_description" rows="13" id="example-textarea"></textarea>
        </div>
        <div class="form-group col-md-3">
            <label for="name1">Specification</label>
            <textarea class="summernote" name="specification" rows="13" id="example-textarea"></textarea>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="userName1">Price</label>
            <input type="text" class="form-control" id="userName1" name="price" placeholder="Name">
        </div>
    
        <div class="form-group col-md-4">
            <label>Discount (%)</label>
            <input type="text" class="form-control" id="password1" name="discount" placeholder="Discount">
        </div>
        <div class="form-group col-md-4">
            <label for="confirm1">VAT Status</label>
            <input type="text" class="form-control"  name="vat" placeholder="VAT Status">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="userName1">Warranty</label>
            <input type="text" class="form-control" name="warranty">
        </div>
    
        <div class="form-group col-md-4">
            <label>Product Condition</label>
            <input type="text" class="form-control"  name="product_condition" >
        </div>
        <div class="form-group col-md-4">
            <label >Max Qty</label>
            <input type="text" class="form-control" name="max_qty" placeholder="Max Qty To buy in single order">
        </div>
    </div>
   
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            Check me out
        </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>


@endsection
        

