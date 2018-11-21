<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylelogin.css')}}" />
    <title>Registation Page</title>
   
    
  </head>
  <body>
       <nav class="navbar navbar-expand-lg navbar-light fixd-top ">
            <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
                 <img src="images/logo.png" width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
            </div>
            <ul class="navbar-nav mr-auto mt-0 mt-lg-1">
                <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
            </ul>
        </nav>
        
        
         <div class="container logform col-lg-6 mt-3">
        <div class="card-header row">
              <h5  class="col-sm-6 offset-sm-3 mt-2" >Register with us</h5>
       </div>
             <div  class="card-body ">
             <form method="POST" action="{{ route('register') }}"  class="form-horizontal mt-4">
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
                   <div class="form-group row  {{ $errors->has('password') ? 'has-error' : '' }} ">
                        <label for="password" class="col-form-lable-sm  col-sm-3 ">Password</label>
                        <div  class="col-sm-8" >
                        	<input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" autofocus>
                        	@if ($errors->has('password'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   <div class="form-group  row  {{ $errors->has('password_confirmation') ? 'has-error' : '' }} ">
                        <label for="password-confirm" class="col-form-lable-sm  col-sm-3 ">Confirm Password</label>
                        <div  class="col-sm-8" >
                        	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" autofocus >
                        	@if ($errors->has('password_confirmation'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('nid') ? 'has-error' : '' }} ">
                        <label for="nic" class="col-form-lable-sm  col-sm-3 ">NIC</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" id="nic" name="nid" value="{{old('nid')}}" placeholder="Enter your NIC number" autofocus >
                        	@if ($errors->has('nid'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('nid') }}</strong>
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
                   <div class="form-group  row  {{ $errors->has('company') ? 'has-error' : '' }}  ">
                        <label for="workplace" class="col-form-lable-sm  col-sm-3 ">Work Place</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" id="workplace"  name="company" value="{{old('company')}}" placeholder="Enter your Work place" autofocus >
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
                        	   <input type="text" id="Address" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter your work place address" autofocus>
                        	    @if ($errors->has('address'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        	
                        </div>
                        
                        
                   </div>
                   <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-6 offset-sm-3">
                        	       <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">Sign up</button>
                             </div>
                        </div>
             </form>
             </div>
        </div>
        <br>
        <div class="container col-lg-4 tag_haed mb-1 mt-1">
             <div class=" row mt-0 ">
                  <p  class="row col-lg-10 offset-lg-2"> Already have an account?  &nbsp;  <a href="{{ route('login') }}">Sign in</a></p>
             </div>
        </div>
       
        
  </body>
</html>
