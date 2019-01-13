@extends('layouts.supervisor')
@section('content')
 <div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-9 ml-5">
             <div class="card mt-1">
                <div class="card-header text-center"><h1>Estimations<h1></div>

                <div class="card-body">
                
                     <div class="col-md-12">
                         <div class="card-header mt-1 mt-2">
                         <table class="table table-striped">
                             <tr>
                                 
                                 <th>Part name</th>
                                 <th>Quantity</th>
                                 <th >Available Quantity</th>
                                
                                 
                             </tr>

                        
                         
                         @if(count($estimations)>0)
                         @foreach($estimations as $estimation )
                         
                        
                         
                             <tr>
                                 <th>{{$estimation->part_name}}</th>
                                 
                                 @if($estimation->quantity >= $estimation->product_quantity)
                                 <th class="bg-danger">{{$estimation->quantity}}</th>
                                 @else
                                 <th class="bg-success">{{$estimation->quantity}}</th>
                                 @endif

                                 <th class="bg-primary">{{$estimation->product_quantity}}</th>
                                 
                             </tr>  
                         @endforeach
                         @endif
                             
                         </table>   
                         @if($complain->satus='Assigned')
                                  <div class="row col-sm-12">
                                    <diV class="col-sm-5"></diV>

                                      <div class="mr-5">
    
                                         
                                         <form method="POST" action="{{  action('SatusholdingController@update',$complain->id) }}" >
                                         {{csrf_field()}}    {{method_field('PUT')}}
                                              <button class="btn-primary" type="submit">Hold</button>
                                         </form>
                                      </div>
                                 <div class="mr-auto">
                                         
                                     <a href="/estimationapprove/{{$complain->id}}"><button class="btn-primary" type="submit">Create report</button></a>
                                        
                                     </div>
                                 </diV>  
                                @endif   
                              
                     </div>
                              
                     <br/>
                         
                     </div>
                     
                </div>
             </div>
        </div>
        <br>
    </div>
</div>
@endsection