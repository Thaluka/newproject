@extends('layouts.customer')
@section('link')
<link href="{{ asset('css/stylecustomerindex.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('title')
View Request
@endsection
@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h5>Estimation</h5></div>

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
                                 
                                 <div class="card-body complainview  mt-1 mt-2 bg-secondary">
                                         <a href="/customerestimationview/{{$complain->id}}/edit" class="text-white"><h5>{{$complain->type}}-{{$complain->product_name }}</h5></a>
                                             
                                        <!--  <h6 class="ml-1" >{{$complain->address }}</h6>
                                         <h6 class="ml-1" >{{$complain->region}}</h6> -->
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2">Date&nbsp:&nbsp{{$complain->created_at}}</div>
                                             <div class="col-sm-3 offset-sm-3">Status&nbsp:&nbsp{{$complain->status}}</div>
                                         </div>
                                        
                                 </div>
                                    
                                     
                              @endforeach

                               @else 
                                     <div class="card-body complainview  mt-1 mt-2 bg-white ">
                                         
                                             <diV class="container message">
                                                 <p class="text-bold text-danger"> You haven't submit any estimations yet</p>
                                             </div>
                                             <div class="row mb-0 ">
                                                   <div class="col-sm-7"></div>
                                                   <div class="col-sm-5">
                                                       <a href="customercomplain/create" class="btn btn-primary">Create request</a>
                                                   </div>
                                             </div>
                                            
                                     </div>
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
