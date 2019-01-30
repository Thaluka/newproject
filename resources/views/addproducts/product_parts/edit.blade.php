@extends('layouts.operator')

@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8 ml-5 mt-4">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                   
                     <div class="col-md-12">
                     <form method="post" action="{{ action('ProductPartsController@update',$part->id) }}"   class="form-horizontal mt-4">
                  {{csrf_field()}}   {{method_field('PUT')}}
                   <div class="form-group row  {{ $errors->has('type') ? 'has-error' : '' }} ">
                        <label for="productcatname" class="col-form-lable-sm col-sm-3">Product Type</label>
                        <div class="col-sm-8">
                        <select id="type" class="form-control" name="type" autofocus>
                                     <option value="{{$part->type_id}}">{{$part->type}}</option>
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
                        <label for="productcatname" class="col-form-lable-sm col-sm-3">Part Name </label>
                        <div class="col-sm-8">
                              <input type="text" class="form-control"  name="part_name" value="{{$part->part_name}}" placeholder="Enter Product Name" autofocus>
                              @if ($errors->has('part_name'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('part_name') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>

                  
                        
                   </div>

                   <div class="form-group row  {{ $errors->has('product_price') ? 'has-error' : '' }} ">
                        <label for="productcode" class="col-form-lable-sm col-sm-3">Part Price</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="product_price" value="{{$part->product_price}}" placeholder="Enter Product Code" autofocus>
                        	  @if ($errors->has('product_price'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('product_price') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>
                   
                   <div class="form-group row mt-0 mb-0">
                             <div  class="col-sm-5 offset-sm-3">
                        	       <button type="submit" class="col-sm-6  btn-primary btn-sm btn-block ">Update</button>
                             </div>
                             <div  class="col-sm-4">
                                   <a href="/products" class="btn btn-default col-sm-6  btn-primary btn-sm btn-block ">Cancel</a>
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