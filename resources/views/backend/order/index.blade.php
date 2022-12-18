@extends('layout.app')

@section('content')

<div class="card-body">
    {{-- <a class="btn btn-sm btn-primary float-right m-3" href="{{ route('order.create') }}">Add New</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#SL</th>
                <th scope="col">Customer</th>
                <th scope="col">Order Date</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>


        <tbody>
            @php $status=array('Pending','Processing','Delivered','Canceled'); @endphp
            @php $statusclass=array('warning','info','success','danger'); @endphp
      
             @forelse($order as $or)
            <tr>
                <th scope="row">{{++$loop->index }}</th>
                <td>{{$or->full_name}}<br>
                Call:{{$or->contact_ext}}-{{$or->contact}}<br>
                Email:{{$or->email}}
                </td>
                <td>{{date('d/m/Y',strtotime($or->created_at))}}</td>
                <td>{{number_format($or->total,2)}}</td> 
                <td><span class="{{$statusclass[$or->status]}}">{{$status[$or->status]}}</td>
                
                 <td>
                    <a href="{{route('order.show',$or->id)}}" class="btn btn-primary rounded btn-sm waves-effect">Show</a>                   
                    <a href="{{route('order.edit',$or->id)}}" class="btn btn-success rounded btn-sm waves-effect">Edit</a>

                    {{--
                    @if($or->status !=2)
                    <a href="{{route('order.delete',$or->id)}}" class="btn btn-primary btn-rounded width-sm waves-effect">Delete</a> --}}
                </td> 
                {{-- @endif --}}
                  @empty
                
                <td colspan="6" class="text-center">
                    there is no data
                </td>
            </tr>
          
              @endforelse
             

        </tbody>
    </table>
</div>

@endsection