@extends('layouts.manager')
@section('link')
<link href="{{ asset('css/styleform.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('title')
Profile
@endsection
@section('content')

    <div class="container-fluid col-md-8">
         <div class="card mt-2 mb-1 justify-content-center ">
             <div class="card-header"><h5> My Profile <h5></div>

                 <div class="card-body justify-content-center">
                   
                     <div class="col-md-12 justify-content-center">
                         <form method="post" action="{{ action('CustomerprofileController@store') }}"   class="form-horizontal mt-4" enctype="multipart/form-data">
                         {{csrf_field()}} <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            
                     <div class="form-group mt-0  ">
                         <label for="First name"  class=" col-form-label text-left" >First name</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="fname" value="{{$user->fname}}" autofocus>
                                
                              </div>
                                 
                     </div>

                      <div class="form-group mt-0  ">
                         <label for="Last name"  class=" col-form-label text-left" >Last name</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="lname" value="{{$user->lname}}" id="Last name" autofocus>
                                
                              </div>
                                 
                     </div>

                     <div class="form-group mt-0  ">
                         <label for="E-mail"  class=" col-form-label text-left" >E-mail</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="email" class="form-control" name="email" value="{{$user->email}}" id="E-mail" autofocus>
                                
                              </div>
                                 
                     </div>

                      <div class="form-group mt-0  ">
                         <label for="NIC"  class=" col-form-label text-left" >NIC</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="nid" value="{{$user->nic}}" id="NIC" autofocus>
                                
                              </div>
                                 
                     </div>

                     <div class="form-group mt-0  ">
                         <label for="Contact Number"  class=" col-form-label text-left" >Contact Number</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="nid" value="{{$user->mobile}}" id="mobile" autofocus>
                                
                              </div>
                                 
                     </div>

                     <div class="form-group mt-0  ">
                         <label for="Work Place"  class=" col-form-label text-left" >Work Place</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="company" value="{{$user->workplace}}" id="company" autofocus>
                                
                              </div>
                                 
                     </div>

                     

                     <div class="form-group ">
                         <label for="Address"  class="col-form-label text-left" >Address</label>
                         <div class="col-sm-8 offset-sm-1">
                             <input type="text" class="form-control" name="address" value="{{$user->address}}" id="address" autofocus>
                            
                         </div>
                                
                     </div>

                     <div class="form-group ">
                   
                    
                   
                     <div class="col-sm-4 offset-sm-5 mr-1 ">
                         <button type="submit" class="btn btn-primary col-10" > Submit </button>
                    </div>
                   
                    </div>
                    </form>
                 </div>
             </div>
         </div>
         </div>
         <br>     
   
@endsection