@extends('layouts.operator')

@section('content')
<div class="container">

<br/>

<!-- <div class="container card logform col-lg-8 mr-3 ">-->   
 <div class="row justify-content-center">

         <div class="col-md-8">
    
       <!--  <div class="col-md-8"> -->
            <div class="card ml-5 mt-4">
                <div class="card-header">Product Types</div>

                <div class="card-body">

                   
                    <!--  <div class="col-md-12"> -->
                     <form method="post" action="{{ action('AddproductController@store') }}"   class="form-horizontal mt-4">
                  {{csrf_field()}}
                   <div class="form-group row  {{ $errors->has('type') ? 'has-error' : '' }} ">
                         <label for="productcatname" class="col-form-lable-sm col-sm-3">Product Type Name</label>
                         <div class="col-md-8">
                        	  <input type="text" class="form-control"  name="type" value="{{old('type')}}" placeholder="Enter Product Type Name" autofocus>
                        	  @if ($errors->has('type'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('type') }}</strong>
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
