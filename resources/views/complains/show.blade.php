@extends('layouts.supervisor')

@section('content')
<div class="container-fluid col-md-8 mr-5">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Complaints</div>

                <div class="card-body">
                
                     <div class="col-md-12">
                         
                                     <div class="card-header mt-1 mt-2">
                                       
                                             <diV class="container message">
                                                Complaint Description&nbsp: {{$complain->message}}
                                             </div><br>
                                              @if($complain->image != '')
                                             <div class="image mt-1 mb-1">
                                                 <img src="{{ asset('uploads/'.$complain->image) }}" width="200px" height="100px"  class="d-inline-block align-left">
                                             </div>
                                             @endif
                                             <div class="row mt-1">
                                                 <div class="col-sm-8 mr-auto">
                                                     <h6 class="ml-1" >Address: {{$complain->address }}</h6>
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
         <div class="col-md-4 container ">
                 <!-- card -->
            
                 <div class="card" style="width: 20rem;">
                     <div class="card-body">
                        <!--   <img src="{{ asset('images/pro.png')}}" height="10%" width="27%" > -->
                          <b>{{ $user->fname }}&nbsp{{ $user->lname }}<br></b> &nbsp&nbsp 
                          </pre>
    
                     </div>
                 </div>
                
                 <!--  End Card -->
         </div>
        
    </div>
</div>
@endsection
