@extends('layouts.customer')
@section('title')
purchase details
@endsection
@section('content')

<div class="container">
  <br>
  <div class="container-fluid col-md-11">

    <h2 style="color: black; background-color: #dddddd; text-align: center"><b >Product  Details</h2>

      <table class="table table-hover">

        <tr bgcolor="#58D68D "> 
          <!-- <th>Customer Email</th> -->
          <th>Product Name</th>
          <th>Product Type </th> 
          <th>Purchased date</th>
          <th>Price</th>
          <th>Warranty Expiration Date</th>
        </tr>

            @if(count($PurchaseProducts)>0)
             @foreach($PurchaseProducts as $PurchaseProduct)

        <tr>
         <!-- <td>{{$PurchaseProduct->email}}</td> -->
         <td>{{$PurchaseProduct->product_name}}</td>
         <td>{{$PurchaseProduct->type}}</td>
         <td>{{$PurchaseProduct->purchase_date}}</td>
         <td>{{$PurchaseProduct->price}}</td>
         <td>{{$PurchaseProduct->warranty}}</td>
        </tr>
  
  
              @endforeach
             @endif
      </table>
      <br>
      <br>

  </div>
</div>

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
  background-color: #A9DFBF;
}
</style>