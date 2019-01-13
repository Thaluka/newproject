@extends('layouts.operator')
@section('title')
user details
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
  background-color: #A9DFBF ;
}
</style>
 
<h2><b>Complaint Details</h2>
   
  <table class="table table-hover">
  <tr bgcolor="#58D68D  ">
    <th><b>Product name</th>
    
    <th><b>Complaint</th>
    <th><b>User email</th>
    
    <th><b>Address</th>
    
  </tr>

                             @if(count($complains)>0)
                             @foreach($complains as $complains)
                                 <tr>
                                     <td>{{$complains->product_name}}</td>
                                  
                                     <td>{{$complains->message}}</td>
                                     <td>{{$complains->user_email}}</td>
                                     <td>{{$complains->address}}</td>
                                     
                                 </tr>  
                              @endforeach
                         @endif











</div>
</div>




@endsection