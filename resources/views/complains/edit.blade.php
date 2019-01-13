@extends('layouts.supervisor')

@section('content')
<div class="container-fluid col-md-8 mr-5">


<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8 ">
            
            <div class="card" >
                <div class="card-header">Complaints</div>

                <div class="card-body">
                
                     <div class="col-md-12">
                         
                                     <div class="card-header mt-1 ">
                                         <h4>{{$complain->type}}&nbsp-&nbsp{{$complain->product_name }}</h4>
                                             <diV class="container message">
                                                 Complaint Description&nbsp: {{$complain->message}}
                                             </div><br>
                                              @if($complain->image != '')
                         <div class="image mt-2 mb-1">
                             <img src="{{ asset('uploads/'.$complain->image) }}" width="300px" height="175px"  class="d-inline-block align-left">
                         </div>
                         @endif
                                            <!--  <div class="image mt-1 mb-1"> -->
                                                <!--  <img src="{{ asset('uploads/'.$complain->image) }}" width="200px" height="100px"  class="d-inline-block align-left"> -->
                                            <!--  </div> -->
                                             <div class="row mt-1">
                                                 <div class="col-sm-8 mr-auto">
                                                     <h6 class="ml-1" >Address :{{$complain->address }}</h6>
                                                     <h6 class="ml-1" >Region :{{$complain->region}}</h6>
                                                 </div>
                                                 <div class="col-sm-4 mt-1 ml-auto">
                                                     <p>{{$complain->user_email}}</p>
                                                 </div>
                                             </div>
                                             
                                     </div>
                              
                         <br/>
                         
                     </div>
                    
                </div>
            </div>
         </div>
         <br>
         <div class="col-md-4 ">
                 <!-- card -->
             @if(count ($technicians)>0)
                 @foreach ($technicians as $technician)
                 <div class="card" style="width: 20rem;">
                     <div class="card-body">
                         <!--  <img src="{{ asset('images/pro.png')}}" height="10%" width="27%" > -->
                          <b>{{$technician->fname}}  {{$technician->lname}} <br></b> 
                          <br><!--  <img src="{{ asset('images/redcross.png')}}" height="5%" width="10%" > -->
                             <form method="POST" action="{{  action('ComplainsController@update',$complain->id) }}" >
                                 {{csrf_field()}}    {{method_field('PUT')}}
                                 <input name="technician_email" type="hidden" value="{{ $technician->email }}"/>
                                 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <button type="submit" class="btn btn-primary">Assign</button>
                                 
                             </form>
    
                     </div>
                 </div>
                 @endforeach
             @endif
                 <!--  End Card -->
         </div>
        
    </div>
</div>
@endsection
