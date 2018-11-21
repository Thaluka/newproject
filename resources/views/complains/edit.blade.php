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
                     <form method="post" action="{{ action('ComplainsController@update',$complain->id) }}"   class="form-horizontal mt-4">
                  {{csrf_field()}}
                   <div class="form-group row  {{ $errors->has('title') ? 'has-error' : '' }} ">
                        <label for="firstname" class="col-form-lable-sm col-sm-3">Title</label>
                        <div class="col-sm-8">
                        	  <input type="text" class="form-control"  name="title" value="{{$complain->title}}" placeholder="Enter your first name" autofocus>
                        	  @if ($errors->has('title'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>
                       
                        
                   </div>
                   <div class="form-group row  {{ $errors->has('body') ? 'has-error' : '' }} ">
                        <label for="lastname" class="col-form-lable-sm col-sm-3">Body</label>
                        <div  class="col-sm-8" >
                        	<input type="text" class="form-control" name="body" value="{{$complain->body}}" placeholder="Enter your last name"  autofocus>
                        	@if ($errors->has('body'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('body') }}</strong>
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
        </div>
        <br>
        
    </div>
</div>
@endsection
