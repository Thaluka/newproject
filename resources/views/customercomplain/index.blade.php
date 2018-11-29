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
    
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Complains</div>

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
                                 @if ($complain->status=='Pending')
                                     <div class="card-body complainview  mt-1 mt-2 bg-danger">
                                         <a href="/customercomplain/{{$complain->id}}/" class="text-white" ><h3>{{$complain->type}}-{{$complain->product_name }}</h3></a>
                                            
                                         <h6 class="ml-1" >{{$complain->address }}</h6>
                                         <h6 class="ml-1" >{{$complain->region}}</h6>
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2"><a href="/customercomplain/{{$complain->id}}" class="text-white">view</a></div>
                                             <div class="col-sm-3 offset-sm-3">Status:{{$complain->status}}</div>
                                         </div>
                                             
                                     </div>
                                 @elseif ($complain->status=='Assign')
                                     <div class="card-body complainview  mt-1 mt-2 bg-warning">
                                         <a href="/customercomplain/{{$complain->id}}" class="text-white" ><h3>{{$complain->type}}-{{$complain->product_name }}</h3></a>
                                             
                                         <h6 class="ml-1" >{{$complain->address }}</h6>
                                         <h6 class="ml-1" >{{$complain->region}}</h6>
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2"><a href="/customercomplain/{{$complain->id}}" class="text-white">view</a></div>
                                             <div class="col-sm-3 offset-sm-3">{{$complain->status}}</div>
                                         </div>
                                             
                                     </div>
                                 @elseif ($complain->status=='Complete')
                                     <div class="card-body complainview  mt-1 mt-2 bg-success">
                                         <a href="/customercomplain/{{$complain->id}}" class="text-white" ><h3>{{$complain->type}}-{{$complain->product_name }}</h3></a>
                                            
                                         <h6 class="ml-1" >{{$complain->address }}</h6>
                                         <h6 class="ml-1" >{{$complain->region}}</h6>
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2"><a href="/customercomplain/{{$complain->id}}" class="text-white">view</a></div>
                                             <div class="col-sm-3 offset-sm-3">{{$complain->status}}</div>
                                         </div>
                                             
                                     </div>
                                 @elseif ($complain->status=='Waiting')
                                     <div class="card-body complainview  mt-1 mt-2 bg-info">
                                         <a href="/customercomplain/{{$complain->id}}" class="text-white"><h3>{{$complain->type}}-{{$complain->product_name }}</h3></a>
                                             
                                         <h6 class="ml-1" >{{$complain->address }}</h6>
                                         <h6 class="ml-1" >{{$complain->region}}</h6>
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2"><a href="/customercomplain/{{$complain->id}}" class="text-white">view</a></div>
                                             <div class="col-sm-3 offset-sm-3">{{$complain->status}}</div>
                                         </div>
                                             
                                     </div>
                                 @else
                                 <div class="card-body complainview  mt-1 mt-2 bg-secondary">
                                         <a href="/customercomplain/{{$complain->id}}" class="text-white"><h3>{{$complain->type}}-{{$complain->product_name }}</h3></a>
                                             
                                         <h6 class="ml-1" >{{$complain->address }}</h6>
                                         <h6 class="ml-1" >{{$complain->region}}</h6>
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2"><a href="/customercomplain/{{$complain->id}}" class="text-white">view</a></div>
                                             <div class="col-sm-3 offset-sm-3">{{$complain->status}}</div>
                                         </div>
                                        
                                 </div>
                                    
                                     @endif
                              @endforeach

                               @else 
                                     <div class="card-body complainview  mt-1 mt-2 bg-white ">
                                         
                                             <diV class="container message">
                                                 <p class="text-bold text-danger"> You haven't submit any complain requests yet</p>
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
