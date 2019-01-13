@extends('layouts.supervisor')

@section('content')
<div class="container-fluid col-md-10 mr-2 mt-0">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Hold Complaints</b></div>

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
                                     <div class="card-header mt-1 mt-2" style="background-color:#d2def2">
                                          <div class="container message">
                                         <a href="/viewhold/{{$complain->id}}/edit" ><h4>{{$complain->type}}&nbsp-&nbsp{{$complain->product_name }}</h4></a>
                                           
                                                 <!--  <h5> Problem&nbsp:   {{$complain->message}}</h5> -->
                                            
                                          <h6 class="ml-1" >Address&nbsp:&nbsp{{$complain->address }}</h6>
                                         <h6 class="ml-1" >City&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp{{$complain->region}}</h6>
                                     </div>
                                             
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
