<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/stylelogin.css')}}" />
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
       
        <div class="container logform col-lg-4 mt-3">
        <div class="card-header row">
              <h5  class="col-sm-6 offset-sm-3 mt-2" >Sign in to ASPARAI</h5>
       </div>
             <!--<div class="card-header row">
	              <p  class="col-sm-4 offset-sm-4" >Sign in to ASPARAI</p>
	        </div>-->
             
             <div  class="card-body ">
            
             <form  method="POST" action="{{ route('login') }}" class="form-horizontal mt-4">
                {{csrf_field()}}
                   <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }} ">
                        <label for="email" class="col-form-lable-sm col-sm-3 " >E-mail</label>
                        <div class="col-sm-8">
                        	
                        	<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your e-mail address" autofocus>
                        	    @if ($errors->has('email'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                         
                   </div>
                   <div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password" class="col-form-lable-sm  col-sm-3 ">Password</label>
                        <div  class="col-sm-8">
            
                        	<input id="password" type="password" class="form-control" name="password" placeholder="Enter your password"  autofocus >
                        	
                            	@if ($errors->has('password'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        
                   </div>
                   
                        <div class="form-group row mb-0">
                            <div class="col-sm-6 offset-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group row mb-0 mt-0">
                            <div class="col-sm-6 offset-sm-3">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                   Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        
                         <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-6 offset-sm-3">
                        	       <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">Sign in</button>
                             </div>
                        </div>
             </form>
             </div>
        </div>
        <br>
        <div class="container col-lg-4 tag_haed mb-1 mt-2">
             <div class=" row mt-1 ">
                  <p  class="row col-lg-10 offset-lg-2"> New to ASPARAI?  &nbsp;  <a href="{{ route('register') }}">Create an account</a></p>
             </div>
        </div>
        
  </body>
</html>
