@extends('layout.app')

@section('content')

<div class="card-body">
    <a class="btn btn-sm btn-primary float-right m-3" href="{{ route('subcategory.create') }}">Add New</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#SL</th>
                <th scope="col">Category Name</th>
                <th scope="col">Sub-Category Name</th>
                <th scope="col">Icon</th>
                <th scope="col">Action</th>


            </tr>
        </thead>


        <tbody>

            @forelse($subcategory as $subcat)
            <tr>
                <th scope="row">{{++$loop->index }}</th>
                <td>{{$subcat->category->name}}</td>
                <td>{{$subcat->name}}</td>
                <td>{{$subcat->cat_icon}}</td>


                <td class="white-space-nowrap">
                    <a href="{{route('subcategory.edit',$subcat)}}">
                        <i class="btn btn-primary btn-sm">Edit</i>
                    </a>

                </td>
            </tr>
            @empty

            <tr>
                <td colspan="4">No Category Found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
