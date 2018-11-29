@extends('layouts.app')

@section('content')
 <div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-12">
             <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
                     <div class="col-md-12">
                         <div class="card-header mt-1 mt-2">
                         <table class="table table-striped">
                             <tr>
                                 
                                 <th>First Name</th>
                                 <th>Last Name</th>
                                 <th>E-mail</th>
                                 <th>Type</th>
                                 <th>ID</th>
                                 <th>Mobile</th>
                                 <th></th>
                                 <th></th>
                             </tr>
                         
                         @if(count($technicians)>0)
                             @foreach($technicians as $technician)
                             <tr>
                                 <th>{{$technician->fname}}</th>
                                 <th>{{$technician->lname}}</th>
                                 <th>{{$technician->email}}</th>
                                 <th>{{$technician->type}}</th>
                                 <th>{{$technician->nic}}</th>
                                 <th>{{$technician->mobile}}</th>
                                 <th><a href="/technicians/{{$technician->id}}/edit" class="btn btn-primary">Edit<a></th>
                                 <th><a href="/technicians/{{$technician->id}}" class="btn btn-primary">Delete<a></th>
                             </tr>  
                             @endforeach
                         @endif   
                         </table>               
                     </div>
                              
                     <br/>
                         
                     </div>
                     <div class="row">
                         <diV class="mr-auto">
                             <a href="/technicians/create" class="btn btn-default">Go to add</a>
                         </div>
                         <div class="ml-auto">
                             {{$technicians->links()}}
                         </diV>
                     </div>
                </div>
             </div>
        </div>
        <br>
    </div>
</div>
@endsection