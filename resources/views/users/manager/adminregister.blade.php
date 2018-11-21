<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/styledashboard.css')}}"/>
    <title>Login Page</title>
   
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
    <div class="container col-lg-12 row">
         
         	 <div class="col-lg-3 mt-2 ml-1 slider mb-1">
         	       <div class="card-header row">
         	      	   <h5>Dashboard</h5>
         	       </div>
         	      
         	       <div class="card-body ">
         
         	      	    <div  class="col-sm-12 row mt-1 mb-2">
                        	       <button type="submit" class="col-sm-12  btn-primary btn-md btn-block ">Registation</button>
                        </div>
                       
                        <div  class="col-sm-12 row mt-1 mb-2">
                        	       <button type="submit" class="col-sm-12  btn-primary btn-md btn-block ">Add product</button>
                        </div>
                      
                       <div  class="col-sm-12 row mt-1 mb-2">
                        	       <button type="submit" class="col-sm-12  btn-primary btn-md btn-block ">View request</button>
                       </div>
                      
                       <div  class="col-sm-12 link  row mt-1 mb-2">
                        	       <button type="submit" class="col-sm-12  btn-primary btn-md btn-block ">Service</button>
                       </div>
                      
                      <div  class="col-sm-12 link  row mt-1 mb-2">
                        	       <button type="submit" class="col-sm-12  btn-primary btn-md btn-block ">Reports</button>
                      </div>
         	          <hr />
         	          <div  class="col-sm-12 link  row mt-1 mb-1">
                        	      <a type="submit" class="col-sm-12 btn-primary btn-md btn-block " href="{{route('logout')}}">Logout</a>
                      </div>
                      <div  class="col-sm-12 link   row mt-1 mb-1">
                        	      <button type="submit" class="col-sm-12  btn-primary btn-md btn-block ">Profile</button>
                      </div>
                      <hr />
         	  </div>
        </div>
        <div class="col-lg-7  ml-1  regform mt-2 mb-1">
         	         <div class="card-header row">
              <h5  class="col-sm-6 offset-sm-3 mt-2" >Register with us</h5>
       </div>
             <div  class="card-body ">
             <form  method="POST" action="{{ route('usersave') }}" class="form-horizontal mt-4">
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
                   <div class="form-group  row  {{ $errors->has('bday') ? 'has-error' : '' }}  ">
                        <label for="workplace" class="col-form-lable-sm  col-sm-3 ">Birthday</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" id="workplace"  name="bday" value="" placeholder="Birth day" autofocus >
                        	 @if ($errors->has('bday'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('bday') }}</strong>
                                    </span>
                             @endif
                        	
                        </div>
                          
                   </div>
                   <div class="form-group  row  {{ $errors->has('uaddress') ? 'has-error' : '' }}  ">
                        <label for="Address" class="col-form-lable-sm  col-sm-3 ">Address</label>
                        <div  class="col-sm-8" >
                        	   <input type="text" id="Address" class="form-control" name="uaddress" value="" placeholder="Address" autofocus>
                        	    @if ($errors->has('uaddress'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('uaddress') }}</strong>
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
         	  	
        </div>
         
    	
    </div>
        
 </body>
</html>