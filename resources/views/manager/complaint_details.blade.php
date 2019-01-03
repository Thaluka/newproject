@extends('layouts.manager')
@section('title')
user details
@endsection
@section('content')

<div class="container">
<br/>
<div class="container-fluid col-md-8 mr-3">
    <table style="width:100%">
    
  <table col span='5'border=15px solid black;

  text-align=left;
  width= 100%; 
  background-color= black;
  color= white;

  <colgroup>
    <col style="background-color:red">
    <col style="background-color:yellow">
  </colgroup>

   <br>  
  
  <tr>
    <th>Product name</th>
    <th>Product type id </th> 
    <th>complaint</th>
    <th>User email</th>
    <th>User id</th>
    <th>Address</th>
    
  </tr>

                             @if(count($complains)>0)
                             @foreach($complains as $complains)
                                 <tr>
                                     <th>{{$complains->product_name}}</th>
                                     <th>{{$complains->type_id}}</th> 
                                     <th>{{$complains->message}}</th>
                                     <th>{{$complains->user_email}}</th>
                                     <th>{{$complains->user_id}}</th>
                                     <th>{{$complains->address}}</th>
                                     
                                 </tr>  
                              @endforeach
                         @endif










</div>
</div>




@endsection