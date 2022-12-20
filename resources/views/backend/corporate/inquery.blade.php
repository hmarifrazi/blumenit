@extends('layout.app')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row"><!-- start page title -->
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            
                            <li class="breadcrumb-item active">Inquiry Settings</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Inquiry Settings</h4>
                </div>
            </div>
        </div><!-- end page title --> 

        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title mb-3">Inquiry List</h4>
                    @if(Session::has('response'))
                      <div class="alert alert-{{Session::get('response')['class']}}">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          {{Session::get('response')['message']}}
                      </div>
				    @endif
				   
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data)
                                    @foreach($data as $c)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$c->title}} 
                                            <td>{{$c->contact}}</td>
                                            <td>{{$c->email}}</td>
                                            <td>{{$c->address}}</td>
                                            <td>{{$c->status==1?"Done":"Pending"}}</td>
                                           
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $data->appends($_GET)->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div> <!-- end container -->
</div><!-- end wrapper -->
<!-- Button to Open the Modal -->

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <div class="col-6">
                <b>Name: </b> <span class="name_c"></span>
            </div>
            <div class="col-6">
                <b>Contact: </b> <span class="contact_c"></span>
            </div>
            <div class="col-6">
                <b>Email: </b> <span class="email_c"></span>
            </div>
            <div class="col-6">
                <b>Address: </b> <span class="address_c"></span>
            </div>
            <div class="col-12">
                <span class="description_c"></span>
            </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

@endsection

