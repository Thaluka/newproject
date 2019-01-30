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
                             
                             
                        
                         </table>
                         <div class="row">
                               <div class="mr-auto">
                               <form method="POST" action="{{ action('customerestimationview@update',$complain->id) }}" >
                                         {{csrf_field()}}    {{method_field('PUT')}}
                                         <button type="submit" class="btn-md bg-primary">Accept</button>
                               </form>
                               <form method="POST" action="{{ action('rejectestimation@update',$complain->id) }}" >
                                         {{csrf_field()}}    {{method_field('PUT')}}
                                         <button type="submit" class="btn-md bg-primary">Reject</button>
                               </form>
                               </div>
                               <div class="mr-auto">
                               </div>
                         </div>
                        
                                       
                                              
                       

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
</body>

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
 integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
 crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
 integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
 crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
 integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
 crossorigin="anonymous"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

 
</html>


@endsection
