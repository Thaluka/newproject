@extends('layouts.manager')
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
  background-color: #A9DFBF;
}
</style>
 
<h2><b>Technicians Details</h2>
   
  <table class="table table-hover">
  <tr bgcolor="#58D68D  ">
    <th><b>Firstname</th>
    <th><b>Lastname </th> 
    <th><b>Email</th>
    
    <th><b>Mobile No</th>
    <th><b>Address</th>
    
  </tr>

                         @if(count($users)>0)
                             @foreach($users as $user)
                                 <tr>
                                     <td>{{$user->fname}}</td>
                                     <td>{{$user->lname}}</td> 
                                     <td>{{$user->email}}</td>
                                     <td>{{$user->mobile}}</th>
                                     <td>{{$user->address}}</th>
                                     
                                 </tr>  
                              @endforeach
                         @endif
                        

</table>
</div>
</div>




@endsection