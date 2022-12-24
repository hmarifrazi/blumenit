@extends('layout.app')

@section('content')

<div class="card-body">
    <a class="btn btn-sm btn-primary float-right m-3" href="{{ route('products.create') }}">Add New</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#SL</th>
                <th scope="col">Name</th>
                <th scope="col">SKU</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

            </tr>
        </thead>


        <tbody>
            @forelse($product as $pro)
            <tr>
                <th scope="row">{{ ++$loop->index }}</th>
                <td>{{$pro->name}}</td>
                <td>{{$pro->sku}}</td>
                <td>{{$pro->price}}</td>
                <td><img width="50px" src="{{asset('public/'.$pro->feature_image)}}" alt=""></td>
                <td class="white-space-nowrap">
                    <a href="{{route('products.show',$pro)}}" class="btn btn-success btn rounded">
                        Show
                    </a>
                    <a href="{{route('products.edit',$pro)}}" class="btn btn-info btn rounded">
                        Edit
                    </a>
                </td>
                @empty
                <th colspan="5" class="text-center">No Pruduct Found</th>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>





@endsection
