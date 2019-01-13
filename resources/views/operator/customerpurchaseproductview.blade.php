@extends('layouts.operator')
@section('title')
purchase details
@endsection
@section('content')

<div class="container">
<br/>
<div class="container-fluid col-md-8 mr-3">



     
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
  background-color: #A9DFBF;
}
</style>
 
<h2><b>Product Details</h2>
   
   <table class="table table-hover">
  <tr bgcolor="#58D68D  ">

  
    <th>Customer Email</th>
    <th>Product name</th>
    <th>Product type id </th> 
    <th>purchase date</th>
    <th>price</th>
    <th>warranty</th>
    
  </tr>

                         @if(count($PurchaseProducts)>0)
                             @foreach($PurchaseProducts as $PurchaseProduct)
                             <tr>
                                 <th>{{$PurchaseProduct->email}}</th>
                                 <th>{{$PurchaseProduct->product_name}}</th>
                                 <th>{{$PurchaseProduct->type}}</th>
                                 <th>{{$PurchaseProduct->purchase_date}}</th>
                                 <th>{{$PurchaseProduct->price}}</th>
                                 <th>{{$PurchaseProduct->warranty}}</th>
                                 
                             </tr>
  
    



                              @endforeach
                         @endif




  </tr>
</table>




 <div class="row">
       <div class="mr-auto">
           <a href="/buydetails_products/create" class="btn btn-default">Go to add</a>
       </div>
                         <div class="ml-auto">
                             
                         </div>
                    <!--  </div> -->
                
 </div>




</div>
</div>




@endsection