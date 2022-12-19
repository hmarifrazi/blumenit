@extends('layout.app')
@section('content')

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3 text-center">Update Order</h4>
                            <form action="" method="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="payment_status" class="col-sm-3 col-form-label">Payment Status</label>
                                    <div class="col-sm-9">
                                        <select name="payment_status" class="form-control" id="payment_status">
                                            <option value="0" @if($order->payment_status==0) selected @endif>Unpaid</option>
                                            <option value="1" @if($order->payment_status==1) selected @endif>Paid</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="order_status" class="col-sm-3 col-form-label">Order Status</label>
                                        <div class="col-sm-9">
                                        <select name="order_status" class="form-control"  id="order_status" >
                                            <option value="0" @if($order->order_status==0) selected @endif>Pending</option>
                                            <option value="1" @if($order->order_status==1) selected @endif>Processing</option>
                                            <option value="2" @if($order->order_status==2) selected @endif>Delivered</option>
                                            <option value="3" @if($order->order_status==3) selected @endif>Cancelled</option>
                                        </select>
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-info float-right rounded">Save</button>

                                



                            </form>

                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection