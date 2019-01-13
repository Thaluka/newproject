@extends('layouts.manager')
@section('title')
product details
@endsection


<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #A9DFBF ;
}

.select{
  border-color: #f00;
}
</style>
@section('content')

<div class="container">
<br/>
<div class="container-fluid col-md-8 mr-3">
<div>

  <h2><b>Product Details</h2>
  

</div>
<div class="row ml-auto">

 <form method="post" action="/typeviewproducts" class="ml-auto">@csrf
                          <select name="typeid" class="select" >
                                    <option value="#">Choose Product Type</option>
                                    @foreach ($types as $type)
                                    <option value="{{$type->type_id}}">{{$type->type}}</option>
                                    @endforeach
                            </select>
                            <button class="btn-primary" type="submit">Submit</button>
                        
  </form>                         
</div>
    
  






  
   
  <table class="table table-hover">
  <tr bgcolor="#58D68D  ">
  
    <th><b>Product name</th>
    <th><b>Product type </th> 
    <th><b>product code</th>
    
    

                             @if(count($products)>0)
                             @foreach($products as $products)
                                 <tr>
                                     <td>{{$products->product_name}}</td>
                                     <td>{{$products->type}}</td> 
                                     <td>{{$products->product_code}}</td>
                                     
                                 </tr>  
                              @endforeach
                         @endif




  </tr>
</div>
</div>


@endsection
