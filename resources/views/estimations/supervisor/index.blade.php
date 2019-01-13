@extends('layouts.supervisor')

@section('content')
<div class="container-fluid col-md-10 mr-2 mt-0">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Estimations</b></div>

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
                     <div class="col-md-12">
                        @if(count($estimations)>0)
                         @foreach( $estimations as $estimation)
                                     <div class="card-header mt-1 mt-2" style="background-color:#d2def2">
                                          <div class="container message">
                                         <a href="/estimationapprove/{{$estimation->complain_id}}/edit" class="text-dark"><h6>{{$estimation->product_name }}</h6></a>
                                           
                                                
                                     </div>
                                          
                                         <div class="row mb-0 ">
                                             <div class="col-sm-3 offset-sm-2"><a href="/estimationapprove/{{$estimation->complain_id}}/edit" class="text-black">view</a></div>
                                             <div class="col-sm-3 offset-sm-3 text-dark" >{{$estimation->fname}} - {{$estimation->lname}}</div>
                                         </div>
                                             
                                     </div>
                              @endforeach
                         @endif
                         <br/>

                         
                         
                     </div>
					 <div class="row">
                         <div class="ml-auto">
                             {{$estimations->links()}}
                         </diV>
                     </div>
                     
                </div>
            </div>
        </div>
        <br>
        
    </div>
</div>
@endsection
