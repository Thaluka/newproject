@extends('layouts.customer')
@section('link')
<link href="{{ asset('css/stylecustomerindex.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('title')
View Request
@endsection
@section('content')


<div class="container-fluid col-md-8 mr-3">
    <br>
    <div class="row text-center">
    <!-- <div class="row justify-content-center"> -->
    
       <!--  <div class="col-md-8"> -->
            <div class="card col-md-12">
                <div class="card-header mt-1 mt-2">Product Parts</div>
            

                <div class="card-body">
                 @if(Session::has('flash_message_success'))

                 <div class="col-sm-12 alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"></button>
                                  <strong>{!! session('flash_message_success') !!}</strong>
                <!--  </div> -->
                 @endif
                     
                         <!-- <div class="card-header mt-1 mt-2"> -->
                         
                           
                         <table class="table table-striped">
                             <tr>
                                 <th>Part name</th>
                                 <th>Price</th>
                                 <th>Quantity</th>
                                 <th>Total price</th>
                              
                             </tr>
                             
                         @if(count($estimations)>0)
                            
                         
                             
                             @foreach($estimations as $estimation)
                  
                             <tr>
                                
                                 <input type="hidden" value="{{$estimation->id}}" name="partcode[]" />
                                 <th>
                                     {{$estimation->part_name}}
                                 </th>
                                 <th>
                                     {{$estimation->part_price}}
                                 </th>
                                 <th>
                                     {{$estimation->quantity}}
                                 </th>
                                 <th>
                                     {{$estimation->part_price * $estimation->quantity}}
                                     <input type="hidden" value="{{ $estimation->quantity}}" name="quantity[]" />
                                     <input type="hidden" value="{{ $estimation->part_id}}" name="partid[]" />
                                 </th>
                                 
                             </tr>
                                
                             @endforeach
                             <tr>
                                 <th></th>
                                 <th></th>
                                 <th>Total</th>
                                 <th>{{$total}}</th>
                              
                             </tr>
							
                            
                         @endif 
                         @if($complain->status=='Sending')
                             <tr class="bg-white">
                                 <th></th>
                                 <th>
                                     <form method="POST" action="{{ action('CustomerestimationController@update',$complain->id) }}" >
                                         {{csrf_field()}}    {{method_field('PUT')}}
                                         <button type="submit" class="btn-md bg-primary">Accept</button>
                                     </form>
                                 </th>
                                 <th></th>
                                 <th>
                                     <form method="POST" action="{{ action('RejectestimationController@update',$complain->id) }}" >
                                         {{csrf_field()}}    {{method_field('PUT')}}
                                         <button type="submit" class="btn-md bg-primary">Reject</button>
                                     </form>

                                 </th>
                                
                              
                             </tr>
                         @endif
                             
                             
                        
                         </table>
                        
                        
                                       
                                              
                       

                         <br><br/>
                         </form>
                         
                              
                     <br/>
                     <br>
                         
                 
               
            </div>
        </div>
        <br>
        </div>
        </div>
    </div>
</div>



@endsection
