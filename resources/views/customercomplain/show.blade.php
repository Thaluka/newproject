@extends('layouts.customer')
@section('link')
<link href="{{ asset('css/stylecustomerindex.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('title')
Send Request
@endsection
@section('content')
 <div class="container">

 <br/>
     <div class="row justify-content-center">
    
         <div class="col-md-10">
             <div class="card">
                 <div class="card-header"><h6>{{$complain->type}}-{{$complain->product_name }}</h6></div>

                 <div class="card-body">
                
                     <div class="col-md-12">
                         <diV class="container message mb-2">
                           <h6>Complaint Description&nbsp :  {{$complain->message}}</h6>
                         </div><br>
                         @if($complain->image != '')
                         <div class="image mt-2 mb-1">
                             <img src="{{ asset('uploads/'.$complain->image) }}" width="300px" height="175px"  class="d-inline-block align-left">
                         </div>
                         @endif
                         <br>
                         <!-- <h6 class="ml-1" >{{$complain->address }}</h6>
                         <h6 class="ml-1" >{{$complain->region}}</h6> -->
                         <h6 class="ml-1" >Status : {{$complain->status}}</h6>
                         <div class="col-sm-12 row">
                         @if ($complain->status=='Pending')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                         @elseif ($complain->status=='Assigned')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assigned</h6>
                             </div>
                         @elseif ($complain->status=='Hold')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assigned</h6>
                             </div>
                             <div class="col-sm-3 bg-info text-white scheme">
                                   <h6>Hold</h6>
                             </div>
                         @elseif ($complain->status=='Completed')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assigned</h6>
                             </div>
                             <div class="col-sm-3 bg-success text-white scheme">
                                   <h6>Completed</h6>
                             </div>
                         @elseif ($complain->status=='Processing')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assigned</h6>
                             </div>
                            <div class="col-sm-3 bg-primary text-white scheme">
                                   <h6>Processing</h6>
                             </div>
                         @else
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assigned</h6>
                             </div>
                             <div class="col-sm-3 bg-secondary text-white scheme">
                                  <h6>Rejected</h6>
                             </div>
                         @endif
                         </div>


                        <!--  <div class="row mt-2 ">
                            
                            <form method="post" action="{{ action('CustomercomplainController@destroy',$complain->id) }}">
                                {{csrf_field()}} 
                                <button type="submit" class="col-sm-3  btn-primary btn-sm btn-block ">Delete</button>
                            </form>

                            
                                 <a><button type="submit" class="col-sm-3 offset-sm-1  btn-primary btn-sm btn-block ">update</button></a>
                            
                            
                            <br>
                           
                         </div>
 -->

                     </div>
                 </div>
             </div>

             <br>
             
             @if ($complain->status=='Completed')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Technician :&nbsp{{ $user->fname}}</h5>
                    <a href="/rate/{{$user->id}}" class="btn btn-primary">Rate Technician</a>

                  
                </div>
            </div>
            @endif



         </div>
     </div>
 </div>
@endsection