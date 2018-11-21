@extends('layouts.app')

@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Complains</div>

                <div class="card-body">
                   
                     <div class="col-md-12">
                     <form method="post" action="{{ action('ProductController@store') }}"   class="form-horizontal mt-4">
                  {{csrf_field()}}
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
                        <label for="productcatname" class="col-form-lable-sm col-sm-3">Product Name</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="product_name" value="{{old('product_name')}}" placeholder="Enter Product Name" autofocus>
                        	  @if ($errors->has('product_name'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>

                   <div class="form-group row  {{ $errors->has('product_code') ? 'has-error' : '' }} ">
                        <label for="productcode" class="col-form-lable-sm col-sm-3">Product Code</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="product_code" value="{{old('product_code')}}" placeholder="Enter Product Code" autofocus>
                        	  @if ($errors->has('product_code'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('product_code') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>
                   
                   <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-6 offset-sm-3">
                        	       <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">Add</button>
                             </div>
                   </div>
             </form>
                </div>
            </div>
        </div>
        <br>
        </div>
        </div>
    </div>
</div>
@endsection