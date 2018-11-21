@extends('layouts.app')

@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
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
                                 <th></th>
                                 <th>Product Type</th>
                                 <th>created at</th>
                                 <th></th>
                             </tr>
                         
                         @if(count($types)>0)
                             @foreach($types as $type)
                             <tr>
                                 <th>{{$type->type_id}}</th>
                                 <th>{{$type->type}}</th>
                                 <th>{{$type->created_at}}</th>
                                 <th><a href="/addproducts/{{$type->type_id}}/edit" class="btn btn-primary">Edit<a></th>
                             </tr>  
                             @endforeach
                         @endif   
                         </table>               
                     </div>
                              
                     <br/>
                         
                     </div>
                     <div class="row">
                         <diV class="mr-auto">
                             <a href="/addproducts/create" class="btn btn-default">Go to add</a>
                         </div>
                         <div class="ml-auto">
                             {{$types->links()}}
                         </diV>
                     </div>
                </div>
            </div>
        </div>
        <br>
        
    </div>
</div>
@endsection

