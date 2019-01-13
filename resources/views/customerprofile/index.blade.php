@extends('layouts.customer')
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
                         
                            
                     <div class="form-group row ">
                         <label for="First name"  class=" col-form-label text-left col-sm-3" >First name :</label>
                             <div class="col-md-8 offset-sm-1">
                                 {{$user->fname}}
                                
                              </div>
                                 
                     </div>

                      <div class="form-group row ">
                         <label for="Last name"  class=" col-form-label text-left col-sm-4" >Last name :</label>
                             <div class="col-sm-8 offset-sm-1">
                                {{$user->lname}}
                                
                              </div>
                                 
                     </div>

                     <div class="form-group row">
                         <label for="E-mail"  class=" col-form-label text-left col-sm-4" >E-mail :</label>
                             <div class="col-sm-8 offset-sm-1">
                                {{$user->email}}
                                
                              </div>
                                 
                     </div>

                      <div class="form-group row">
                         <label for="NIC"  class=" col-form-label text-left col-sm-4" >NIC :</label>
                             <div class="col-sm-8 offset-sm-1">
                                 {{$user->nic}}
                                
                              </div>
                                 
                     </div>

                     <div class="form-group row">
                         <label for="Contact Number"  class=" col-form-label text-left  col-sm-4" >Contact Number :</label>
                             <div class="col-sm-8 offset-sm-1">
                                 {{$user->mobile}}
                                
                              </div>
                                 
                     </div>

                     <div class="form-group row">
                         <label for="Work Place"  class=" col-form-label text-left col-sm-4" >Work Place :</label>
                             <div class="col-sm-8 offset-sm-1">
                                 {{$user->workplace}}
                                
                              </div>
                                 
                     </div>

                     

                     <div class="form-group row">
                         <label for="Address"  class="col-form-label text-left col-sm-4" >Address:</label>
                         <div class="col-sm-8 offset-sm-1">
                             {{$user->address}}
                            
                         </div>
                                
                     </div>

                     <div class="form-group row">
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