@extends('layouts.operator')
@section('content')

<div class="container">

  <br/>
  <div class="container card logform col-lg-8 mr-3 ">
    <div class="card-header row">
      <h5  class="col-sm-6 offset-sm-3 mt-2" >Sold Product Details</h5>
    </div>
    <div  class="card-body ">

      <form method="POST" action="{{ action('PurchaseProductController@store') }}"  class="form-horizontal mt-4">
      {{csrf_field()}}
      <div class="form-group row  {{ $errors->has('email') ? 'has-error' : '' }} ">
         <label for="nic" class="col-form-lable-sm col-sm-3">Customer Email</label>
          <div class="col-sm-8">
           <input type="text" class="form-control"  name="email" value="{{old('email')}}" placeholder="Enter customer's email" autofocus>
              @if ($errors->has('email'))
           <span class="help-block" >
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
      </div>
       


          <div class="form-group row  {{ $errors->has('type') ? 'has-error' : '' }} ">
            <label for="productcatname" class="col-form-lable-sm col-sm-3">Product Type</label>
              <div class="col-sm-8">
                <select id="type" class="form-control" name="type" autofocus>
                      <option value="">Choose Product Type</option>
                       @if(count($types)>0)
                       @foreach($types as $type)
                       <option value="{{$type->type_id}}" >{{$type->type}}</option>
                       @endforeach
                       @endif
                </select>
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
                <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}"  placeholder="Enter product name" autofocus>
                @if ($errors->has('product_name'))
                          <span class="help-block" >
                              <strong>{{ $errors->first('product_name') }}</strong>
                          </span>
                  @endif
              </div>
          </div>


         <div class="form-group row  {{ $errors->has('purchase_date') ? 'has-error' : '' }} ">
              <label for="purchase_date" class="col-form-lable-sm  col-sm-3 ">Purchased Date</label>
              <div  class="col-sm-8" >
                <input  type="text" class="form-control" name="purchase_date" placeholder="Enter purchased date" autofocus>
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
@endsection


  
             
                                 