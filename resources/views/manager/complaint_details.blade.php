@extends('layouts.manager')
@section('title')
 
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

  <h2><b>Complaint Details</h2>
  
</div>
<div class="row ml-auto">
  <form method="post" action="/typeviewcomplaints" class="ml-auto">@csrf

                         <select name="typeid" class="select">
                                    <option value="#">Choose Product Type</option>
                                    @foreach ($types as $type)
                                    <option value="{{$type->type_id}}">{{$type->type}}</option>
                                    @endforeach
                            </select>
                            <button class="btn-primary" type="submit">Submit</button>
                             <a href="{{action('PDFController@getPDF')}}" class="btn btn-primary">PDF</a>
                        
  </form>   
</div>

<!-- <div class="col-sm-10 offset-sm-8">
  <a href="{{action('PDFController@getPDF')}}" class="btn btn-warning">PDF all</a>
</div> -->

                      






    
 

   
  <table class="table table-hover">
  <tr bgcolor="#58D68D" >
    <th><b>Product name</th>
    <th><b>Product type id </th> 
    <th><b>Complaint</th>
    <th><b>User email</th>
    
    <th><b>Address</th>
    
  </tr>

                             @if(count($complains)>0)
                             @foreach($complains as $complain)
                                 <tr>
                                     <td>{{$complain->product_name}}</td>
                                     <td>{{$complain->type}}</td> 
                                     <td>{{$complain->message}}</td>
                                     <td>{{$complain->user_email}}</td>
                                     <td>{{$complain->address}}</td>
                                     
                                 </tr>  
                              @endforeach
                         @endif










</div>
</div>




@endsection