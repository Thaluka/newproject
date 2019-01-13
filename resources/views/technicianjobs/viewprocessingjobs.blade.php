@extends('layouts.technician')



@section('content')

<div class="container-fluid col-md-10 mr-2 mt-0">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card  ">
                <div class="card-header"><b>Processing Job</b></div>

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                 </div>
                 @endif
                     <div class="col-md-12 "  >

                      @if(count($complain)>0)


                                     <div class="card-header mt-1 mt-2" style="background-color:#d2def2">
                                        <div class="container message " >
                                         <h4>{{$complain->type}}&nbsp-&nbsp{{$complain->product_name }}</h4>
                                            <!--  <div class="container message "> -->
                                                <!--  <h5>Problem&nbsp: {{$complain->message}}</h5> -->
                                            <!--  </div> -->
                                             <br>
                                            <h6 class="ml-1" >Address&nbsp:&nbsp{{$complain->address }}</h6>
                                            <h6 class="ml-1" >City&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp{{$complain->region}}</h6>
                                         </div>
                                             
                                     </div>
                              
                        
                         <br/>
                         
                     </div>
                     <div class="ml-auto">
                     <form method="POST" action="{{  action('ViewjobsController@update',$complain->id) }}" >
                                         {{csrf_field()}}    {{method_field('PUT')}}

                       <button type="submit" class="btn-success btn-md">Completed</button>
                     </form>
                      @else
                   <h4>You Have No jobs</h4>
                   @endif
                   </div>
                   <br>
                   <br>
                   <br>
                  
                     
                </div>
            </div>
        </div>
        <br>
        
    </div>
</div>
      
       
@endsection
