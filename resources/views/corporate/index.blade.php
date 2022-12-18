@extends('layout.app')

@section('content')

<div class="card-body">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#SL No</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>


        <tbody>
            @php $status=array('Pending','Done'); @endphp
            @php $statusclass=array('warning','info','success','danger'); @endphp
      
             @forelse($data as $c)
            <tr>
                <th scope="row">{{++$loop->index }}</th>
                <td>{{$c->title}}<br>
                <td>{{$c->name}}<br>
                <td>{{$c->contact}}<br>
                <td>{{$c->email}}<br>
                <td>{{$c->address}}<br>
                <td>{{$c->status==1?"Active":"Inactive"}}<br>
               
                </td>
                
                
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