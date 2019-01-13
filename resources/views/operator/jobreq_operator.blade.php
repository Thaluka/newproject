@extends('layouts.operator')
@section('content')
<div class="container">

<br/>
        
    <div class="container card logform col-lg-8 mr-3">
 
        <div class="card-header row">

                <h5 class="col-sm-6 offset-sm-3 mt-2"> Job Requests<h5></div>

                 <div class="card-body justify-content-center">
                   
                     <div class="col-md-12 justify-content-center">
                         <form method="post" action="{{ action('JobReqOperatorController@store') }}"   class="form-horizontal mt-4" enctype="multipart/form-data">
                         {{csrf_field()}} <input name="_token" type="hidden" value="{{ csrf_token() }}"/>


                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                        <label for="email" class="col-form-label text-left" >Customer E-mail</label>
                        <div  class="col-sm-8 offset-sm-1" >
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Enter Customer's e-mail address" autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                   </div>


                             <div class="form-group   {{ $errors->has('type') ? 'has-error' : '' }} ">
                                 <label for="productcatname"  class=" col-form-label text-left" >Product Type</label>
                                     <div class="col-sm-8 offset-sm-1">
                                         <select id="type" class="form-control select dynamic" name="type" data-dependent="name" autofocus>
                                             <option value="">Choose Product Type</option>
                                         @if(count($types)>0)
                                             @foreach($types as $type)
                                             <option value="{{$type->type_id}}" >{{$type->type}}</option>
                                             @endforeach
                                         @endif                          
                                         </select>
                             </div>
                                 @if ($errors->has('type'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('type') }}</strong>
                                     </span>
                                 @endif                     
                     </div>

                     <div class="form-group   {{ $errors->has('name') ? 'has-error' : '' }} ">
                         <label for="ProductName"  class="col-form-label text-left">Product Name</label>
                             <div class="col-sm-8  offset-sm-1 ">
                             <input type="text" class="form-control" name="name" value="{{old('name')}}" id="ProductName" placeholder="Enter customer's product" autofocus>
                                 <!--<select class="form-control select" name="name"  id="name"  autofocus>
                                  <option value=""></option>
                                  </select>!-->
                             </div>
                                 @if ($errors->has('name'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                 @endif
                     </div>


                     <div class="form-group  {{ $errors->has('message') ? 'has-error' : '' }} ">
                         <label for="Message" class=" col-form-label text-left">Message</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <textarea class="form-control message textarea " name="message" id="Message" rows="3" autofocus></textarea>
                             </div>   
                                 @if ($errors->has('message'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('message') }}</strong>
                                     </span>
                                  @endif
                     </div>

                  <!--    <div class="form-group mb-0  {{ $errors->has('image') ? 'has-error' : '' }} ">
                         <label for="fileField" class=" col-form-label text-left"> Image upload </label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="file" class="form-control-file" name="image"  >
                                 <small class="small">upload a image of the product(if you can)</small>
                             </div><br><br>
                                 @if ($errors->has('image'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('image') }}</strong>
                                     </span>
                                 @endif
                     </div>
 -->
                     <div class="form-group mt-0  {{ $errors->has('address') ? 'has-error' : '' }} ">
                         <label for="Address"  class=" col-form-label text-left" >Address</label>
                             <div class="col-sm-8 offset-sm-1">
                                 <input type="text" class="form-control" name="address" value="{{old('address')}}" id="Address" placeholder="Enter customer's place address" autofocus>
                             </div>
                                 @if ($errors->has('address'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('address') }}</strong>
                                     </span>
                                 @endif
                     </div>

                     <div class="form-group  {{ $errors->has('region') ? 'has-error' : '' }} ">
                         <label for="City"  class="col-form-label text-left" >City</label>
                         <div class="col-sm-8 offset-sm-1">
                             <input type="text" class="form-control" name="region" value="{{old('region')}}" id="City" placeholder="Enter the city near by customer's place" autofocus>
                         </div>
                                 @if ($errors->has('region'))
                                     <span class="help-block" >
                                         <strong>{{ $errors->first('region') }}</strong>
                                     </span>
                                  @endif
                     </div>

                     <div class="form-group ">
                    <div class="col-sm-4 offset-sm-5 mr-1 ">
                         <button type="submit" class="btn btn-primary col-8" > Submit </button>
                    </div>
                   


                    </div>
                    </form>
                 </div>
             </div>
         </div>
         </div>
         <br>     
 
@endsection

         <script>
             $(document).ready(function()){

                 $('.dynamic').change(function(){

                     if($(this).val() != '')
                     {
                         var select = $(this).attr("id");
                         var value = $(this).val();
                         var dependent = $(this).data('dependent');
                         var _token = $('input[name="_token"]').val();

                         $.ajax({
                             url:"{{route('complains.fetch') }}",
                             method:"POST",
                             data:{select:select,value:value,_token:_token,dependent:dependent},
                             success:function(result){
                                 $('#'+dependent).html(result);
                             }
                         })
                     }

                 });

             });
         </script>

