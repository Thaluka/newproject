@extends('layouts.operator')

@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8 ml-5 mt-4">
            <div class="card">
                <div class="card-header">Product Parts</div>

                <div class="card-body">
                   
                     <div class="col-md-12">
                     <form method="post" action="{{ action('ProductPartsController@store') }}"   class="form-horizontal mt-4">
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

                   <div class="form-group row  {{ $errors->has('part_name') ? 'has-error' : '' }} ">
                        <label for="productcatname" class="col-form-lable-sm col-sm-3">Product Part Name</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="part_name" value="{{old('part_name')}}" placeholder="" autofocus>
                        	  @if ($errors->has('product_name'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('product_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>

                   <div class="form-group row  {{ $errors->has('part_code') ? 'has-error' : '' }} ">
                        <label for="productcode" class="col-form-lable-sm col-sm-3">Part Code</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="part_code" value="{{old('part_code')}}" placeholder="" autofocus>
                        	  @if ($errors->has('product_code'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('product_code') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>

                    <div class="form-group row  {{ $errors->has('part_price') ? 'has-error' : '' }} ">
                        <label for="productcode" class="col-form-lable-sm col-sm-3">Price</label>
                        <div class="col-sm-8">
                              <input type="text" class="form-control"  name="product_price" value="{{old('part_price')}}" placeholder="" autofocus>
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