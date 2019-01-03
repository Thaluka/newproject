@extends('layouts.supervisor')

@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Completed Complaints</div>

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
                     <div class="col-md-12">
                         @if(count($complains)>0)
                             @foreach($complains as $complain)
                                     <div class="card-header mt-1 mt-2">
                                         <a href="/complains/{{$complain->id}}/" ><h1>{{$complain->type}}-{{$complain->product_name }}</h1></a>
                                             <diV class="container message">
                                                  <h6> Problem:   {{$complain->message}}</h6>
                                             </div>
                                         <h6 class="ml-1" >Address:{{$complain->address }}</h6>
                                         <h6 class="ml-1" >Region: {{$complain->region}}</h6>
                                             
                                     </div>
                              @endforeach
                         @endif
                         <br/>
                         
                     </div>
                     <div class="row">
                         <div class="ml-auto">
                             {{$complains->links()}}
                         </diV>
                     </div>
                </div>
            </div>
        </div>
        <br>
        
    </div>
</div>
@endsection
