@extends('layouts.manager')
@section('title')
product details
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
    <th>Product type </th> 
    <th>product code</th>
    <th>product id</th>
    

                             @if(count($products)>0)
                             @foreach($products as $products)
                                 <tr>
                                     <th>{{$products->product_name}}</th>
                                     <th>{{$products->type_id}}</th> 
                                     <th>{{$products->product_code}}</th>
                                     <th>{{$products->id}}</th>
                                 </tr>  
                              @endforeach
                         @endif




  </tr>
</div>
</div>


@endsection
