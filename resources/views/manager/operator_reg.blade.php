@extends('layouts.manager')


@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    <div class="container logform col-lg-8 mt-3 mr-3">
        <div class="card-header row">
              <h5  class="col-sm-6 offset-sm-3 mt-2" >Operator Register</h5>
       </div>
             <div  class="card-body ">
             <form method="POST" action="{{ action('OperatorRegController@store') }}"  class="form-horizontal mt-4">
                  {{csrf_field()}}
                   <div class="form-group row  {{ $errors->has('fname') ? 'has-error' : '' }} ">
                        <label for="firstname" class="col-form-lable-sm col-sm-3">First Name</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="fname" value="{{old('fname')}}" placeholder="Enter your first name" autofocus>
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
                        	<input type="text" class="form-control" name="lname" value="{{old('lname')}}" placeholder="Enter your last name"  autofocus>
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
                        	<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Enter your e-mail address" autofocus>
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
                        	<input type="text" class="form-control" id="nic" name="nic" value="{{old('nic')}}" placeholder="Enter your NIC number" autofocus >
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
                        	<input type="text" class="form-control" id="contactnumber"  name="mobile" value="{{old('mobile')}}" placeholder="Enter your Contact Number" autofocus >
                        	@if ($errors->has('mobile'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   
                   <div class="form-group  row  {{ $errors->has('address') ? 'has-error' : '' }}  ">
                        <label for="Address" class="col-form-lable-sm  col-sm-3 ">Address</label>
                        <div  class="col-sm-8" >
                        	   <input type="text" id="Address" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter address" autofocus>
                        	    @if ($errors->has('address'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>    
                   </div>
                   <div class="form-group  row  {{ $errors->has('birth') ? 'has-error' : '' }}  ">
                        <label for="Birth Day" class="col-form-lable-sm  col-sm-3 ">Birth Day</label>
                        <div  class="col-sm-8" >
                        	   <input type="date" id="Address" class="form-control" name="birth" value="{{old('birth')}}" placeholder="Enter Birth Day" autofocus>
                        	    @if ($errors->has('birth'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                @endif
                        </div>    
                   </div>

                        
                   </div>
                   <div class="form-group  row  {{ $errors->has('bank_act') ? 'has-error' : '' }}  ">
                        <label for="Birth Day" class="col-form-lable-sm  col-sm-3 ">Bank Account</label>
                        <div  class="col-sm-8" >
                        	   <input type="text" id="bank" class="form-control" name="bank_act" value="{{old('bank_act')}}" placeholder="Enter Bank Account" autofocus>
                        	    @if ($errors->has('bank_act'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('bank_act') }}</strong>
                                    </span>
                                @endif
                        </div>    
                   </div>
                  
                   <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-6 offset-sm-3">
                        	       <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">Register
                                   </button>
                             </div>
                        </div>
             </form>
             </div>
        </div>
        <br>
    
    </div>
</div>
@endsection