@extends('layouts.technician')

@section('content')

hello

<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Complaints</div>

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
                     <div class="col-md-12">
                        
                                     <div class="card-header mt-1 mt-2">
                                         <a href="/complains/{{$complain->id}}/edit" ><h1>{{$complain->type}}-{{$complain->product_name }}</h1></a>
                                             <diV class="container message">
                                                 {{$complain->message}}
                                             </div>
                                         <h6 class="ml-1" >Address:{{$complain->address }}</h6>
                                         <h6 class="ml-1" >Region: {{$complain->region}}</h6>
                                             
                                     </div>
                             
                         <br/>
                         
                     </div>
                     <div class="row">
                         <div class="ml-auto">
<!--                              {{$complains->links()}}
 -->                         </diV>
                     </div>
                </div>
            </div>
        </div>
        <br>
        
    </div>
</div>




@endsection
