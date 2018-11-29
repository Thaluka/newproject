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
              <h5  class="col-sm-6 offset-sm-3 mt-2" >Purchase product details</h5>
       </div>
             <div  class="card-body ">
               <form method="POST" action="{{ route('register') }}"  class="form-horizontal mt-4">
                  {{csrf_field()}}
                   <div class="form-group row  {{ $errors->has('nic') ? 'has-error' : '' }} ">
                        <label for="nic" class="col-form-lable-sm col-sm-3">Customer NIC</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"  name="nic" value="{{old('nic')}}" placeholder="Enter customer NIC" autofocus>
                            @if ($errors->has('nic'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('nic') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('type') ? 'has-error' : '' }} ">
                        <label for="type" class="col-form-lable-sm col-sm-3">Product Type</label>
                        
                        <div  class="col-sm-8" >
                          <input type="text" class="form-control" name="type" value="{{old('type')}}" placeholder="Enter Product type"  autofocus>
                          @if ($errors->has('type'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('product_name') ? 'has-error' : '' }} ">
                        <label for="product_name" class="col-form-lable-sm  col-sm-3 " >Product Name</label>
                        <div  class="col-sm-8" >
                          <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}"  placeholder="Enter Product name" autofocus>
                          @if ($errors->has('product_name'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('purchase_date') ? 'has-error' : '' }} ">
                        <label for="purchase_date" class="col-form-lable-sm  col-sm-3 ">Purchase Date</label>
                        <div  class="col-sm-8" >
                          <input  type="text" class="form-control" name="purchase_date" placeholder="Enter purchase date" autofocus>
                          @if ($errors->has('purchase_date'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('purchase_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('price') ? 'has-error' : '' }} ">
                        <label for="price" class="col-form-lable-sm  col-sm-3 ">Price</label>
                        <div  class="col-sm-8" >
                          <input type="text" class="form-control"  name="price" value="{{old('price')}}" placeholder="Enter product price" autofocus >
                          @if ($errors->has('price'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>
                   
                  
                   <div class="form-group row  {{ $errors->has('warranty') ? 'has-error' : '' }} ">
                        <label for="warranty" class="col-form-lable-sm  col-sm-3 ">Warranty period</label>
                        <div  class="col-sm-8" >
                          <input type="text" class="form-control"  name="warranty" value="{{old('warranty')}}" placeholder="Enter expiration date of warranty" autofocus >
                          @if ($errors->has('warranty'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('warranty') }}</strong>
                                    </span>
                            @endif
                        </div>  
                   </div>
                   
                   
                   <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-6 offset-sm-3">
                                 <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">ADD</button>
                             </div>
                        </div>
             </form>
             </div>
        </div>
        <br>
        
  </body>
</html>

            
                       
                     