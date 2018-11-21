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
                                 <th></th>
                                 <th>Name</th>
                                 <th>Code</th>
                                 <th>Type</th>
                                 <th>Wrrien on</th>
                                 <th></th>
                                 <th></th>
                             </tr>
                         
                         @if(count($products)>0)
                             @foreach($products as $product)
                             <tr>
                                 <th>{{$product->id}}</th>
                                 <th>{{$product->product_name}}</th>
                                 <th>{{$product->product_code}}</th>
                                 <th>{{$product->type}}</th>
                                 <th>{{$product->created_at}}</th>
                                 <th><a href="/products/{{$product->id}}/edit" class="btn btn-primary">Edit<a></th>
                                 <th><a href="/products/{{$product->id}}" class="btn btn-primary">Delete<a></th>
                             </tr>  
                             @endforeach
                         @endif   
                         </table>               
                     </div>
                              
                     <br/>
                         
                     </div>
                     <div class="row">
                         <diV class="mr-auto">
                             <a href="/products/create" class="btn btn-default">Go to add</a>
                         </div>
                         <div class="ml-auto">
                             {{$products->links()}}
                         </diV>
                     </div>
                </div>
             </div>
        </div>
        <br>
    </div>
</div>
@endsection