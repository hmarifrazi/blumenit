@extends('layout.app')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title mb-3">Header Option</h4>
                    <a class="btn btn-sm btn-primary float-right m-3" href="{{ route('headerview.create') }}">Add New</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#SL</th>
                                    <th scope="col">Logo Link</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Favicon</th>
                                    <th scope="col">Whatsapp</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>


                            <tbody>

                                @forelse($data as $cat)
                                <tr>
                                    <th scope="row">{{++$loop->index }}</th>
                                    <td>{{$cat->logo_link}}</td>
                                    <td><img src="{{asset($cat->logo_image)}}" width="40" height="40" alt=""></td>
                                    <td><img src="{{asset($cat->favicon)}}" width="40" height="40" alt=""></td>
                                    <td>{{$cat->whatsapp}}</td>
                                    <td>{{$cat->contact}}</td>
                                    <td>{{$cat->email}}</td>
                                    <td>

                                        <a href="{{route('headerview.edit',$cat->id)}}" class="btn btn-primary btn-rounded width-sm waves-effect">Edit</a>
                                        <!--<button type="button" class="btn btn-danger btn-rounded width-sm waves-effect waves-light">Delete</button>-->
                                    </td>
                                    @empty
                                    <td colspan="7" class="text-center">
                                        there is no data
                                    </td>
                                </tr>

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
