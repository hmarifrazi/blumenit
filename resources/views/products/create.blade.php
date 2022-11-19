@extends('layout.app')

@section('content')
 
<div class="container">
    <form>
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
            <input type="text" class="form-control" name="product_title"  name="sku" placeholder="Sku">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="userName1" >Manufacturer</label>
            <select name="manufacturer" class="form-control">
                @foreach ($manufacturer as $item)
                <option value="{{$item-id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Category</label>
                <select name="category" id="cat" class="form-control">
                <option value="">--Select Category--</option>
                    @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
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
    <div class="form-group">
        <label for="sku">Sku</label>
        <input type="text" class="form-control" id="sku" name="sku" placeholder="Sku">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
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
    <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>


@endsection
        

