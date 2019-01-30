@extends('layouts.operator')
@section('content')
<div class="container">

<br/>
        
         <div class="container card logform col-lg-8 mr-3">

        
        <div class="card-header row ">


              <h5  class="col-sm-6 offset-sm-3 " >Customer Registration</h5>
       </div>
             <div  class="card-body ">
             <form method="post" action="{{ action('CustRegOperatorController@store') }}"  class="form-horizontal mt-4">
                  {{csrf_field()}}
                   <div class="form-group row  {{ $errors->has('fname') ? 'has-error' : '' }} ">
                        <label for="firstname" class="col-form-lable-sm col-sm-3">First Name</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="fname" value="{{old('fname')}}" placeholder="Enter Customer's first name" autofocus>
                        	  @if ($errors->has('fname'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('lname') ? 'has-error' : '' }} ">
                        <label for="lastname" class="col-form-lable-sm col-sm-3">Last Name</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Enter Customer's last name"  autofocus>
                        	@if ($errors->has('lname'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('email') ? 'has-error' : '' }} ">
                        <label for="email" class="col-form-lable-sm  col-sm-3 " >E-mail</label>
                        <div  class="col-sm-8" >
                        	<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Enter Customer's e-mail address" autofocus>
                        	@if ($errors->has('email'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                  
                   <div class="form-group row  {{ $errors->has('nic') ? 'has-error' : '' }} ">
                        <label for="nic" class="col-form-lable-sm  col-sm-3 ">NIC</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" id="nic" name="nic" value="{{old('nic')}}" placeholder="Enter Customer's NIC number" autofocus >
                        	@if ($errors->has('nic'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('nic') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   <div class="form-group  row  {{ $errors->has('mobile') ? 'has-error' : '' }} ">
                        <label for="contactnumber" class="col-form-lable-sm  col-sm-3 ">Contact Number</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" id="contactnumber"  name="mobile" value="{{old('mobile')}}" placeholder="Enter Customer's Contact Number" autofocus >
                        	@if ($errors->has('mobile'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   <div class="form-group  row  {{ $errors->has('company') ? 'has-error' : '' }}  ">
                        <label for="workplace" class="col-form-lable-sm  col-sm-3 ">Work Place</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" id="workplace"  name="company" value="{{old('company')}}" placeholder="Enter Customer's Work place" autofocus >
                        	 @if ($errors->has('company'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                             @endif
                        	
                        </div>
                        
                        
                   </div>
                   <div class="form-group  row  {{ $errors->has('address') ? 'has-error' : '' }}  ">
                        <label for="Address" class="col-form-lable-sm  col-sm-3 ">Address</label>
                        <div  class="col-sm-8" >
                        	   <input type="text" id="Address" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter Customer's work place address" autofocus>
                        	    @if ($errors->has('address'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        	
                        </div>
                        
                        
                   </div>
                   <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-6 offset-sm-3">
                        	       <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">Register</button>
                             </div>
                        </div>
             </form>
             </div>
        </div>
        <br>
        <!-- <div class="container col-lg-4 tag_haed mb-1 mt-1">
             <div class=" row mt-0 ">
                  <p  class="row col-lg-10 offset-lg-2"> Already have an account?  &nbsp;  <a href="{{ route('login') }}">Sign in</a></p>
             </div>
        </div>
        -->

@endsection
 