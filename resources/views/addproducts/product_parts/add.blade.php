@extends('layouts.operator')

@section('content')
<div class="container">

<br/>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Parts</div>

                <div class="card-body">
                   
                     <div class="col-md-12">
                     <form method="post" action="{{ action('AddpartController@store') }}"   class="form-horizontal mt-4">
                  {{csrf_field()}}
                   <div class="form-group row  {{ $errors->has('part_id') ? 'has-error' : '' }} ">
                        <label for="productcatname" class="col-form-lable-sm col-sm-3">Part Type</label>
                        <div class="col-sm-8">
                        <select id="type" class="form-control" name="part_id" autofocus>
                                 <option value="">Choose Part Type</option>
                                 @if(count($parts)>0)
                                 @foreach($parts as $part)
                                      <option value="{{$part->id}}" >{{$part->part_name}}</option>
                                 @endforeach
                                 @endif

                                 
                        </select>
                                 @if ($errors->has('type'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('part_id') }}</strong>
                                    </span>
                                 @endif
                        	 
                        </div>
                       
                        
                   </div>

                   <div class="form-group row  {{ $errors->has('quantity') ? 'has-error' : '' }} ">
                        <label for="productcatname" class="col-form-lable-sm col-sm-3">Quantity</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="quantity" value="{{old('quantity')}}" placeholder="Enter Part Quantity" autofocus>
                        	  @if ($errors->has('quantity'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('quantity') }}</strong>
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